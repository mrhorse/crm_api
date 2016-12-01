<?php

namespace Torchbox\Thankq\Api;

class esitWSmembership extends baseDataType
{

    /**
     * @var string $typeID
     */
    protected $typeID = null;

    /**
     * @var string $membershipTitle
     */
    protected $membershipTitle = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $membershipPlaces
     */
    protected $membershipPlaces = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $frequency
     */
    protected $frequency = null;

    /**
     * @var int $membershipduration
     */
    protected $membershipduration = null;

    /**
     * @var float $currentJoinAmount
     */
    protected $currentJoinAmount = null;

    /**
     * @var float $currentRenewalAmount
     */
    protected $currentRenewalAmount = null;

    /**
     * @var float $vatRate
     */
    protected $vatRate = null;

    /**
     * @var ArrayOfString $paymentTypes
     */
    protected $paymentTypes = null;

    /**
     * @param int $membershipPlaces
     * @param int $membershipduration
     * @param float $currentJoinAmount
     * @param float $currentRenewalAmount
     * @param float $vatRate
     */
    public function __construct($membershipPlaces, $membershipduration, $currentJoinAmount, $currentRenewalAmount, $vatRate)
    {
      $this->membershipPlaces = $membershipPlaces;
      $this->membershipduration = $membershipduration;
      $this->currentJoinAmount = $currentJoinAmount;
      $this->currentRenewalAmount = $currentRenewalAmount;
      $this->vatRate = $vatRate;
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
     * @return \Torchbox\Thankq\Api\esitWSmembership
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
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setMembershipTitle($membershipTitle)
    {
      $this->membershipTitle = $membershipTitle;
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
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getMembershipPlaces()
    {
      return $this->membershipPlaces;
    }

    /**
     * @param int $membershipPlaces
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setMembershipPlaces($membershipPlaces)
    {
      $this->membershipPlaces = $membershipPlaces;
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
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setFrequency($frequency)
    {
      $this->frequency = $frequency;
      return $this;
    }

    /**
     * @return int
     */
    public function getMembershipduration()
    {
      return $this->membershipduration;
    }

    /**
     * @param int $membershipduration
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setMembershipduration($membershipduration)
    {
      $this->membershipduration = $membershipduration;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentJoinAmount()
    {
      return $this->currentJoinAmount;
    }

    /**
     * @param float $currentJoinAmount
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setCurrentJoinAmount($currentJoinAmount)
    {
      $this->currentJoinAmount = $currentJoinAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentRenewalAmount()
    {
      return $this->currentRenewalAmount;
    }

    /**
     * @param float $currentRenewalAmount
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setCurrentRenewalAmount($currentRenewalAmount)
    {
      $this->currentRenewalAmount = $currentRenewalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getVatRate()
    {
      return $this->vatRate;
    }

    /**
     * @param float $vatRate
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setVatRate($vatRate)
    {
      $this->vatRate = $vatRate;
      return $this;
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
     * @return \Torchbox\Thankq\Api\esitWSmembership
     */
    public function setPaymentTypes($paymentTypes)
    {
      $this->paymentTypes = $paymentTypes;
      return $this;
    }

}
