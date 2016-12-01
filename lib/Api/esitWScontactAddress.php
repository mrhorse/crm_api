<?php

namespace Torchbox\Thankq\Api;

class esitWScontactAddress extends baseDataType
{

    /**
     * @var string $addressLine1
     */
    protected $addressLine1 = null;

    /**
     * @var string $addressLine3
     */
    protected $addressLine3 = null;

    /**
     * @var string $addressLine4
     */
    protected $addressLine4 = null;

    /**
     * @var string $postcode
     */
    protected $postcode = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $dayTelephone
     */
    protected $dayTelephone = null;

    /**
     * @var string $eveningTelephone
     */
    protected $eveningTelephone = null;

    /**
     * @var string $faxNumber
     */
    protected $faxNumber = null;

    /**
     * @var string $mobileNumber
     */
    protected $mobileNumber = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var string $website
     */
    protected $website = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
      return $this->addressLine1;
    }

    /**
     * @param string $addressLine1
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setAddressLine1($addressLine1)
    {
      $this->addressLine1 = $addressLine1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine3()
    {
      return $this->addressLine3;
    }

    /**
     * @param string $addressLine3
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setAddressLine3($addressLine3)
    {
      $this->addressLine3 = $addressLine3;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine4()
    {
      return $this->addressLine4;
    }

    /**
     * @param string $addressLine4
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setAddressLine4($addressLine4)
    {
      $this->addressLine4 = $addressLine4;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getDayTelephone()
    {
      return $this->dayTelephone;
    }

    /**
     * @param string $dayTelephone
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setDayTelephone($dayTelephone)
    {
      $this->dayTelephone = $dayTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getEveningTelephone()
    {
      return $this->eveningTelephone;
    }

    /**
     * @param string $eveningTelephone
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setEveningTelephone($eveningTelephone)
    {
      $this->eveningTelephone = $eveningTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
      return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setFaxNumber($faxNumber)
    {
      $this->faxNumber = $faxNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
      return $this->mobileNumber;
    }

    /**
     * @param string $mobileNumber
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setMobileNumber($mobileNumber)
    {
      $this->mobileNumber = $mobileNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
      return $this->website;
    }

    /**
     * @param string $website
     * @return \Torchbox\Thankq\Api\esitWScontactAddress
     */
    public function setWebsite($website)
    {
      $this->website = $website;
      return $this;
    }

}
