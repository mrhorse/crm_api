<?php

namespace Torchbox\Thankq\Api;

class doContactUpdateResponse
{

    /**
     * @var esitWSdoContactUpdateResult $doContactUpdateResult
     */
    protected $doContactUpdateResult = null;

    /**
     * @param esitWSdoContactUpdateResult $doContactUpdateResult
     */
    public function __construct($doContactUpdateResult)
    {
      $this->doContactUpdateResult = $doContactUpdateResult;
    }

    /**
     * @return esitWSdoContactUpdateResult
     */
    public function getDoContactUpdateResult()
    {
      return $this->doContactUpdateResult;
    }

    /**
     * @param esitWSdoContactUpdateResult $doContactUpdateResult
     * @return \Torchbox\Thankq\Api\doContactUpdateResponse
     */
    public function setDoContactUpdateResult($doContactUpdateResult)
    {
      $this->doContactUpdateResult = $doContactUpdateResult;
      return $this;
    }

}
