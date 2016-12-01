<?php

namespace Torchbox\Thankq;

use Torchbox\Thankq\ThankqClient;
use Torchbox\Thankq\Api\doLookupGet;


class Lookup {

  /**
   * @var \Torchbox\Thankq\ThankqClient
   */
  private $client;

  /**
   * @var \Torchbox\Thankq\Api\doLookupGet
   */
  private $lookupGet;



  public function __construct(ThankqClient $client) {
    $this->thankqClient = $client;
    $this->setDoLookupGet();
  }

  private function setDoLookupGet() {
    $this->lookupGet = new doLookupGet();
  }


  protected function getLookupResults($lookup) {
    $request = $this->client->doLookupGet($lookup);
    $response = $lookupGet->doLookupGet($request);
    $result = $response->getDoLookupGetResult()->getLookups()->getEsitWSlookup();
    return $result;
  }

  public function getNamePrefixes() {
    return $this->getLookupResults('TITLE');
  }

}