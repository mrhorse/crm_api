<?php

namespace Torchbox\Thankq\Api;

class doGroupsLookupResponse
{

    /**
     * @var esitWSdoGroupsLookupResult $doGroupsLookupResult
     */
    protected $doGroupsLookupResult = null;

    /**
     * @param esitWSdoGroupsLookupResult $doGroupsLookupResult
     */
    public function __construct($doGroupsLookupResult)
    {
      $this->doGroupsLookupResult = $doGroupsLookupResult;
    }

    /**
     * @return esitWSdoGroupsLookupResult
     */
    public function getDoGroupsLookupResult()
    {
      return $this->doGroupsLookupResult;
    }

    /**
     * @param esitWSdoGroupsLookupResult $doGroupsLookupResult
     * @return \Torchbox\Thankq\Api\doGroupsLookupResponse
     */
    public function setDoGroupsLookupResult($doGroupsLookupResult)
    {
      $this->doGroupsLookupResult = $doGroupsLookupResult;
      return $this;
    }

}
