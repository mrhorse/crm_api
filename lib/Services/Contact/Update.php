<?php

namespace Torchbox\Thankq\Services\Contact;

use Torchbox\Thankq\Exception\ValidationException;
use Torchbox\Thankq\Exception\ThankqApiException;
use Torchbox\Thankq\Exception\ApiClassException;

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
  }


  /**
   * @param $serial
   * @param array $field_data
   * @return \Torchbox\Thankq\Api\esitWSdoContactInsertResult
   */
  public function updateContact($serial, array $field_data) {

    $contact = $this->contact_read->getContact($serial);

    // Retrive existing record and set update args in our properties
    $this->esitWScontact = $contact->getContact();
    $this->esitWScontactAddress = $contact->getContactAddress();
    $this->esitWScontactAttribute = $contact->getContactAttribute();
    $this->esitWScontactDataProtection = $contact->getContactDataProtection();

    // Update the contact args with the new input data.
    $this->setContactData($field_data);

    // Build the argument for updating
    $update_data = new Api\esitWSdoContactUpdateArgument();
    $update_data->setSerialnumber($serial);
    $update_data->setContact($this->esitWScontact);
    $update_data->setContactAddress($this->esitWScontactAddress);
    $update_data->setContactAttribute($this->esitWScontactAttribute);
    $update_data->setContactDataProtection($this->esitWScontactDataProtection);


    $request = new Api\doContactUpdate($update_data);
    $response = $this->client->doContactUpdate($request);
    /** @var Api\esitWSdoContactInsertResult $result */
    $result = $response->getDoContactUpdateResult();
    return $result;

  }


}