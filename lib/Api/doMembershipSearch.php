<?php

namespace Torchbox\Thankq\Api;

class doMembershipSearch
{

    /**
     * @var esitWSdoMembershipSearchArgument $doMembershipSearchArgument
     */
    protected $doMembershipSearchArgument = null;

    /**
     * @param esitWSdoMembershipSearchArgument $doMembershipSearchArgument
     */
    public function __construct($doMembershipSearchArgument)
    {
      $this->doMembershipSearchArgument = $doMembershipSearchArgument;
    }

    /**
     * @return esitWSdoMembershipSearchArgument
     */
    public function getDoMembershipSearchArgument()
    {
      return $this->doMembershipSearchArgument;
    }

    /**
     * @param esitWSdoMembershipSearchArgument $doMembershipSearchArgument
     * @return \Torchbox\Thankq\Api\doMembershipSearch
     */
    public function setDoMembershipSearchArgument($doMembershipSearchArgument)
    {
      $this->doMembershipSearchArgument = $doMembershipSearchArgument;
      return $this;
    }

}
