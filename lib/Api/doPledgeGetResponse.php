<?php

namespace Torchbox\Thankq\Api;

class doPledgeGetResponse
{

    /**
     * @var esitWSdoPledgeGetResult $doPledgeGetResult
     */
    protected $doPledgeGetResult = null;

    /**
     * @param esitWSdoPledgeGetResult $doPledgeGetResult
     */
    public function __construct($doPledgeGetResult)
    {
      $this->doPledgeGetResult = $doPledgeGetResult;
    }

    /**
     * @return esitWSdoPledgeGetResult
     */
    public function getDoPledgeGetResult()
    {
      return $this->doPledgeGetResult;
    }

    /**
     * @param esitWSdoPledgeGetResult $doPledgeGetResult
     * @return \Torchbox\Thankq\Api\doPledgeGetResponse
     */
    public function setDoPledgeGetResult($doPledgeGetResult)
    {
      $this->doPledgeGetResult = $doPledgeGetResult;
      return $this;
    }

}
