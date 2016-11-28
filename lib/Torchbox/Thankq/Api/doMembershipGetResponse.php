<?php

namespace Torchbox\Thankq\Api;

class doMembershipGetResponse
{

    /**
     * @var esitWSdoMembershipGetResult $doMembershipGetResult
     */
    protected $doMembershipGetResult = null;

    /**
     * @param esitWSdoMembershipGetResult $doMembershipGetResult
     */
    public function __construct($doMembershipGetResult)
    {
      $this->doMembershipGetResult = $doMembershipGetResult;
    }

    /**
     * @return esitWSdoMembershipGetResult
     */
    public function getDoMembershipGetResult()
    {
      return $this->doMembershipGetResult;
    }

    /**
     * @param esitWSdoMembershipGetResult $doMembershipGetResult
     * @return \Torchbox\Thankq\Api\doMembershipGetResponse
     */
    public function setDoMembershipGetResult($doMembershipGetResult)
    {
      $this->doMembershipGetResult = $doMembershipGetResult;
      return $this;
    }

}
