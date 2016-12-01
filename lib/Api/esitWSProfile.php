<?php

namespace Torchbox\Thankq\Api;

class esitWSProfile extends baseDataType
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
     * @var \DateTime $profileFrom
     */
    protected $profileFrom = null;

    /**
     * @var \DateTime $profileUntil
     */
    protected $profileUntil = null;

    /**
     * @var string $profileNote
     */
    protected $profileNote = null;

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
     * @return \Torchbox\Thankq\Api\esitWSProfile
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
     * @return \Torchbox\Thankq\Api\esitWSProfile
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
     * @return \Torchbox\Thankq\Api\esitWSProfile
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
     * @return \Torchbox\Thankq\Api\esitWSProfile
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
     * @return \Torchbox\Thankq\Api\esitWSProfile
     */
    public function setProfileValue($profileValue)
    {
      $this->profileValue = $profileValue;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getProfileFrom()
    {
      if ($this->profileFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->profileFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $profileFrom
     * @return \Torchbox\Thankq\Api\esitWSProfile
     */
    public function setProfileFrom(\DateTime $profileFrom = null)
    {
      if ($profileFrom == null) {
       $this->profileFrom = null;
      } else {
        $this->profileFrom = $profileFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getProfileUntil()
    {
      if ($this->profileUntil == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->profileUntil);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $profileUntil
     * @return \Torchbox\Thankq\Api\esitWSProfile
     */
    public function setProfileUntil(\DateTime $profileUntil = null)
    {
      if ($profileUntil == null) {
       $this->profileUntil = null;
      } else {
        $this->profileUntil = $profileUntil->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileNote()
    {
      return $this->profileNote;
    }

    /**
     * @param string $profileNote
     * @return \Torchbox\Thankq\Api\esitWSProfile
     */
    public function setProfileNote($profileNote)
    {
      $this->profileNote = $profileNote;
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
     * @return \Torchbox\Thankq\Api\esitWSProfile
     */
    public function setProfilePriority($profilePriority)
    {
      $this->profilePriority = $profilePriority;
      return $this;
    }

}
