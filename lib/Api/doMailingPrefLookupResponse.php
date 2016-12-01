<?php

namespace Torchbox\Thankq\Api;

class doMailingPrefLookupResponse
{

    /**
     * @var esitWSdoMailingPrefLookupResult $doMailingPrefLookupResult
     */
    protected $doMailingPrefLookupResult = null;

    /**
     * @param esitWSdoMailingPrefLookupResult $doMailingPrefLookupResult
     */
    public function __construct($doMailingPrefLookupResult)
    {
      $this->doMailingPrefLookupResult = $doMailingPrefLookupResult;
    }

    /**
     * @return esitWSdoMailingPrefLookupResult
     */
    public function getDoMailingPrefLookupResult()
    {
      return $this->doMailingPrefLookupResult;
    }

    /**
     * @param esitWSdoMailingPrefLookupResult $doMailingPrefLookupResult
     * @return \Torchbox\Thankq\Api\doMailingPrefLookupResponse
     */
    public function setDoMailingPrefLookupResult($doMailingPrefLookupResult)
    {
      $this->doMailingPrefLookupResult = $doMailingPrefLookupResult;
      return $this;
    }

}
