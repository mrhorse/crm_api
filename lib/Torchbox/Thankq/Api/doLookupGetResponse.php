<?php

namespace Torchbox\Thankq\Api;

class doLookupGetResponse
{

    /**
     * @var esitWSdoLookupGetResult $doLookupGetResult
     */
    protected $doLookupGetResult = null;

    /**
     * @param esitWSdoLookupGetResult $doLookupGetResult
     */
    public function __construct($doLookupGetResult)
    {
      $this->doLookupGetResult = $doLookupGetResult;
    }

    /**
     * @return esitWSdoLookupGetResult
     */
    public function getDoLookupGetResult()
    {
      return $this->doLookupGetResult;
    }

    /**
     * @param esitWSdoLookupGetResult $doLookupGetResult
     * @return \Torchbox\Thankq\Api\doLookupGetResponse
     */
    public function setDoLookupGetResult($doLookupGetResult)
    {
      $this->doLookupGetResult = $doLookupGetResult;
      return $this;
    }

}
