<?php

namespace Torchbox\Thankq\Api;

class esitWSmembershipAttribute extends baseDataType
{

    /**
     * @var string $purchaseMethod
     */
    protected $purchaseMethod = null;

    /**
     * @var string $paymentType
     */
    protected $paymentType = null;

    /**
     * @var string $directDebitInstruction
     */
    protected $directDebitInstruction = null;

    /**
     * @var string $ddiStatus
     */
    protected $ddiStatus = null;

    /**
     * @var string $ddiMethod
     */
    protected $ddiMethod = null;

    /**
     * @var \DateTime $ddiStartDate
     */
    protected $ddiStartDate = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $sortCode
     */
    protected $sortCode = null;

    /**
     * @var string $accountName
     */
    protected $accountName = null;

    /**
     * @var string $bankName
     */
    protected $bankName = null;

    /**
     * @var string $bankAddress
     */
    protected $bankAddress = null;

    /**
     * @var string $bankPostCode
     */
    protected $bankPostCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPurchaseMethod()
    {
      return $this->purchaseMethod;
    }

    /**
     * @param string $purchaseMethod
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setPurchaseMethod($purchaseMethod)
    {
      $this->purchaseMethod = $purchaseMethod;
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
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirectDebitInstruction()
    {
      return $this->directDebitInstruction;
    }

    /**
     * @param string $directDebitInstruction
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setDirectDebitInstruction($directDebitInstruction)
    {
      $this->directDebitInstruction = $directDebitInstruction;
      return $this;
    }

    /**
     * @return string
     */
    public function getDdiStatus()
    {
      return $this->ddiStatus;
    }

    /**
     * @param string $ddiStatus
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setDdiStatus($ddiStatus)
    {
      $this->ddiStatus = $ddiStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDdiMethod()
    {
      return $this->ddiMethod;
    }

    /**
     * @param string $ddiMethod
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setDdiMethod($ddiMethod)
    {
      $this->ddiMethod = $ddiMethod;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDdiStartDate()
    {
      if ($this->ddiStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ddiStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ddiStartDate
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setDdiStartDate(\DateTime $ddiStartDate = null)
    {
      if ($ddiStartDate == null) {
       $this->ddiStartDate = null;
      } else {
        $this->ddiStartDate = $ddiStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortCode()
    {
      return $this->sortCode;
    }

    /**
     * @param string $sortCode
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setSortCode($sortCode)
    {
      $this->sortCode = $sortCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setAccountName($accountName)
    {
      $this->accountName = $accountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setBankName($bankName)
    {
      $this->bankName = $bankName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAddress()
    {
      return $this->bankAddress;
    }

    /**
     * @param string $bankAddress
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setBankAddress($bankAddress)
    {
      $this->bankAddress = $bankAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankPostCode()
    {
      return $this->bankPostCode;
    }

    /**
     * @param string $bankPostCode
     * @return \Torchbox\Thankq\Api\esitWSmembershipAttribute
     */
    public function setBankPostCode($bankPostCode)
    {
      $this->bankPostCode = $bankPostCode;
      return $this;
    }

}
