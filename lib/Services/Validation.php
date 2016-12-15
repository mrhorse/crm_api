<?php

namespace Torchbox\Thankq\Services;

use Torchbox\Thankq\Exception;

class Validation {

  /** @var \Torchbox\Thankq\Services\Lookup  */
  protected $lookup;

  public function __construct(Lookup $lookup) {
    $this->lookup = $lookup;
  }

  /**
   * @param $value
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function check_is_integer($value) {
    if (FALSE === is_int($value)) {
      throw new Exception\DataTypeException('check_is_integer expected Argument 1 to be Integer');
    }
    return TRUE;
  }

  /**
   * @param $value
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function check_is_string($value) {
    if (FALSE === is_string($value)) {
      throw new Exception\DataTypeException('check_is_string expected Argument 1 to be String');
    }
    return TRUE;
  }

  public function check_is_datetime_object($value) {
    if (!($value instanceof \DateTime)) {
      throw new \Exception('Value to expected to be a DateTime object.');
    }
    return TRUE;
  }

  public function check_is_valid_name_prefix($value) {
    /*
    $valid_titles = $this->lookup->getNamePrefixes();
    if (!in_array($value, $valid_titles));

    throw new ValidationException('Contact title does not match any of allowed values.');
    */


  }


  public function is_email_format() {

  }



}