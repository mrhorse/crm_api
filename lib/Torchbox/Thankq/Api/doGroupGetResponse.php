<?php

namespace Torchbox\Thankq\Api;

class doGroupGetResponse
{

    /**
     * @var esitWSdoGroupGetResult $doGroupGetResult
     */
    protected $doGroupGetResult = null;

    /**
     * @param esitWSdoGroupGetResult $doGroupGetResult
     */
    public function __construct($doGroupGetResult)
    {
      $this->doGroupGetResult = $doGroupGetResult;
    }

    /**
     * @return esitWSdoGroupGetResult
     */
    public function getDoGroupGetResult()
    {
      return $this->doGroupGetResult;
    }

    /**
     * @param esitWSdoGroupGetResult $doGroupGetResult
     * @return \Torchbox\Thankq\Api\doGroupGetResponse
     */
    public function setDoGroupGetResult($doGroupGetResult)
    {
      $this->doGroupGetResult = $doGroupGetResult;
      return $this;
    }

}
