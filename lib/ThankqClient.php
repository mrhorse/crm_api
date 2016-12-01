<?php

namespace Torchbox\Thankq;

use Torchbox\Thankq\ContainerManager;
use Torchbox\Thankq\Api\EsitWS;
use Torchbox\Thankq\Validation;


class ThankqClient extends EsitWS {

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
  public function __construct(ContainerManager $containerManager){
    $container = $containerManager->getContainer();

    parent::__construct(
      $container->getParameter('soap.options'),
      $container->getParameter('soap.wsdl')
    );

    $this->validation = new Validation();
  }

}