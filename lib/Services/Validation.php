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
   * @param $field_name
   * @param $message
   * @throws \Torchbox\Thankq\Exception\ValidationException
   */
  protected function throw_validation_exception($field_name, $message) {
    $e = new ValidationException($message);
    $e->setField($field_name);
    throw $e;
  }



  /**
   * @param $input
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function check_is_integer($field_name, $input) {
    if (FALSE === is_int($input)) {
      $this->throw_validation_exception($field_name, 'check_is_integer expected Argument 1 to be Integer');
    }
    return TRUE;
  }

  /**
   * @param $input
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function check_is_string($field_name, $input) {
    if (FALSE === is_string($input)) {
      $this->throw_validation_exception($field_name, 'check_is_string expected Argument 1 to be String');
    }
    return TRUE;
  }

  public function check_is_datetime_object($field_name, $input) {
    if (!($input instanceof \DateTime)) {
      $this->throw_validation_exception($field_name, 'check_is_datetime_object is expected to be a DateTime object.');
    }
    return TRUE;
  }

  public function check_is_allowed_name_prefix($field_name,$input) {

    $valid_titles = $this->lookup->getNamePrefixes();
    if (!in_array($input, $valid_titles)) {
      $this->throw_validation_exception($field_name, 'Title prefix does not match any of allowed values.');
    }
    return TRUE;

  }

  /**
   * TODO: We can't have a 3rd arg due to the way we're executing the validation functions.
   */
  public function check_min_length($field_name, $input, $length) {
    if (strlen($input) > 0 && strlen($input) < $length) {
       $this->throw_validation_exception($field_name, 'Input value to expected to be less than ' . $length . '.')  ;
    }
    return TRUE;
  }

  public function just_throw_a_goddamn_error($field_name, $input) {
    $this->throw_validation_exception($field_name, 'Throwing a generic pointless error');
  }




}