<?php

namespace Torchbox\Thankq\Services\Contact;

use Torchbox\Thankq\Exception\ThankqApiException;
use Torchbox\Thankq\Services\ThankqClient;
use Torchbox\Thankq\Services\Validation;
use Torchbox\Thankq\Api;


class Create extends Base {

  protected $esitWScontact;
  protected $esitWScontactAddress;
  protected $esitWScontactAttribute;
  protected $esitWScontactDataProtection;

  /**
   * @inheritdoc
   */
  public function __construct(ThankqClient $client, Validation $validation) {
    parent::__construct($client, $validation);

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
   * @param array $field_data
   * @return \Torchbox\Thankq\Api\esitWSdoContactInsertResult
   * @throws \Exception
   */
  public function insertContact(array $field_data) {

    try {
      $this->fieldDataPreProcess($field_data);
      $this->validateFieldData($field_data);
      $this->setContactData($field_data);

      $insert_data = new Api\esitWSdoContactInsertArgument();
      $insert_data->setContact($this->esitWScontact);
      $insert_data->setContactAddress($this->esitWScontactAddress);
      $insert_data->setContactAttribute($this->esitWScontactAttribute);
      $insert_data->setContactDataProtection($this->esitWScontactDataProtection);


      $request = new Api\doContactInsert($insert_data);
      $response = $this->client->doContactInsert($request);
      /** @var Api\esitWSdoContactInsertResult $result */
      $result = $response->getDoContactInsertResult();
      return $result;

    } catch(ThankqApiException $e) {
      throw new \Exception('Thankq Api error', null, $e);
    }
  }

}