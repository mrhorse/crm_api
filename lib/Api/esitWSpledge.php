<?php

namespace Torchbox\Thankq\Api;

class esitWSpledge extends baseDataType
{

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
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var int $maxPayments
     */
    protected $maxPayments = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $externalRef
     */
    protected $externalRef = null;

    /**
     * @var string $sourceCode
     */
    protected $sourceCode = null;

    /**
     * @var ArrayOfString $destinationCodes
     */
    protected $destinationCodes = null;

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
    public function getPaymentFrequency()
    {
      return $this->paymentFrequency;
    }

    /**
     * @param string $paymentFrequency
     * @return \Torchbox\Thankq\Api\esitWSpledge
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
     * @return \Torchbox\Thankq\Api\esitWSpledge
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
     * @return \Torchbox\Thankq\Api\esitWSpledge
     */
    public function setInstalmentValue($instalmentValue)
    {
      $this->instalmentValue = $instalmentValue;
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
     * @return \Torchbox\Thankq\Api\esitWSpledge
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
     * @return \Torchbox\Thankq\Api\esitWSpledge
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

    /**
     * @return int
     */
    public function getMaxPayments()
    {
      return $this->maxPayments;
    }

    /**
     * @param int $maxPayments
     * @return \Torchbox\Thankq\Api\esitWSpledge
     */
    public function setMaxPayments($maxPayments)
    {
      $this->maxPayments = $maxPayments;
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
     * @return \Torchbox\Thankq\Api\esitWSpledge
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Torchbox\Thankq\Api\esitWSpledge
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalRef()
    {
      return $this->externalRef;
    }

    /**
     * @param string $externalRef
     * @return \Torchbox\Thankq\Api\esitWSpledge
     */
    public function setExternalRef($externalRef)
    {
      $this->externalRef = $externalRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceCode()
    {
      return $this->sourceCode;
    }

    /**
     * @param string $sourceCode
     * @return \Torchbox\Thankq\Api\esitWSpledge
     */
    public function setSourceCode($sourceCode)
    {
      $this->sourceCode = $sourceCode;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getDestinationCodes()
    {
      return $this->destinationCodes;
    }

    /**
     * @param ArrayOfString $destinationCodes
     * @return \Torchbox\Thankq\Api\esitWSpledge
     */
    public function setDestinationCodes($destinationCodes)
    {
      $this->destinationCodes = $destinationCodes;
      return $this;
    }

}
