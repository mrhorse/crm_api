<?php

namespace Torchbox\Thankq\Api;

class doContactMailingSetResponse
{

    /**
     * @var esitWSdoContactMailingSetResult $doContactMailingSetResult
     */
    protected $doContactMailingSetResult = null;

    /**
     * @param esitWSdoContactMailingSetResult $doContactMailingSetResult
     */
    public function __construct($doContactMailingSetResult)
    {
      $this->doContactMailingSetResult = $doContactMailingSetResult;
    }

    /**
     * @return esitWSdoContactMailingSetResult
     */
    public function getDoContactMailingSetResult()
    {
      return $this->doContactMailingSetResult;
    }

    /**
     * @param esitWSdoContactMailingSetResult $doContactMailingSetResult
     * @return \Torchbox\Thankq\Api\doContactMailingSetResponse
     */
    public function setDoContactMailingSetResult($doContactMailingSetResult)
    {
      $this->doContactMailingSetResult = $doContactMailingSetResult;
      return $this;
    }

}
