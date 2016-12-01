<?php

namespace Torchbox\Thankq\Api;

class esitWSdirectDebit extends baseDataType
{

    /**
     * @var float $regularAmount
     */
    protected $regularAmount = null;

    /**
     * @var string $frequency
     */
    protected $frequency = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

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

    /**
     * @var string $ddiMethod
     */
    protected $ddiMethod = null;

    /**
     * @param float $regularAmount
     */
    public function __construct($regularAmount)
    {
      $this->regularAmount = $regularAmount;
    }

    /**
     * @return float
     */
    public function getRegularAmount()
    {
      return $this->regularAmount;
    }

    /**
     * @param float $regularAmount
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
     */
    public function setRegularAmount($regularAmount)
    {
      $this->regularAmount = $regularAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
      return $this->frequency;
    }

    /**
     * @param string $frequency
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
     */
    public function setFrequency($frequency)
    {
      $this->frequency = $frequency;
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
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
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
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
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
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
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
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
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
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
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
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
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
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
     */
    public function setBankPostCode($bankPostCode)
    {
      $this->bankPostCode = $bankPostCode;
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
     * @return \Torchbox\Thankq\Api\esitWSdirectDebit
     */
    public function setDdiMethod($ddiMethod)
    {
      $this->ddiMethod = $ddiMethod;
      return $this;
    }

}
