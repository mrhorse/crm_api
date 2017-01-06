<?php

namespace Torchbox\Thankq\Exception;

/**
 * Class ValidationException
 * Class for SOAP service validation exceptions.
 *
 * @package Torchbox\Thankq\Exception
 */

class ValidationException extends \Exception {


  private $field = NULL;

  /**
   * Store the field_name with the exception, that way we can feed back
   * qualitative validation exceptions.
   * @param string $field_name
   */
  public function setField($field_name) {
    $this->field = $field_name;
  }

  public function getField() {
    return $this->field;
  }
}