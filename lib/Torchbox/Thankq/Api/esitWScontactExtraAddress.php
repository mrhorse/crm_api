<?php

namespace Torchbox\Thankq\Api;

class esitWScontactExtraAddress extends baseDataType
{

    /**
     * @var string $addressSerialnumber
     */
    protected $addressSerialnumber = null;

    /**
     * @var string $extraAddressType
     */
    protected $extraAddressType = null;

    /**
     * @var esitWScontactAddress $contactAddress
     */
    protected $contactAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddressSerialnumber()
    {
      return $this->addressSerialnumber;
    }

    /**
     * @param string $addressSerialnumber
     * @return \Torchbox\Thankq\Api\esitWScontactExtraAddress
     */
    public function setAddressSerialnumber($addressSerialnumber)
    {
      $this->addressSerialnumber = $addressSerialnumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraAddressType()
    {
      return $this->extraAddressType;
    }

    /**
     * @param string $extraAddressType
     * @return \Torchbox\Thankq\Api\esitWScontactExtraAddress
     */
    public function setExtraAddressType($extraAddressType)
    {
      $this->extraAddressType = $extraAddressType;
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
     * @return \Torchbox\Thankq\Api\esitWScontactExtraAddress
     */
    public function setContactAddress($contactAddress)
    {
      $this->contactAddress = $contactAddress;
      return $this;
    }

}
