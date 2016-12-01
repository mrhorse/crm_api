<?php

namespace Torchbox\Thankq\Api;

class doMembershipSet
{

    /**
     * @var esitWSdoMembershipSetArgument $doMembershipSetArgument
     */
    protected $doMembershipSetArgument = null;

    /**
     * @param esitWSdoMembershipSetArgument $doMembershipSetArgument
     */
    public function __construct($doMembershipSetArgument)
    {
      $this->doMembershipSetArgument = $doMembershipSetArgument;
    }

    /**
     * @return esitWSdoMembershipSetArgument
     */
    public function getDoMembershipSetArgument()
    {
      return $this->doMembershipSetArgument;
    }

    /**
     * @param esitWSdoMembershipSetArgument $doMembershipSetArgument
     * @return \Torchbox\Thankq\Api\doMembershipSet
     */
    public function setDoMembershipSetArgument($doMembershipSetArgument)
    {
      $this->doMembershipSetArgument = $doMembershipSetArgument;
      return $this;
    }

}
