<?php

namespace Torchbox\Thankq\Api;

class esitWSdoMembershipLookupResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSmembership $memberships
     */
    protected $memberships = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSmembership
     */
    public function getMemberships()
    {
      return $this->memberships;
    }

    /**
     * @param ArrayOfEsitWSmembership $memberships
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipLookupResult
     */
    public function setMemberships($memberships)
    {
      $this->memberships = $memberships;
      return $this;
    }

}
