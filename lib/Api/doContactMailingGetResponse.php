<?php

namespace Torchbox\Thankq\Api;

class doContactMailingGetResponse
{

    /**
     * @var esitWSdoContactMailingGetResult $doContactMailingGetResult
     */
    protected $doContactMailingGetResult = null;

    /**
     * @param esitWSdoContactMailingGetResult $doContactMailingGetResult
     */
    public function __construct($doContactMailingGetResult)
    {
      $this->doContactMailingGetResult = $doContactMailingGetResult;
    }

    /**
     * @return esitWSdoContactMailingGetResult
     */
    public function getDoContactMailingGetResult()
    {
      return $this->doContactMailingGetResult;
    }

    /**
     * @param esitWSdoContactMailingGetResult $doContactMailingGetResult
     * @return \Torchbox\Thankq\Api\doContactMailingGetResponse
     */
    public function setDoContactMailingGetResult($doContactMailingGetResult)
    {
      $this->doContactMailingGetResult = $doContactMailingGetResult;
      return $this;
    }

}
