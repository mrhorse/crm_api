<?php

namespace Torchbox\Thankq\Api;

class doPledgeEditResponse
{

    /**
     * @var esitWSdoPledgeEditResult $doPledgeEditResult
     */
    protected $doPledgeEditResult = null;

    /**
     * @param esitWSdoPledgeEditResult $doPledgeEditResult
     */
    public function __construct($doPledgeEditResult)
    {
      $this->doPledgeEditResult = $doPledgeEditResult;
    }

    /**
     * @return esitWSdoPledgeEditResult
     */
    public function getDoPledgeEditResult()
    {
      return $this->doPledgeEditResult;
    }

    /**
     * @param esitWSdoPledgeEditResult $doPledgeEditResult
     * @return \Torchbox\Thankq\Api\doPledgeEditResponse
     */
    public function setDoPledgeEditResult($doPledgeEditResult)
    {
      $this->doPledgeEditResult = $doPledgeEditResult;
      return $this;
    }

}
