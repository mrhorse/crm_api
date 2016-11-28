<?php

namespace Torchbox\Thankq\Api;

class doTradingOrderGetResponse
{

    /**
     * @var esitWSdoTradingOrderGetResult $doTradingOrderGetResult
     */
    protected $doTradingOrderGetResult = null;

    /**
     * @param esitWSdoTradingOrderGetResult $doTradingOrderGetResult
     */
    public function __construct($doTradingOrderGetResult)
    {
      $this->doTradingOrderGetResult = $doTradingOrderGetResult;
    }

    /**
     * @return esitWSdoTradingOrderGetResult
     */
    public function getDoTradingOrderGetResult()
    {
      return $this->doTradingOrderGetResult;
    }

    /**
     * @param esitWSdoTradingOrderGetResult $doTradingOrderGetResult
     * @return \Torchbox\Thankq\Api\doTradingOrderGetResponse
     */
    public function setDoTradingOrderGetResult($doTradingOrderGetResult)
    {
      $this->doTradingOrderGetResult = $doTradingOrderGetResult;
      return $this;
    }

}
