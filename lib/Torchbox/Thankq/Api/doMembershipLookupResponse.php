<?php

namespace Torchbox\Thankq\Api;

class doMembershipLookupResponse
{

    /**
     * @var esitWSdoMembershipLookupResult $doMembershipLookupResult
     */
    protected $doMembershipLookupResult = null;

    /**
     * @param esitWSdoMembershipLookupResult $doMembershipLookupResult
     */
    public function __construct($doMembershipLookupResult)
    {
      $this->doMembershipLookupResult = $doMembershipLookupResult;
    }

    /**
     * @return esitWSdoMembershipLookupResult
     */
    public function getDoMembershipLookupResult()
    {
      return $this->doMembershipLookupResult;
    }

    /**
     * @param esitWSdoMembershipLookupResult $doMembershipLookupResult
     * @return \Torchbox\Thankq\Api\doMembershipLookupResponse
     */
    public function setDoMembershipLookupResult($doMembershipLookupResult)
    {
      $this->doMembershipLookupResult = $doMembershipLookupResult;
      return $this;
    }

}
