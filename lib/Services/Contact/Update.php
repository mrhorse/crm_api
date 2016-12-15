<?php

namespace Torchbox\Thankq\Services\Contact;

use Torchbox\Thankq\Exception;
use Torchbox\Thankq\Services\ThankqClient;
use Torchbox\Thankq\Services\Validation;

use Torchbox\Thankq\Api;


class Update extends Base {

  /**
   * @var Read $contact_read
   */
  protected $contact_read;

  protected $esitWScontact;
  protected $esitWScontactAddress;
  protected $esitWScontactAttribute;
  protected $esitWScontactDataProtection;

  /**
   * @inheritdoc
   */
  public function __construct(ThankqClient $client, Validation $validation, Read $contactRead) {
    parent::__construct($client, $validation);


    $this->contact_read = $contactRead;

    // Assign new instances of our esit data insertion classes to variables that
    // match the 'class' strings in the field_map array.
    $this->esitWScontact = new Api\esitWScontact();
    $this->esitWScontactAddress = new Api\esitWScontactAddress();
    $this->esitWScontactAttribute = new Api\esitWScontactAttribute();
    // Defaults should be opt-out for data protection, according to best
    // practices.
    $this->esitWScontactDataProtection = new Api\esitWScontactDataProtection(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE);
  }


  /**
   * @param $serial
   * @param array $field_data
   * @return \Torchbox\Thankq\Api\esitWSdoContactInsertResult
   */
  public function updateContact($serial, array $field_data) {


    try {
      $contact = $this->contact_read->getContact($serial);

      // Retrive existing record and set update args in our properties
      $this->esitWScontact = $contact->getContact();
      $this->esitWScontactAddress = $contact->getContactAddress();
      $this->esitWScontactAttribute = $contact->getContactAttribute();
      $this->esitWScontactDataProtection = $contact->getContactDataProtection();

      // Preprocess field data, update individual record
      $this->fieldDataPreProcess($field_data);
      $this->validateFieldData($field_data);
      $this->setContactData($field_data);

      // Build the argument for updating
      $update_data = new Api\esitWSdoContactUpdateArgument();
      //$update_data->setSerialnumber($serial);
      $update_data->setContact($this->esitWScontact);
      $update_data->setContactAddress($this->esitWScontactAddress);
      $update_data->setContactAttribute($this->esitWScontactAttribute);
      $update_data->setContactDataProtection($this->esitWScontactDataProtection);


      $request = new Api\doContactUpdate($update_data);
      $response = $this->client->doContactUpdate($request);
      /** @var Api\esitWSdoContactInsertResult $result */
      $result = $response->getDoContactUpdateResult();
      return $result;

    } catch(Exception\ThankqApiException $e) {
      throw new \Exception('Thankq Api error', null, $e);
    }
  }


}