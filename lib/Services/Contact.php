<?php

namespace Torchbox\Thankq\Services;

use Torchbox\Thankq\Validation;
use Torchbox\Thankq\Exception\ClassException;
use Torchbox\Thankq\Exception\TypeException;
use Torchbox\Thankq\Exception\ValidationException;

use Torchbox\Thankq\Api\doContactGet;
use Torchbox\Thankq\Api\doContactInsert;

use Torchbox\Thankq\Api\esitWSdoContactInsertArgument;
use Torchbox\Thankq\Api\esitWScontact;
use Torchbox\Thankq\Api\esitWScontactAddress;
use Torchbox\Thankq\Api\esitWScontactAttribute;
use Torchbox\Thankq\Api\esitWScontactDataProtection;
use Torchbox\Thankq\Api\esitWSdoContactInsertResult;
use Torchbox\Thankq\Api\esitWSdoContactGetResult;



/**
 * Class Contact
 * Performs 'contact' operations on the API - contact data is the main data
 * held for a member in the CRM.
 *
 * @package Torchbox\Thankq\Services
 */
class Contact {

  /** @var \Torchbox\Thankq\Services\ThankqClient **/
  private $client;

  /** @var \Torchbox\Thankq\Validation **/
  private $validation;


  /**
   * @var array Incoming field data keys associated with their esit class,
   * method and validation method(s).
   */
  private $field_map = array(

    /**
     * esitWScontact
     */
    // @TODO: Check title is one of allowed from getLookups
    'title' => array(
      'class' => 'esitWScontact',
      'method' => 'setTitle',
      'validation' => array(),
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

    'email' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setMobileNumber',
      'validation' => array(),
    ),
    'address_1' => array(
      'class' => 'esitWScontactAddress',
      'method' => 'setAddressLine1',
      'validation' => array(),
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
      'validation' => array('is_datetime_object'),
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
   * @param \Torchbox\Thankq\Services\ThankqClient $client
   * @param \Torchbox\Thankq\Validation $validation
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
   * @param array $field_data - Assoc array of field_names => values
   * Correspond to the map of $this->fields_to_methods
   * @return \Torchbox\Thankq\Api\esitWSdoContactInsertResult
   */
  public function insertContact(array $field_data) {

    $field_map = $this->field_map;

    /**
     * Do things to the input data array before any validation and API calls
     * @TODO, remember address_2 input field map is an empty array!
     * @TODO Contact type, address type, where does organisation name go?
     * @TODO 'Source' is accounted for, but not 'source other' on API spreadsheet
     *
     */

    // There is no storage for address2 in Thankq - Merge add2 into 1, separate with newline.
    if (!empty($field_data['address_1'] && !empty(trim($field_data['address_2'])))) {
      $field_data['address_1'] = $field_data['address_1'] . "\n" . $field_data['address_2'];
      unset($field_data['address_2']);
    }

    // error_log(print_r($field_data,true));


    // First handle our pre-CRM validation functions, declared in the
    // field map.
    $errors = array();
    foreach ($field_data as $field_name => $value) {
      if (array_key_exists($field_name, $field_map)) {
        $validation_functions = !empty($field_map[$field_name]['validation']) ? $field_map[$field_name]['validation'] : array();
        foreach ($validation_functions as $validate) {
          try {
            // Call corresponding validation method from Validation Class and
            // catch any nasty things.
            if (method_exists($this->validation, $validate) && is_callable(array($this->validation, $validate))) {
              call_user_func(array($this->validation, $validate), $value);
            } else {
              Throw new ClassException('Method ' . $validate . ' does not exist or is not callable on class Torchbox\\Thankq\\Validation.');
            }
          } catch (ClassException $e) {
            $errors['class'] = $e->getMessage();
          } catch (TypeException $e) {
            $errors['type'] = 'Field `' .$field_name . '`: ' . $e->getMessage();
          } catch (ValidationException $e) {
            $errors['validation'] = 'Field `' .$field_name . '`: ' . $e->getMessage();
          }
        }
      }
    }
    // @TODO HOW TO SEND ERRORS BACK IN A USEFUL MANNER
    if (!empty($errors)) {
      error_log(print_r($errors, true));
    }



    // Assign new instances of our esit data insertion classes to variables that
    // match the 'class' strings in the field_map array.
    $esitWScontact = new esitWScontact();
    $esitWScontactAddress = new esitWScontactAddress();
    $esitWScontactAttribute = new esitWScontactAttribute();
    // Defaults should be opt-out for data protection, according to best
    // practices.
    $esitWScontactDataProtection = new esitWScontactDataProtection(FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE);


    $api_errors = array();
    foreach ($field_data as $field_name => $value) {
      if (array_key_exists($field_name, $field_map) && !empty($field_data[$field_name])) {
        // convert the classname in array to variable
        $classname = $field_map[$field_name]['class'];
        $class = $$classname;

        try {
          if (method_exists($class, $field_map[$field_name]['method']) && is_callable(array($class, $field_map[$field_name]['method']))) {
            //error_log($class . ' ' . $field_map[$field_name]['method']);
            call_user_func(array($class, $field_map[$field_name]['method']), $value);
          } else {
            Throw new ClassException('Method ' . $field_map[$field_name]['method'] . ' does not exist or is not callable on API class ' . $classname . '.');
          }

        } catch (ClassException $e) {
          $api_errors['class'] = $e->getMessage();
        }

      }
    }
    //error_log(print_r($esitWScontact, true));
    //error_log(print_r($esitWScontactAddress, true));
    //error_log(print_r($esitWScontactAttribute, true));

    // Build our argument to pass to the doContactInsert class
    $insert_data = new esitWSdoContactInsertArgument();
    $insert_data->setContact($esitWScontact);
    $insert_data->setContactAddress($esitWScontactAddress);
    $insert_data->setContactAttribute($esitWScontactAttribute);
    $insert_data->setContactDataProtection($esitWScontactDataProtection);


    $request = new doContactInsert($insert_data);
    $response = $this->client->doContactInsert($request);
    /** @var esitWSdoContactInsertResult $result */
    $result = $response->getDoContactInsertResult();

    /* Don't think we need this. @todo Remove this block if we don't need it */
    //$insert_response = new doContactInsertResponse($result);
    /** @var esitWSdoContactInsertResult $return */
    //$return = $insert_response->getDoContactInsertResult();

    return $result;
  }

  /**
   * @param (string) $serial - Contact serial number
   * @return \Torchbox\Thankq\Api\esitWSdoContactGetResult
   */
  public function getContact($serial) {

    try {
      $this->validation->ensure_string($serial);
    } catch (TypeException $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }


    $request = new doContactGet($serial);
    $response = $this->client->doContactGet($request);
    /** @var esitWSdoContactGetResult $result */
    $result = $response->getDoContactGetResult();
    return $result;
  }

  public function searchContact($num_results, $data) {


  }
}