<?php

namespace Torchbox\Thankq\Api;

class esitWSPaymentRecord extends baseDataType
{

    /**
     * @var \DateTime $dateOfPayment
     */
    protected $dateOfPayment = null;

    /**
     * @var string $paymentType
     */
    protected $paymentType = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $incomeType
     */
    protected $incomeType = null;

    /**
     * @var string $destinationCode
     */
    protected $destinationCode = null;

    /**
     * @var string $sourceCode
     */
    protected $sourceCode = null;

    /**
     * @var string $taxClaimable
     */
    protected $taxClaimable = null;

    /**
     * @var string $pledgeID
     */
    protected $pledgeID = null;

    /**
     * @var boolean $reversal
     */
    protected $reversal = null;

    /**
     * @var string $taxClaimID
     */
    protected $taxClaimID = null;

    /**
     * @var string $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var string $paymentRef
     */
    protected $paymentRef = null;

    /**
     * @param float $amount
     * @param boolean $reversal
     */
    public function __construct($amount, $reversal)
    {
      $this->amount = $amount;
      $this->reversal = $reversal;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfPayment()
    {
      if ($this->dateOfPayment == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateOfPayment);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateOfPayment
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setDateOfPayment(\DateTime $dateOfPayment = null)
    {
      if ($dateOfPayment == null) {
       $this->dateOfPayment = null;
      } else {
        $this->dateOfPayment = $dateOfPayment->format(\DateTime::ATOM);
      }
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
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
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
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getIncomeType()
    {
      return $this->incomeType;
    }

    /**
     * @param string $incomeType
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setIncomeType($incomeType)
    {
      $this->incomeType = $incomeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationCode()
    {
      return $this->destinationCode;
    }

    /**
     * @param string $destinationCode
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setDestinationCode($destinationCode)
    {
      $this->destinationCode = $destinationCode;
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
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setSourceCode($sourceCode)
    {
      $this->sourceCode = $sourceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxClaimable()
    {
      return $this->taxClaimable;
    }

    /**
     * @param string $taxClaimable
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setTaxClaimable($taxClaimable)
    {
      $this->taxClaimable = $taxClaimable;
      return $this;
    }

    /**
     * @return string
     */
    public function getPledgeID()
    {
      return $this->pledgeID;
    }

    /**
     * @param string $pledgeID
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setPledgeID($pledgeID)
    {
      $this->pledgeID = $pledgeID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReversal()
    {
      return $this->reversal;
    }

    /**
     * @param boolean $reversal
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setReversal($reversal)
    {
      $this->reversal = $reversal;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxClaimID()
    {
      return $this->taxClaimID;
    }

    /**
     * @param string $taxClaimID
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setTaxClaimID($taxClaimID)
    {
      $this->taxClaimID = $taxClaimID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setSerialNumber($serialNumber)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentRef()
    {
      return $this->paymentRef;
    }

    /**
     * @param string $paymentRef
     * @return \Torchbox\Thankq\Api\esitWSPaymentRecord
     */
    public function setPaymentRef($paymentRef)
    {
      $this->paymentRef = $paymentRef;
      return $this;
    }

}
