<?php

namespace Torchbox\Thankq\Api;

class esitWScontactAttribute extends baseDataType
{

    /**
     * @var string $gender
     */
    protected $gender = null;

    /**
     * @var \DateTime $dateOfBirth
     */
    protected $dateOfBirth = null;

    /**
     * @var string $maritalStatus
     */
    protected $maritalStatus = null;

    /**
     * @var string $occupation
     */
    protected $occupation = null;

    /**
     * @var string $contactPosition
     */
    protected $contactPosition = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @var string $primaryCategory
     */
    protected $primaryCategory = null;

    /**
     * @var string $contactType
     */
    protected $contactType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param string $gender
     * @return \Torchbox\Thankq\Api\esitWScontactAttribute
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
      if ($this->dateOfBirth == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateOfBirth);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateOfBirth
     * @return \Torchbox\Thankq\Api\esitWScontactAttribute
     */
    public function setDateOfBirth(\DateTime $dateOfBirth = null)
    {
      if ($dateOfBirth == null) {
       $this->dateOfBirth = null;
      } else {
        $this->dateOfBirth = $dateOfBirth->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getMaritalStatus()
    {
      return $this->maritalStatus;
    }

    /**
     * @param string $maritalStatus
     * @return \Torchbox\Thankq\Api\esitWScontactAttribute
     */
    public function setMaritalStatus($maritalStatus)
    {
      $this->maritalStatus = $maritalStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getOccupation()
    {
      return $this->occupation;
    }

    /**
     * @param string $occupation
     * @return \Torchbox\Thankq\Api\esitWScontactAttribute
     */
    public function setOccupation($occupation)
    {
      $this->occupation = $occupation;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactPosition()
    {
      return $this->contactPosition;
    }

    /**
     * @param string $contactPosition
     * @return \Torchbox\Thankq\Api\esitWScontactAttribute
     */
    public function setContactPosition($contactPosition)
    {
      $this->contactPosition = $contactPosition;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param string $source
     * @return \Torchbox\Thankq\Api\esitWScontactAttribute
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryCategory()
    {
      return $this->primaryCategory;
    }

    /**
     * @param string $primaryCategory
     * @return \Torchbox\Thankq\Api\esitWScontactAttribute
     */
    public function setPrimaryCategory($primaryCategory)
    {
      $this->primaryCategory = $primaryCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactType()
    {
      return $this->contactType;
    }

    /**
     * @param string $contactType
     * @return \Torchbox\Thankq\Api\esitWScontactAttribute
     */
    public function setContactType($contactType)
    {
      $this->contactType = $contactType;
      return $this;
    }

}
