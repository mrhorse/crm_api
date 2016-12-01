<?php

namespace Torchbox\Thankq\Api;

class doDonateLookupResponse
{

    /**
     * @var esitWSdoDonateLookupResult $doDonateLookupResult
     */
    protected $doDonateLookupResult = null;

    /**
     * @param esitWSdoDonateLookupResult $doDonateLookupResult
     */
    public function __construct($doDonateLookupResult)
    {
      $this->doDonateLookupResult = $doDonateLookupResult;
    }

    /**
     * @return esitWSdoDonateLookupResult
     */
    public function getDoDonateLookupResult()
    {
      return $this->doDonateLookupResult;
    }

    /**
     * @param esitWSdoDonateLookupResult $doDonateLookupResult
     * @return \Torchbox\Thankq\Api\doDonateLookupResponse
     */
    public function setDoDonateLookupResult($doDonateLookupResult)
    {
      $this->doDonateLookupResult = $doDonateLookupResult;
      return $this;
    }

}
