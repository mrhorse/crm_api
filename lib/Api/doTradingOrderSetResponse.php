<?php

namespace Torchbox\Thankq\Api;

class doTradingOrderSetResponse
{

    /**
     * @var esitWSdoTradingOrderSetResult $doTradingOrderSetResult
     */
    protected $doTradingOrderSetResult = null;

    /**
     * @param esitWSdoTradingOrderSetResult $doTradingOrderSetResult
     */
    public function __construct($doTradingOrderSetResult)
    {
      $this->doTradingOrderSetResult = $doTradingOrderSetResult;
    }

    /**
     * @return esitWSdoTradingOrderSetResult
     */
    public function getDoTradingOrderSetResult()
    {
      return $this->doTradingOrderSetResult;
    }

    /**
     * @param esitWSdoTradingOrderSetResult $doTradingOrderSetResult
     * @return \Torchbox\Thankq\Api\doTradingOrderSetResponse
     */
    public function setDoTradingOrderSetResult($doTradingOrderSetResult)
    {
      $this->doTradingOrderSetResult = $doTradingOrderSetResult;
      return $this;
    }

}
