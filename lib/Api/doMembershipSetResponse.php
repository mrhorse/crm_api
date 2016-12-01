<?php

namespace Torchbox\Thankq\Api;

class doMembershipSetResponse
{

    /**
     * @var esitWSdoMembershipSetResult $doMembershipSetResult
     */
    protected $doMembershipSetResult = null;

    /**
     * @param esitWSdoMembershipSetResult $doMembershipSetResult
     */
    public function __construct($doMembershipSetResult)
    {
      $this->doMembershipSetResult = $doMembershipSetResult;
    }

    /**
     * @return esitWSdoMembershipSetResult
     */
    public function getDoMembershipSetResult()
    {
      return $this->doMembershipSetResult;
    }

    /**
     * @param esitWSdoMembershipSetResult $doMembershipSetResult
     * @return \Torchbox\Thankq\Api\doMembershipSetResponse
     */
    public function setDoMembershipSetResult($doMembershipSetResult)
    {
      $this->doMembershipSetResult = $doMembershipSetResult;
      return $this;
    }

}
