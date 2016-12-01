<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgeLookupResult extends baseDataType
{

    /**
     * @var ArrayOfString $paymentTypes
     */
    protected $paymentTypes = null;

    /**
     * @var ArrayOfString $paymentFrequencies
     */
    protected $paymentFrequencies = null;

    /**
     * @var ArrayOfString $currencies
     */
    protected $currencies = null;

    /**
     * @var ArrayOfEsitWSpledgeSourceCode $sourcecodes
     */
    protected $sourcecodes = null;

    /**
     * @var ArrayOfEsitWSdestinationCode $destinationCodes
     */
    protected $destinationCodes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getPaymentTypes()
    {
      return $this->paymentTypes;
    }

    /**
     * @param ArrayOfString $paymentTypes
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeLookupResult
     */
    public function setPaymentTypes($paymentTypes)
    {
      $this->paymentTypes = $paymentTypes;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getPaymentFrequencies()
    {
      return $this->paymentFrequencies;
    }

    /**
     * @param ArrayOfString $paymentFrequencies
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeLookupResult
     */
    public function setPaymentFrequencies($paymentFrequencies)
    {
      $this->paymentFrequencies = $paymentFrequencies;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getCurrencies()
    {
      return $this->currencies;
    }

    /**
     * @param ArrayOfString $currencies
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeLookupResult
     */
    public function setCurrencies($currencies)
    {
      $this->currencies = $currencies;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSpledgeSourceCode
     */
    public function getSourcecodes()
    {
      return $this->sourcecodes;
    }

    /**
     * @param ArrayOfEsitWSpledgeSourceCode $sourcecodes
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeLookupResult
     */
    public function setSourcecodes($sourcecodes)
    {
      $this->sourcecodes = $sourcecodes;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSdestinationCode
     */
    public function getDestinationCodes()
    {
      return $this->destinationCodes;
    }

    /**
     * @param ArrayOfEsitWSdestinationCode $destinationCodes
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeLookupResult
     */
    public function setDestinationCodes($destinationCodes)
    {
      $this->destinationCodes = $destinationCodes;
      return $this;
    }

}
