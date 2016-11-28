<?php

namespace Torchbox\Thankq\Api;

class doProfileSetResponse
{

    /**
     * @var esitWSdoProfileSetResult $doProfileSetResult
     */
    protected $doProfileSetResult = null;

    /**
     * @param esitWSdoProfileSetResult $doProfileSetResult
     */
    public function __construct($doProfileSetResult)
    {
      $this->doProfileSetResult = $doProfileSetResult;
    }

    /**
     * @return esitWSdoProfileSetResult
     */
    public function getDoProfileSetResult()
    {
      return $this->doProfileSetResult;
    }

    /**
     * @param esitWSdoProfileSetResult $doProfileSetResult
     * @return \Torchbox\Thankq\Api\doProfileSetResponse
     */
    public function setDoProfileSetResult($doProfileSetResult)
    {
      $this->doProfileSetResult = $doProfileSetResult;
      return $this;
    }

}
