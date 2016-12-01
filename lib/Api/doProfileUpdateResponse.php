<?php

namespace Torchbox\Thankq\Api;

class doProfileUpdateResponse
{

    /**
     * @var esitWSdoProfileUpdateResult $doProfileUpdateResult
     */
    protected $doProfileUpdateResult = null;

    /**
     * @param esitWSdoProfileUpdateResult $doProfileUpdateResult
     */
    public function __construct($doProfileUpdateResult)
    {
      $this->doProfileUpdateResult = $doProfileUpdateResult;
    }

    /**
     * @return esitWSdoProfileUpdateResult
     */
    public function getDoProfileUpdateResult()
    {
      return $this->doProfileUpdateResult;
    }

    /**
     * @param esitWSdoProfileUpdateResult $doProfileUpdateResult
     * @return \Torchbox\Thankq\Api\doProfileUpdateResponse
     */
    public function setDoProfileUpdateResult($doProfileUpdateResult)
    {
      $this->doProfileUpdateResult = $doProfileUpdateResult;
      return $this;
    }

}
