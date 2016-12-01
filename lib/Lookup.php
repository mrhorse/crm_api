<?php

namespace Torchbox\Thankq;

use Torchbox\Thankq\ContainerManager;
use Torchbox\Thankq\Api\doLookupGet;


class Lookup {

  /**
   * @var \Torchbox\Thankq\ThankqClient
   */
  private $client;

  public function __construct(ContainerManager $containerManager) {
    $container = $containerManager->getContainer();
    $this->client = $container->get('thankq.client');
  }


  protected function getLookupResults($lookup) {
    $request = new doLookupGet($lookup);
    $result = $this->client->getDoLookupGetResult($request)->getLookups()->getEsitWSlookup();
    return $result;
  }

  public function getNamePrefixes() {
    return $this->getLookupResults('TITLE');
  }

}