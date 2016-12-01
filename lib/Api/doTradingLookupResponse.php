<?php

namespace Torchbox\Thankq\Api;

class doTradingLookupResponse
{

    /**
     * @var esitWSdoTradingLookupResult $doTradingLookupResult
     */
    protected $doTradingLookupResult = null;

    /**
     * @param esitWSdoTradingLookupResult $doTradingLookupResult
     */
    public function __construct($doTradingLookupResult)
    {
      $this->doTradingLookupResult = $doTradingLookupResult;
    }

    /**
     * @return esitWSdoTradingLookupResult
     */
    public function getDoTradingLookupResult()
    {
      return $this->doTradingLookupResult;
    }

    /**
     * @param esitWSdoTradingLookupResult $doTradingLookupResult
     * @return \Torchbox\Thankq\Api\doTradingLookupResponse
     */
    public function setDoTradingLookupResult($doTradingLookupResult)
    {
      $this->doTradingLookupResult = $doTradingLookupResult;
      return $this;
    }

}
