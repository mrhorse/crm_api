<?php

namespace Torchbox\Thankq\Api;

class esitWSeventLocation extends baseDataType
{

    /**
     * @var string $locationId
     */
    protected $locationId = null;

    /**
     * @var string $locationName
     */
    protected $locationName = null;

    /**
     * @var esitWScontactAddress $locationAddress
     */
    protected $locationAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLocationId()
    {
      return $this->locationId;
    }

    /**
     * @param string $locationId
     * @return \Torchbox\Thankq\Api\esitWSeventLocation
     */
    public function setLocationId($locationId)
    {
      $this->locationId = $locationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationName()
    {
      return $this->locationName;
    }

    /**
     * @param string $locationName
     * @return \Torchbox\Thankq\Api\esitWSeventLocation
     */
    public function setLocationName($locationName)
    {
      $this->locationName = $locationName;
      return $this;
    }

    /**
     * @return esitWScontactAddress
     */
    public function getLocationAddress()
    {
      return $this->locationAddress;
    }

    /**
     * @param esitWScontactAddress $locationAddress
     * @return \Torchbox\Thankq\Api\esitWSeventLocation
     */
    public function setLocationAddress($locationAddress)
    {
      $this->locationAddress = $locationAddress;
      return $this;
    }

}
