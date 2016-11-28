<?php

namespace Torchbox\Thankq\Api;

class esitWSdoLoginResult extends baseDataType
{

    /**
     * @var boolean $loginGood
     */
    protected $loginGood = null;

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

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
     * @var esitWSrecordAudit $audit
     */
    protected $audit = null;

    /**
     * @param boolean $loginGood
     */
    public function __construct($loginGood)
    {
      $this->loginGood = $loginGood;
    }

    /**
     * @return boolean
     */
    public function getLoginGood()
    {
      return $this->loginGood;
    }

    /**
     * @param boolean $loginGood
     * @return \Torchbox\Thankq\Api\esitWSdoLoginResult
     */
    public function setLoginGood($loginGood)
    {
      $this->loginGood = $loginGood;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialnumber()
    {
      return $this->serialnumber;
    }

    /**
     * @param string $serialnumber
     * @return \Torchbox\Thankq\Api\esitWSdoLoginResult
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
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
     * @return \Torchbox\Thankq\Api\esitWSdoLoginResult
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
     * @return \Torchbox\Thankq\Api\esitWSdoLoginResult
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
     * @return \Torchbox\Thankq\Api\esitWSdoLoginResult
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
     * @return \Torchbox\Thankq\Api\esitWSdoLoginResult
     */
    public function setContactDataProtection($contactDataProtection)
    {
      $this->contactDataProtection = $contactDataProtection;
      return $this;
    }

    /**
     * @return esitWSrecordAudit
     */
    public function getAudit()
    {
      return $this->audit;
    }

    /**
     * @param esitWSrecordAudit $audit
     * @return \Torchbox\Thankq\Api\esitWSdoLoginResult
     */
    public function setAudit($audit)
    {
      $this->audit = $audit;
      return $this;
    }

}
