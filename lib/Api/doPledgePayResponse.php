<?php

namespace Torchbox\Thankq\Api;

class doPledgePayResponse
{

    /**
     * @var esitWSdoPledgePayResult $doPledgePayResult
     */
    protected $doPledgePayResult = null;

    /**
     * @param esitWSdoPledgePayResult $doPledgePayResult
     */
    public function __construct($doPledgePayResult)
    {
      $this->doPledgePayResult = $doPledgePayResult;
    }

    /**
     * @return esitWSdoPledgePayResult
     */
    public function getDoPledgePayResult()
    {
      return $this->doPledgePayResult;
    }

    /**
     * @param esitWSdoPledgePayResult $doPledgePayResult
     * @return \Torchbox\Thankq\Api\doPledgePayResponse
     */
    public function setDoPledgePayResult($doPledgePayResult)
    {
      $this->doPledgePayResult = $doPledgePayResult;
      return $this;
    }

}
