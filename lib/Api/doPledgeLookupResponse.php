<?php

namespace Torchbox\Thankq\Api;

class doPledgeLookupResponse
{

    /**
     * @var esitWSdoPledgeLookupResult $doPledgeLookupResult
     */
    protected $doPledgeLookupResult = null;

    /**
     * @param esitWSdoPledgeLookupResult $doPledgeLookupResult
     */
    public function __construct($doPledgeLookupResult)
    {
      $this->doPledgeLookupResult = $doPledgeLookupResult;
    }

    /**
     * @return esitWSdoPledgeLookupResult
     */
    public function getDoPledgeLookupResult()
    {
      return $this->doPledgeLookupResult;
    }

    /**
     * @param esitWSdoPledgeLookupResult $doPledgeLookupResult
     * @return \Torchbox\Thankq\Api\doPledgeLookupResponse
     */
    public function setDoPledgeLookupResult($doPledgeLookupResult)
    {
      $this->doPledgeLookupResult = $doPledgeLookupResult;
      return $this;
    }

}
