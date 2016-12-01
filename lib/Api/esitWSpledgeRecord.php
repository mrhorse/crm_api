<?php

namespace Torchbox\Thankq\Api;

class esitWSpledgeRecord extends baseDataType
{

    /**
     * @var string $pledgeId
     */
    protected $pledgeId = null;

    /**
     * @var string $pledgeStatus
     */
    protected $pledgeStatus = null;

    /**
     * @var string $pledgeType
     */
    protected $pledgeType = null;

    /**
     * @var string $paymentFrequency
     */
    protected $paymentFrequency = null;

    /**
     * @var string $paymentType
     */
    protected $paymentType = null;

    /**
     * @var float $instalmentValue
     */
    protected $instalmentValue = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $description
     */
    protected $description = null;

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

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @param float $instalmentValue
     */
    public function __construct($instalmentValue)
    {
      $this->instalmentValue = $instalmentValue;
    }

    /**
     * @return string
     */
    public function getPledgeId()
    {
      return $this->pledgeId;
    }

    /**
     * @param string $pledgeId
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setPledgeId($pledgeId)
    {
      $this->pledgeId = $pledgeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPledgeStatus()
    {
      return $this->pledgeStatus;
    }

    /**
     * @param string $pledgeStatus
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setPledgeStatus($pledgeStatus)
    {
      $this->pledgeStatus = $pledgeStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getPledgeType()
    {
      return $this->pledgeType;
    }

    /**
     * @param string $pledgeType
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setPledgeType($pledgeType)
    {
      $this->pledgeType = $pledgeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentFrequency()
    {
      return $this->paymentFrequency;
    }

    /**
     * @param string $paymentFrequency
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setPaymentFrequency($paymentFrequency)
    {
      $this->paymentFrequency = $paymentFrequency;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
      return $this->paymentType;
    }

    /**
     * @param string $paymentType
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
      return $this;
    }

    /**
     * @return float
     */
    public function getInstalmentValue()
    {
      return $this->instalmentValue;
    }

    /**
     * @param float $instalmentValue
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setInstalmentValue($instalmentValue)
    {
      $this->instalmentValue = $instalmentValue;
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
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
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
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
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
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setAudit($audit)
    {
      $this->audit = $audit;
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
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
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
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Torchbox\Thankq\Api\esitWSpledgeRecord
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
