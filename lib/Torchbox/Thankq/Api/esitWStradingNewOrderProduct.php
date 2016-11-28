<?php

namespace Torchbox\Thankq\Api;

class esitWStradingNewOrderProduct extends baseDataType
{

    /**
     * @var string $productID
     */
    protected $productID = null;

    /**
     * @var int $productsOrdered
     */
    protected $productsOrdered = null;

    /**
     * @var float $sellingPrice
     */
    protected $sellingPrice = null;

    /**
     * @var float $lineTotal
     */
    protected $lineTotal = null;

    /**
     * @var string $sourceCode
     */
    protected $sourceCode = null;

    /**
     * @param int $productsOrdered
     * @param float $sellingPrice
     * @param float $lineTotal
     */
    public function __construct($productsOrdered, $sellingPrice, $lineTotal)
    {
      $this->productsOrdered = $productsOrdered;
      $this->sellingPrice = $sellingPrice;
      $this->lineTotal = $lineTotal;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
      return $this->productID;
    }

    /**
     * @param string $productID
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrderProduct
     */
    public function setProductID($productID)
    {
      $this->productID = $productID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductsOrdered()
    {
      return $this->productsOrdered;
    }

    /**
     * @param int $productsOrdered
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrderProduct
     */
    public function setProductsOrdered($productsOrdered)
    {
      $this->productsOrdered = $productsOrdered;
      return $this;
    }

    /**
     * @return float
     */
    public function getSellingPrice()
    {
      return $this->sellingPrice;
    }

    /**
     * @param float $sellingPrice
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrderProduct
     */
    public function setSellingPrice($sellingPrice)
    {
      $this->sellingPrice = $sellingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getLineTotal()
    {
      return $this->lineTotal;
    }

    /**
     * @param float $lineTotal
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrderProduct
     */
    public function setLineTotal($lineTotal)
    {
      $this->lineTotal = $lineTotal;
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
     * @return \Torchbox\Thankq\Api\esitWStradingNewOrderProduct
     */
    public function setSourceCode($sourceCode)
    {
      $this->sourceCode = $sourceCode;
      return $this;
    }

}
