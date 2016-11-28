<?php

namespace Torchbox\Thankq\Api;

class doContactLoginInsertResponse
{

    /**
     * @var esitWSdoContactLoginInsertResult $doContactLoginInsertResult
     */
    protected $doContactLoginInsertResult = null;

    /**
     * @param esitWSdoContactLoginInsertResult $doContactLoginInsertResult
     */
    public function __construct($doContactLoginInsertResult)
    {
      $this->doContactLoginInsertResult = $doContactLoginInsertResult;
    }

    /**
     * @return esitWSdoContactLoginInsertResult
     */
    public function getDoContactLoginInsertResult()
    {
      return $this->doContactLoginInsertResult;
    }

    /**
     * @param esitWSdoContactLoginInsertResult $doContactLoginInsertResult
     * @return \Torchbox\Thankq\Api\doContactLoginInsertResponse
     */
    public function setDoContactLoginInsertResult($doContactLoginInsertResult)
    {
      $this->doContactLoginInsertResult = $doContactLoginInsertResult;
      return $this;
    }

}
