<?php

namespace Torchbox\Thankq\Api;

class esitWSmembershipContact extends baseDataType
{

    /**
     * @var string $memberNumber
     */
    protected $memberNumber = null;

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var boolean $leadMember
     */
    protected $leadMember = null;

    /**
     * @var string $relationship
     */
    protected $relationship = null;

    /**
     * @var string $memberType
     */
    protected $memberType = null;

    /**
     * @var \DateTime $dateOfBirth
     */
    protected $dateOfBirth = null;

    /**
     * @var esitWScontact $contact
     */
    protected $contact = null;

    /**
     * @param boolean $leadMember
     */
    public function __construct($leadMember)
    {
      $this->leadMember = $leadMember;
    }

    /**
     * @return string
     */
    public function getMemberNumber()
    {
      return $this->memberNumber;
    }

    /**
     * @param string $memberNumber
     * @return \Torchbox\Thankq\Api\esitWSmembershipContact
     */
    public function setMemberNumber($memberNumber)
    {
      $this->memberNumber = $memberNumber;
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
     * @return \Torchbox\Thankq\Api\esitWSmembershipContact
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLeadMember()
    {
      return $this->leadMember;
    }

    /**
     * @param boolean $leadMember
     * @return \Torchbox\Thankq\Api\esitWSmembershipContact
     */
    public function setLeadMember($leadMember)
    {
      $this->leadMember = $leadMember;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelationship()
    {
      return $this->relationship;
    }

    /**
     * @param string $relationship
     * @return \Torchbox\Thankq\Api\esitWSmembershipContact
     */
    public function setRelationship($relationship)
    {
      $this->relationship = $relationship;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemberType()
    {
      return $this->memberType;
    }

    /**
     * @param string $memberType
     * @return \Torchbox\Thankq\Api\esitWSmembershipContact
     */
    public function setMemberType($memberType)
    {
      $this->memberType = $memberType;
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
     * @return \Torchbox\Thankq\Api\esitWSmembershipContact
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
     * @return esitWScontact
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param esitWScontact $contact
     * @return \Torchbox\Thankq\Api\esitWSmembershipContact
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

}
