<?php

namespace Torchbox\Thankq\Api;

class esitWSdoMembershipSetResult extends baseDataType
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetResult
     */
    public function setMembershipID($membershipID)
    {
      $this->membershipID = $membershipID;
      return $this;
    }

}
