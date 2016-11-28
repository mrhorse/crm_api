<?php

namespace Torchbox\Thankq\Api;

class esitWSdonation extends baseDataType
{

    /**
     * @var string $sourceCode
     */
    protected $sourceCode = null;

    /**
     * @var string $destinationCode
     */
    protected $destinationCode = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var boolean $GAD
     */
    protected $GAD = null;

    /**
     * @var string $webRef
     */
    protected $webRef = null;

    /**
     * @param float $amount
     * @param boolean $GAD
     */
    public function __construct($amount, $GAD)
    {
      $this->amount = $amount;
      $this->GAD = $GAD;
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
     * @return \Torchbox\Thankq\Api\esitWSdonation
     */
    public function setSourceCode($sourceCode)
    {
      $this->sourceCode = $sourceCode;
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
     * @return \Torchbox\Thankq\Api\esitWSdonation
     */
    public function setDestinationCode($destinationCode)
    {
      $this->destinationCode = $destinationCode;
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
     * @return \Torchbox\Thankq\Api\esitWSdonation
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGAD()
    {
      return $this->GAD;
    }

    /**
     * @param boolean $GAD
     * @return \Torchbox\Thankq\Api\esitWSdonation
     */
    public function setGAD($GAD)
    {
      $this->GAD = $GAD;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebRef()
    {
      return $this->webRef;
    }

    /**
     * @param string $webRef
     * @return \Torchbox\Thankq\Api\esitWSdonation
     */
    public function setWebRef($webRef)
    {
      $this->webRef = $webRef;
      return $this;
    }

}
