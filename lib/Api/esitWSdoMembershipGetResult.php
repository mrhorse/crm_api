<?php

namespace Torchbox\Thankq\Api;

class esitWSdoMembershipGetResult
{

    /**
     * @var esitWSmembershipRecord $membership
     */
    protected $membership = null;

    /**
     * @var esitWSmembershipAttribute $membershipAttribute
     */
    protected $membershipAttribute = null;

    /**
     * @var ArrayOfEsitWSmembershipContact $contacts
     */
    protected $contacts = null;

    /**
     * @var ArrayOfEsitWSmembershipInstalment $instalments
     */
    protected $instalments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSmembershipRecord
     */
    public function getMembership()
    {
      return $this->membership;
    }

    /**
     * @param esitWSmembershipRecord $membership
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipGetResult
     */
    public function setMembership($membership)
    {
      $this->membership = $membership;
      return $this;
    }

    /**
     * @return esitWSmembershipAttribute
     */
    public function getMembershipAttribute()
    {
      return $this->membershipAttribute;
    }

    /**
     * @param esitWSmembershipAttribute $membershipAttribute
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipGetResult
     */
    public function setMembershipAttribute($membershipAttribute)
    {
      $this->membershipAttribute = $membershipAttribute;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSmembershipContact
     */
    public function getContacts()
    {
      return $this->contacts;
    }

    /**
     * @param ArrayOfEsitWSmembershipContact $contacts
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipGetResult
     */
    public function setContacts($contacts)
    {
      $this->contacts = $contacts;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSmembershipInstalment
     */
    public function getInstalments()
    {
      return $this->instalments;
    }

    /**
     * @param ArrayOfEsitWSmembershipInstalment $instalments
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipGetResult
     */
    public function setInstalments($instalments)
    {
      $this->instalments = $instalments;
      return $this;
    }

}
