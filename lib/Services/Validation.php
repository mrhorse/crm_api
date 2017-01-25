<?php

namespace Torchbox\Thankq\Services;

use Torchbox\Thankq\Exception\ValidationException;

class Validation {

  /** @var \Torchbox\Thankq\Services\Lookup  */
  protected $lookup;

  public function __construct(Lookup $lookup) {
    $this->lookup = $lookup;
  }

  /**
   * Method to throw validation exception and add the field name so we can
   * attribute it to the errored field on the frontend.
   *
   * @param $field_name
   * @param $message
   * @throws \Torchbox\Thankq\Exception\ValidationException
   */
  protected function throwValidationException($field_name, $message) {
    $e = new ValidationException($message);
    $e->setField($field_name);
    throw $e;
  }



  /**
   * @param $input
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function checkIsInteger($field_name, $input) {
    if (FALSE === is_int($input)) {
      $this->throwValidationException($field_name, 'checkIsInteger expected Argument 1 to be Integer');
    }
    return TRUE;
  }

  /**
   * @param $input
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function checkIsString($field_name, $input) {
    if (FALSE === is_string($input)) {
      $this->throwValidationException($field_name, 'checkIsString expected Argument 1 to be String');
    }
    return TRUE;
  }

  /**
   * Test for email - don't be too strict
   * @param $input
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function checkIsEmailLoose($field_name, $input) {
    $allowed_chars = array('@', '.');
    $is_validated = TRUE;
    foreach($allowed_chars as $char) {
      if (strpos($input, $char) == FALSE) {
        $is_validated = FALSE;
        break;
      }
    }
    if (!$is_validated) {
      $this->throwValidationException($field_name, 'Is not a valid email address.');
    }
    return TRUE;
  }

  /**
   * Test input is a DataTime object
   * @param $input
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function checkIsDatetimeObject($field_name, $input) {
    if (!($input instanceof \DateTime)) {
      $this->throwValidationException($field_name, 'checkIsDatetimeObject is expected to be a DateTime object.');
    }
    return TRUE;
  }

  public function checkIsAllowedNamePrefix($field_name, $input) {

    $valid_titles = $this->lookup->getNamePrefixes();
    if (!in_array($input, $valid_titles)) {
      $this->throwValidationException($field_name, 'Title prefix does not match any of allowed values.');
    }
    return TRUE;

  }

  /**
   * TODO: We can't have a 3rd arg due to the way we're executing the validation functions.
   */
  public function checkMinLength($field_name, $input, $length) {
    if (strlen($input) > 0 && strlen($input) < $length) {
       $this->throwValidationException($field_name, 'Input value to expected to be less than ' . $length . '.')  ;
    }
    return TRUE;
  }

  public function just_throw_a_goddamn_error($field_name, $input) {
    $this->throwValidationException($field_name, 'Throwing a generic pointless error');
  }




}