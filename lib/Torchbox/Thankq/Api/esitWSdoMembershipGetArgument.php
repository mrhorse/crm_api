<?php

namespace Torchbox\Thankq\Api;

class esitWSdoMembershipGetArgument extends baseDataType
{

    /**
     * @var string $membershipID
     */
    protected $membershipID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMembershipID()
    {
      return $this->membershipID;
    }

    /**
     * @param string $membershipID
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipGetArgument
     */
    public function setMembershipID($membershipID)
    {
      $this->membershipID = $membershipID;
      return $this;
    }

}
