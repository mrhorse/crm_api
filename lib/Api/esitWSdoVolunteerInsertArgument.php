<?php

namespace Torchbox\Thankq\Api;

class esitWSdoVolunteerInsertArgument extends baseDataType
{

    /**
     * @var esitWScontact $contact
     */
    protected $contact = null;

    /**
     * @var esitWScontactAddress $contactAddress
     */
    protected $contactAddress = null;

    /**
     * @var esitWScontactAttribute $contactAttribute
     */
    protected $contactAttribute = null;

    /**
     * @var esitWScontactDataProtection $contactDataProtection
     */
    protected $contactDataProtection = null;

    /**
     * @var esitWSvolunteerSkill $volunteerSkill
     */
    protected $volunteerSkill = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWScontact
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param esitWScontact $contact
     * @return \Torchbox\Thankq\Api\esitWSdoVolunteerInsertArgument
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return esitWScontactAddress
     */
    public function getContactAddress()
    {
      return $this->contactAddress;
    }

    /**
     * @param esitWScontactAddress $contactAddress
     * @return \Torchbox\Thankq\Api\esitWSdoVolunteerInsertArgument
     */
    public function setContactAddress($contactAddress)
    {
      $this->contactAddress = $contactAddress;
      return $this;
    }

    /**
     * @return esitWScontactAttribute
     */
    public function getContactAttribute()
    {
      return $this->contactAttribute;
    }

    /**
     * @param esitWScontactAttribute $contactAttribute
     * @return \Torchbox\Thankq\Api\esitWSdoVolunteerInsertArgument
     */
    public function setContactAttribute($contactAttribute)
    {
      $this->contactAttribute = $contactAttribute;
      return $this;
    }

    /**
     * @return esitWScontactDataProtection
     */
    public function getContactDataProtection()
    {
      return $this->contactDataProtection;
    }

    /**
     * @param esitWScontactDataProtection $contactDataProtection
     * @return \Torchbox\Thankq\Api\esitWSdoVolunteerInsertArgument
     */
    public function setContactDataProtection($contactDataProtection)
    {
      $this->contactDataProtection = $contactDataProtection;
      return $this;
    }

    /**
     * @return esitWSvolunteerSkill
     */
    public function getVolunteerSkill()
    {
      return $this->volunteerSkill;
    }

    /**
     * @param esitWSvolunteerSkill $volunteerSkill
     * @return \Torchbox\Thankq\Api\esitWSdoVolunteerInsertArgument
     */
    public function setVolunteerSkill($volunteerSkill)
    {
      $this->volunteerSkill = $volunteerSkill;
      return $this;
    }

}
