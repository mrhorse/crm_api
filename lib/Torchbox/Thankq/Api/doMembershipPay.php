<?php

namespace Torchbox\Thankq\Api;

class doMembershipPay
{

    /**
     * @var esitWSdoMembershipPay $doMembershipPayArgument
     */
    protected $doMembershipPayArgument = null;

    /**
     * @param esitWSdoMembershipPay $doMembershipPayArgument
     */
    public function __construct($doMembershipPayArgument)
    {
      $this->doMembershipPayArgument = $doMembershipPayArgument;
    }

    /**
     * @return esitWSdoMembershipPay
     */
    public function getDoMembershipPayArgument()
    {
      return $this->doMembershipPayArgument;
    }

    /**
     * @param esitWSdoMembershipPay $doMembershipPayArgument
     * @return \Torchbox\Thankq\Api\doMembershipPay
     */
    public function setDoMembershipPayArgument($doMembershipPayArgument)
    {
      $this->doMembershipPayArgument = $doMembershipPayArgument;
      return $this;
    }

}
