<?php

namespace Torchbox\Thankq\Api;

class doProfileGetResponse
{

    /**
     * @var esitWSdoProfileGetResult $doProfileGetResult
     */
    protected $doProfileGetResult = null;

    /**
     * @param esitWSdoProfileGetResult $doProfileGetResult
     */
    public function __construct($doProfileGetResult)
    {
      $this->doProfileGetResult = $doProfileGetResult;
    }

    /**
     * @return esitWSdoProfileGetResult
     */
    public function getDoProfileGetResult()
    {
      return $this->doProfileGetResult;
    }

    /**
     * @param esitWSdoProfileGetResult $doProfileGetResult
     * @return \Torchbox\Thankq\Api\doProfileGetResponse
     */
    public function setDoProfileGetResult($doProfileGetResult)
    {
      $this->doProfileGetResult = $doProfileGetResult;
      return $this;
    }

}
