<?php

namespace Torchbox\Thankq\Api;

class doMembershipPayResponse
{

    /**
     * @var esitWSdoMembershipPayResult $doMembershipPayResult
     */
    protected $doMembershipPayResult = null;

    /**
     * @param esitWSdoMembershipPayResult $doMembershipPayResult
     */
    public function __construct($doMembershipPayResult)
    {
      $this->doMembershipPayResult = $doMembershipPayResult;
    }

    /**
     * @return esitWSdoMembershipPayResult
     */
    public function getDoMembershipPayResult()
    {
      return $this->doMembershipPayResult;
    }

    /**
     * @param esitWSdoMembershipPayResult $doMembershipPayResult
     * @return \Torchbox\Thankq\Api\doMembershipPayResponse
     */
    public function setDoMembershipPayResult($doMembershipPayResult)
    {
      $this->doMembershipPayResult = $doMembershipPayResult;
      return $this;
    }

}
