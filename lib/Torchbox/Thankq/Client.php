<?php

namespace Torchbox\Thankq;

use Torchbox\Thankq\Api\EsitWS;
use Torchbox\Thankq\Validation;


class Client {

  /**
   * Store reference to the API Object
   * @var \Torchbox\Thankq\Api\EsitWS
   */
  protected $api;

  /**
   * @var \Torchbox\Thankq\Validation
   */
  protected $validation;

  /**
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   */
  public function __construct(array $options = array(), $wsdl = null){
    $this->api = new EsitWS($options, $wsdl);
    $this->validation = new Validation();
  }

}