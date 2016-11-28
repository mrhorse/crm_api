<?php

namespace Torchbox\Thankq;

use Torchbox\Thankq\ThankqClient;
use Torchbox\Thankq\Api\EsitWS;
use Torchbox\Thankq\Api\doLookupGet;


class Lookup {

  /**
   * @var \Torchbox\Thankq\ThankqClient
   */
  private $thankqClient;

  /**
   * @var \Torchbox\Thankq\Api\doLookupGet
   */
  private $doLookupGet;



  public function __construct(ThankqClient $thankqClient, EsitWS $api) {
    $this->thankqClient = $thankqClient;

  }


  protected function getLookupResults($lookup) {
    $request = $this->api->doLookupGet($lookup);
    $response = $api->doLookupGet($request);
    $result = $response->getDoLookupGetResult()->getLookups()->getEsitWSlookup();
    return $result;
  }

  public function getNamePrefixes() {
    return $this->getLookupResults('TITLE');
  }

}