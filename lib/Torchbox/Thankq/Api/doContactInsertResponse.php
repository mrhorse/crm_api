<?php

namespace Torchbox\Thankq\Api;

class doContactInsertResponse
{

    /**
     * @var esitWSdoContactInsertResult $doContactInsertResult
     */
    protected $doContactInsertResult = null;

    /**
     * @param esitWSdoContactInsertResult $doContactInsertResult
     */
    public function __construct($doContactInsertResult)
    {
      $this->doContactInsertResult = $doContactInsertResult;
    }

    /**
     * @return esitWSdoContactInsertResult
     */
    public function getDoContactInsertResult()
    {
      return $this->doContactInsertResult;
    }

    /**
     * @param esitWSdoContactInsertResult $doContactInsertResult
     * @return \Torchbox\Thankq\Api\doContactInsertResponse
     */
    public function setDoContactInsertResult($doContactInsertResult)
    {
      $this->doContactInsertResult = $doContactInsertResult;
      return $this;
    }

}
