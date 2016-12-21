<?php

namespace Torchbox\Thankq\Services;

use Torchbox\Thankq\Api\doLookupGet;
use Torchbox\Thankq\Api\esitWSlookup;


class Lookup {

  /**
   * @var \Torchbox\Thankq\Services\ThankqClient
   */
  private $client;

  /**
   * Lookup constructor.
   * @param \Torchbox\Thankq\Services\ThankqClient $client
   */
  public function __construct(ThankqClient $client) {
    $this->client = $client;
  }

  /**
   * @param $lookup string
   * @return \Torchbox\Thankq\Api\esitWSlookup[]
   */
  protected function getLookupResults($lookup) {
    $request = new doLookupGet($lookup);
    $response = $this->client->doLookupGet($request);
    $result = $response->getDoLookupGetResult()->getLookups()->getEsitWSlookup();
    return $result;
  }


  /**
   * @return array
   */
  public function getNamePrefixes() {

    $lookups = $this->getLookupResults('TITLE');

    $results = array();
    foreach ($lookups as $lookup) {
      if ($lookup->getLookupvalue5() !== '') {
        $results[$lookup->getLookupvalue5()] = $lookup->getLookupvalue1();
      }
    }
    ksort($results);
    return $results;
  }

  /**
   * @return array
   */
  public function getMailingLists() {

    $lookups = $this->getLookupResults('MAILINGPREFERENCE');

    $results = array();
    foreach ($lookups as $lookup) {
      $results[] = $lookup->getLookupvalue1();
    }
    return $results;
  }

  /**
   * @return array
   */
  public function getPublicationResources() {

    $lookups = $this->getLookupResults('PUBLICATION CATEGORY');

    $results = array();
    foreach ($lookups as $lookup) {
      $results[] = $lookup->getLookupvalue1();
    }
    return $results;
  }



}