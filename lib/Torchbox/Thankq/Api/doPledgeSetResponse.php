<?php

namespace Torchbox\Thankq\Api;

class doPledgeSetResponse
{

    /**
     * @var esitWSdoPledgeSetResult $doPledgeSetResult
     */
    protected $doPledgeSetResult = null;

    /**
     * @param esitWSdoPledgeSetResult $doPledgeSetResult
     */
    public function __construct($doPledgeSetResult)
    {
      $this->doPledgeSetResult = $doPledgeSetResult;
    }

    /**
     * @return esitWSdoPledgeSetResult
     */
    public function getDoPledgeSetResult()
    {
      return $this->doPledgeSetResult;
    }

    /**
     * @param esitWSdoPledgeSetResult $doPledgeSetResult
     * @return \Torchbox\Thankq\Api\doPledgeSetResponse
     */
    public function setDoPledgeSetResult($doPledgeSetResult)
    {
      $this->doPledgeSetResult = $doPledgeSetResult;
      return $this;
    }

}
