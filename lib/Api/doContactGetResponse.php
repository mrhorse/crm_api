<?php

namespace Torchbox\Thankq\Api;

class doContactGetResponse
{

    /**
     * @var esitWSdoContactGetResult $doContactGetResult
     */
    protected $doContactGetResult = null;

    /**
     * @param esitWSdoContactGetResult $doContactGetResult
     */
    public function __construct($doContactGetResult)
    {
      $this->doContactGetResult = $doContactGetResult;
    }

    /**
     * @return esitWSdoContactGetResult
     */
    public function getDoContactGetResult()
    {
      return $this->doContactGetResult;
    }

    /**
     * @param esitWSdoContactGetResult $doContactGetResult
     * @return \Torchbox\Thankq\Api\doContactGetResponse
     */
    public function setDoContactGetResult($doContactGetResult)
    {
      $this->doContactGetResult = $doContactGetResult;
      return $this;
    }

}
