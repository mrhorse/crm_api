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
   * @param $input
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function check_is_integer($input) {
    if (FALSE === is_int($input)) {
      throw new ValidationException('check_is_integer expected Argument 1 to be Integer');
    }
    return TRUE;
  }

  /**
   * @param $input
   * @return bool
   * @throws \Torchbox\Thankq\Exception\DataTypeException
   */
  public function check_is_string($input) {
    if (FALSE === is_string($input)) {
      throw new ValidationException('check_is_string expected Argument 1 to be String');
    }
    return TRUE;
  }

  public function check_is_datetime_object($input) {
    if (!($input instanceof \DateTime)) {
      throw new ValidationException('check_is_datetime_object is expected to be a DateTime object.');
    }
    return TRUE;
  }

  public function check_is_allowed_name_prefix($input) {

    $valid_titles = $this->lookup->getNamePrefixes();
    if (!in_array($input, $valid_titles)) {
      throw new ValidationException('Title prefix does not match any of allowed values.');
    }
    return TRUE;

  }


  public function check_min_length($input, $length) {
    if (strlen($input) > 0 && strlen($input) < $length) {
      throw new ValidationException('Input value to expected to be less than ' . $length . '.');
    }
    return TRUE;
  }

  public function just_throw_a_goddamn_error() {
    throw new ValidationException('Throwing a generic pointless error');
  }



}