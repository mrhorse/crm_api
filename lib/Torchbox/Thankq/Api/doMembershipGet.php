<?php

namespace Torchbox\Thankq\Api;

class doMembershipGet
{

    /**
     * @var esitWSdoMembershipGetArgument $doMembershipGetArgument
     */
    protected $doMembershipGetArgument = null;

    /**
     * @param esitWSdoMembershipGetArgument $doMembershipGetArgument
     */
    public function __construct($doMembershipGetArgument)
    {
      $this->doMembershipGetArgument = $doMembershipGetArgument;
    }

    /**
     * @return esitWSdoMembershipGetArgument
     */
    public function getDoMembershipGetArgument()
    {
      return $this->doMembershipGetArgument;
    }

    /**
     * @param esitWSdoMembershipGetArgument $doMembershipGetArgument
     * @return \Torchbox\Thankq\Api\doMembershipGet
     */
    public function setDoMembershipGetArgument($doMembershipGetArgument)
    {
      $this->doMembershipGetArgument = $doMembershipGetArgument;
      return $this;
    }

}
