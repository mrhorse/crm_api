<?php

namespace Torchbox\Thankq;

use Torchbox\Thankq\Services\Lookup;

use Torchbox\Thankq\Exception\TypeException;
use Torchbox\Thankq\Exception\ValidationException;

class Validation {

  /** @var \Torchbox\Thankq\Services\Lookup  */
  protected $lookup;

  public function __construct(Lookup $lookup) {
    $this->lookup = $lookup;
  }



  public function ensure_integer($value) {
    if (FALSE === is_int($value)) {
      throw new TypeException('ensure_integer expected Argument 1 to be Integer');
    }
  }

  public function ensure_string($value) {
    if (FALSE === is_string($value)) {
      throw new TypeException('ensure_string expected Argument 1 to be String');
    }
  }

  public function is_datetime_object($value) {

  }

  public function is_valid_name_title($value) {
    /*
    $valid_titles = $this->lookup->getNamePrefixes();
    if (!in_array($value, $valid_titles));

    throw new ValidationException('Contact title does not match any of allowed values.');
    */


  }


  public function is_email_format() {

  }



}