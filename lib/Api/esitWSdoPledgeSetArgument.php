<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgeSetArgument extends baseDataType
{

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
     * @var esitWScontactDataProtection $contactDataProtection
     */
    protected $contactDataProtection = null;

    /**
     * @var esitWScontactAttribute $contactAttribute
     */
    protected $contactAttribute = null;

    /**
     * @var esitWSpledge $pledge
     */
    protected $pledge = null;

    /**
     * @var esitWSdirectDebit $directDebit
     */
    protected $directDebit = null;

    
    public function __construct()
    {
    
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
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSetArgument
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
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSetArgument
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
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSetArgument
     */
    public function setContactAddress($contactAddress)
    {
      $this->contactAddress = $contactAddress;
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
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSetArgument
     */
    public function setContactDataProtection($contactDataProtection)
    {
      $this->contactDataProtection = $contactDataProtection;
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
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSetArgument
     */
    public function setContactAttribute($contactAttribute)
    {
      $this->contactAttribute = $contactAttribute;
      return $this;
    }

    /**
     * @return esitWSpledge
     */
    public function getPledge()
    {
      return $this->pledge;
    }

    /**
     * @param esitWSpledge $pledge
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSetArgument
     */
    public function setPledge($pledge)
    {
      $this->pledge = $pledge;
      return $this;
    }

    /**
     * @return esitWSdirectDebit
     */
    public function getDirectDebit()
    {
      return $this->directDebit;
    }

    /**
     * @param esitWSdirectDebit $directDebit
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSetArgument
     */
    public function setDirectDebit($directDebit)
    {
      $this->directDebit = $directDebit;
      return $this;
    }

}
