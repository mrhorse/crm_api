<?php

namespace Torchbox\Thankq\Services;


use Torchbox\Thankq\Api\EsitWS;
use Torchbox\Thankq\Validation;


class ThankqClient extends EsitWS {

  /**
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   */
  public function __construct($options = array(), $wsdl = NULL){
    //$container = $containerManager->getContainer();
    parent::__construct($options, $wsdl);
  }


}