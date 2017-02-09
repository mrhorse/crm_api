<?php

namespace Torchbox\Thankq\Services\Contact;

use Torchbox\Thankq\Exception\ThankqApiException;
use Torchbox\Thankq\Services\ThankqClient;
use Torchbox\Thankq\Services\Validation;
use Torchbox\Thankq\Exception\ApiClassException;
use Torchbox\Thankq\Exception\ValidationException;

/**
 * Class Base
 * Base for performing 'contact' operations on the API - contact data is the
 * main data held for a member in the CRM.
 *
 * @package Torchbox\Thankq\Services\Contact
 */
abstract class Base {

  /** @var ThankqClient **/
  protected $client;

  /** @var Validation $validation **/
  protected $validation;


  /**
   * @var array Incoming field data keys associated with their esit class,
   * method and validation method(s).
   */
  protected $field_map = array(

    /**
     * esitWScontact
     */
    // @TODO: Check title is one of allowed from getLookups
    'title' => array(
      'class' => 'esitWScontact',
      'method' => 'setTitle',
      'validation' => array('checkIsAllowedNamePrefix'),
    ),
    'first_name' => array(
      'class' => 'esitWScontact',
      'method' => 'setFirstname',
      'validation' => array(),
    ),

    // Secondname = surname, fyi
    // @TODO: Min 2 chars
    'second_name' => array(
      'class' => 'esitWScontact',
      'method' => 'setKeyname',
      'validation' => array(),
    ),


    /* Currently unused by us:
    'initial' => array(
      'class' => 'esitWScontact',
      'method' => 'setOtherInitial',
      'validation' => array(),
    ),
    // @TODO: What is this??
    'post_nominal' => array(
      'class' => 'esitWScontact',
      'method' => 'setPostNominal',
      'validation' => array(),
    ),

    */

    /**
     * esitWScontactAddress
     */

    'mail' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setEmailAddress',
      'validation' => array(),
    ),
    'address_1' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setAddressLine1',
      'validation' => array('checkNoCommas'),
    ),
    // Basically there's nowhere for address_2 to go in thankq
    // See insertContact()
    //'address_2' => array(),

    'address_town' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setAddressLine3',
      'validation' => array(),
    ),

    'address_county' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setAddressLine4',
      'validation' => array(),
    ),
    'postcode' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setPostcode',
      'validation' => array(),
    ),
    'phone_daytime' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setDayTelephone',
      'validation' => array(),
    ),
    'phone_evening' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setEveningTelephone',
      'validation' => array(),
    ),
    'phone_mobile' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setMobileNumber',
      'validation' => array(),
    ),

    /* Currently unused by us:
    'country' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setCountry',
      'validation' => array(),
    ),
    'website' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setWebsite',
      'validation' => array(),
    ),
    */


    /**
     * esitWScontactAttribute
     */

    'dob' => array(
      'class' => 'esitWScontactAttribute',
      'method' => 'setDateOfBirth',
      // Must be datetime object \DateTime
      'validation' => array('checkIsDatetimeObject'),
    ),
    'source' => array(
      'class' => 'esitWScontactAttribute',
      'method' => 'setSource',
      'validation' => array(),
    ),
    'organisation' => array(),

    // @TODO Default is individual. Set to other value if organisation provided.
    'contact_type' => array(
      'class' => 'esitWScontactAttribute',
      'method' => 'setContactType',
      'validation' => array(),
    ),

    /* Unused:
    // Gender is automatically determined by the CRM using the name prefix
    'gender' => array(
      'class' => 'esitWScontactAttribute',
      'method' => 'setGender',
      'validation' => array(),
    ),
    'marital_status' => array(
      'class' => 'esitWScontactAttribute',
      'method' => 'setGender',
      'validation' => array(),
    ),
    */


    /**
     * esitWScontactDataProtection
     */
    // @TODO: Data protection

  );

  /**
   * Contact constructor.
   * @param ThankqClient $client
   * @param Validation $validation
   */
  public function __construct(ThankqClient $client, Validation $validation) {
    $this->client = $client;
    $this->validation = $validation;
  }

  /**
   * Retrive the fields map - useful for dev, knowing what field IDs the
   * this library should expect.
   * @param bool $field_defs_only
   * @return array
   */
  public function getFieldMap($field_defs_only = FALSE) {
   return $field_defs_only ? array_keys($this->field_map) : $this->field_map;
  }

  /**
   * Publicly accessible middleman to preprocess and validation field data. The
   * idea is to be able to use this method to prepare the input data for thankq,
   * (for example such processing as merge address_2 into address_1), THEN
   * validate. Keeping these functions separate from actual data insert/update
   * operations means we can queue the already prepared and validated data in
   * externally if needs be.
   * @param array $field_data
   * @return array
   */
  public function checkFieldData(array $field_data) {
    $this->preProcessFieldData($field_data);
    $this->validateFieldData($field_data);
    return $field_data;
  }
  /**
   * Some input field data will need adjusting before validation and
   * @param $field_data
   */
  protected function preProcessFieldData(array &$field_data) {

    /**
     * Do things to the input data array before any validation and API calls
     * @TODO, remember address_2 input field map is an empty array!
     * @TODO Contact type, address type, where does organisation name go?
     * @TODO 'Source' is accounted for, but not 'source other' on API spreadsheet
     * @TODO Do the work surrounding initials if first name is of min length
     *
     */

    // There is no storage for address2 in Thankq - Merge add2 into 1, separate with newline.
    if (!empty($field_data['address_1']) && !empty(trim($field_data['address_2']))) {
      $field_data['address_1'] = $field_data['address_1'] . "\n" . $field_data['address_2'];
      unset($field_data['address_2']);
    }

  }


  /**
   * Delegate input fields to validation functions as declared in
   * $this->field_map above. We should be able to execute this from outside
   * the library.
   *
   * @param array $field_data
   * @return array $field_data
   * @throws \Torchbox\Thankq\Exception\ApiClassException
   */
  protected function validateFieldData(array &$field_data) {
    $result = NULL;
    foreach ($field_data as $field_name => $value) {
      if (array_key_exists($field_name, $this->field_map)) {
        $validation_functions = !empty($this->field_map[$field_name]['validation']) ? $this->field_map[$field_name]['validation'] : array();
        foreach ($validation_functions as $function) {

          // Call corresponding validation method from Validation Class.
          if (method_exists($this->validation, $function) && is_callable(array($this->validation, $function))) {
            call_user_func(array($this->validation, $function), $field_name, $value);
          }
          else {
            throw new ApiClassException('Method ' . $function . ' does not exist or is not callable on class Torchbox\\Thankq\\Validation.');
          }
        }
      }
    }
    // If we reach here without exception then flag validated
    $field_data['thankq_validated'] = TRUE;
  }

  /**
   * Set data for insertion on the appropriate arguments.
   *
   * @param array $field_data
   * @throws \Torchbox\Thankq\Exception\ThankqApiException
   */
  protected function setContactData(array $field_data) {

    foreach ($field_data as $field_name => $value) {
      if (array_key_exists($field_name, $this->field_map) && !empty($field_data[$field_name])) {
        // convert the classname in array to variable
        $classname = $this->field_map[$field_name]['class'];
        // Variable variable (usually double $$ for procedural stuff).
        $class = $this->$classname;

        if (method_exists($class, $this->field_map[$field_name]['method']) && is_callable(array($class, $this->field_map[$field_name]['method']))) {
          //error_log($class . ' ' . $field_map[$field_name]['method']);
          call_user_func(array($class, $this->field_map[$field_name]['method']), $value);
        } else {
          throw new ApiClassException('Method ' . $this->field_map[$field_name]['method'] . ' does not exist or is not callable on API class ' . $classname . '.');
        }

      }
    }
    return $this;
  }


}