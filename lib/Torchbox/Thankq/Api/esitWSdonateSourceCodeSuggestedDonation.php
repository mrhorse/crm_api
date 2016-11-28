<?php

namespace Torchbox\Thankq\Api;

class esitWSdonateSourceCodeSuggestedDonation extends baseDataType
{

    /**
     * @var string $sourceCode
     */
    protected $sourceCode = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param float $amount
     */
    public function __construct($amount)
    {
      $this->amount = $amount;
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
     * @return \Torchbox\Thankq\Api\esitWSdonateSourceCodeSuggestedDonation
     */
    public function setSourceCode($sourceCode)
    {
      $this->sourceCode = $sourceCode;
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
     * @return \Torchbox\Thankq\Api\esitWSdonateSourceCodeSuggestedDonation
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Torchbox\Thankq\Api\esitWSdonateSourceCodeSuggestedDonation
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
