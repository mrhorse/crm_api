<?php

namespace Torchbox\Thankq\Api;

class esitWSmembershipRecord extends baseDataType
{

    /**
     * @var string $membershipID
     */
    protected $membershipID = null;

    /**
     * @var string $typeID
     */
    protected $typeID = null;

    /**
     * @var string $membershipTitle
     */
    protected $membershipTitle = null;

    /**
     * @var string $membershipStatus
     */
    protected $membershipStatus = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $expiryDate
     */
    protected $expiryDate = null;

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var esitWScontact $contact
     */
    protected $contact = null;

    /**
     * @var esitWSrecordAudit $audit
     */
    protected $audit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMembershipID()
    {
      return $this->membershipID;
    }

    /**
     * @param string $membershipID
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
     */
    public function setMembershipID($membershipID)
    {
      $this->membershipID = $membershipID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeID()
    {
      return $this->typeID;
    }

    /**
     * @param string $typeID
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
     */
    public function setTypeID($typeID)
    {
      $this->typeID = $typeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getMembershipTitle()
    {
      return $this->membershipTitle;
    }

    /**
     * @param string $membershipTitle
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
     */
    public function setMembershipTitle($membershipTitle)
    {
      $this->membershipTitle = $membershipTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getMembershipStatus()
    {
      return $this->membershipStatus;
    }

    /**
     * @param string $membershipStatus
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
     */
    public function setMembershipStatus($membershipStatus)
    {
      $this->membershipStatus = $membershipStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
      if ($this->expiryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expiryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expiryDate
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
     */
    public function setExpiryDate(\DateTime $expiryDate = null)
    {
      if ($expiryDate == null) {
       $this->expiryDate = null;
      } else {
        $this->expiryDate = $expiryDate->format(\DateTime::ATOM);
      }
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
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
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
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
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
     * @return \Torchbox\Thankq\Api\esitWSmembershipRecord
     */
    public function setAudit($audit)
    {
      $this->audit = $audit;
      return $this;
    }

}
