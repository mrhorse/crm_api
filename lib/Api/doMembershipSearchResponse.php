<?php

namespace Torchbox\Thankq\Api;

class doMembershipSearchResponse
{

    /**
     * @var esitWSdoMembershipSearchResult $doMembershipSearchResult
     */
    protected $doMembershipSearchResult = null;

    /**
     * @param esitWSdoMembershipSearchResult $doMembershipSearchResult
     */
    public function __construct($doMembershipSearchResult)
    {
      $this->doMembershipSearchResult = $doMembershipSearchResult;
    }

    /**
     * @return esitWSdoMembershipSearchResult
     */
    public function getDoMembershipSearchResult()
    {
      return $this->doMembershipSearchResult;
    }

    /**
     * @param esitWSdoMembershipSearchResult $doMembershipSearchResult
     * @return \Torchbox\Thankq\Api\doMembershipSearchResponse
     */
    public function setDoMembershipSearchResult($doMembershipSearchResult)
    {
      $this->doMembershipSearchResult = $doMembershipSearchResult;
      return $this;
    }

}
