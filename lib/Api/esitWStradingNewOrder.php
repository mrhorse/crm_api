<?php

namespace Torchbox\Thankq\Api;

class esitWStradingNewOrder extends baseDataType
{

    /**
     * @var string $sourceCode
     */
    protected $sourceCode = null;

    /**
     * @var string $specialInstructions
     */
    protected $specialInstructions = null;

    /**
     * @var string $externalRef
     */
    protected $externalRef = null;

    /**
     * @var string $purchaseOrder
     */
    protected $purchaseOrder = null;

    /**
     * @var float $postage
     */
    protected $postage = null;

    /**
     * @var string $paymentType
     */
    protected $paymentType = null;

    /**
     * @var float $totalPayment
     */
    protected $totalPayment = null;

    /**
     * @var string $webRef
     */
    protected $webRef = null;

    /**
     * @param float $postage
     * @param float $totalPayment
     */
    public function __construct($postage, $totalPayment)
    {
      $this->postage = $postage;
      $this->totalPayment = $totalPayment;
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
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrder
     */
    public function setSourceCode($sourceCode)
    {
      $this->sourceCode = $sourceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialInstructions()
    {
      return $this->specialInstructions;
    }

    /**
     * @param string $specialInstructions
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrder
     */
    public function setSpecialInstructions($specialInstructions)
    {
      $this->specialInstructions = $specialInstructions;
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
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrder
     */
    public function setExternalRef($externalRef)
    {
      $this->externalRef = $externalRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrder()
    {
      return $this->purchaseOrder;
    }

    /**
     * @param string $purchaseOrder
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrder
     */
    public function setPurchaseOrder($purchaseOrder)
    {
      $this->purchaseOrder = $purchaseOrder;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostage()
    {
      return $this->postage;
    }

    /**
     * @param float $postage
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrder
     */
    public function setPostage($postage)
    {
      $this->postage = $postage;
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
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrder
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalPayment()
    {
      return $this->totalPayment;
    }

    /**
     * @param float $totalPayment
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrder
     */
    public function setTotalPayment($totalPayment)
    {
      $this->totalPayment = $totalPayment;
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
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrder
     */
    public function setWebRef($webRef)
    {
      $this->webRef = $webRef;
      return $this;
    }

}
