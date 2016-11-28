<?php

namespace Torchbox\Thankq\Api;

class esitWSdoProfileSetResult extends baseDataType
{

    /**
     * @var string $parameterID
     */
    protected $parameterID = null;

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var string $profileCategory
     */
    protected $profileCategory = null;

    /**
     * @var string $profileName
     */
    protected $profileName = null;

    /**
     * @var string $profileValue
     */
    protected $profileValue = null;

    /**
     * @var string $profilePriority
     */
    protected $profilePriority = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getParameterID()
    {
      return $this->parameterID;
    }

    /**
     * @param string $parameterID
     * @return \Torchbox\Thankq\Api\esitWSdoProfileSetResult
     */
    public function setParameterID($parameterID)
    {
      $this->parameterID = $parameterID;
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
     * @return \Torchbox\Thankq\Api\esitWSdoProfileSetResult
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileCategory()
    {
      return $this->profileCategory;
    }

    /**
     * @param string $profileCategory
     * @return \Torchbox\Thankq\Api\esitWSdoProfileSetResult
     */
    public function setProfileCategory($profileCategory)
    {
      $this->profileCategory = $profileCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileName()
    {
      return $this->profileName;
    }

    /**
     * @param string $profileName
     * @return \Torchbox\Thankq\Api\esitWSdoProfileSetResult
     */
    public function setProfileName($profileName)
    {
      $this->profileName = $profileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileValue()
    {
      return $this->profileValue;
    }

    /**
     * @param string $profileValue
     * @return \Torchbox\Thankq\Api\esitWSdoProfileSetResult
     */
    public function setProfileValue($profileValue)
    {
      $this->profileValue = $profileValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfilePriority()
    {
      return $this->profilePriority;
    }

    /**
     * @param string $profilePriority
     * @return \Torchbox\Thankq\Api\esitWSdoProfileSetResult
     */
    public function setProfilePriority($profilePriority)
    {
      $this->profilePriority = $profilePriority;
      return $this;
    }

}
