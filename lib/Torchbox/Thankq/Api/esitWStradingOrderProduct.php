<?php

namespace Torchbox\Thankq\Api;

class esitWStradingOrderProduct extends baseDataType
{

    /**
     * @var string $productID
     */
    protected $productID = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $orderProductLine
     */
    protected $orderProductLine = null;

    /**
     * @var int $productsOrdered
     */
    protected $productsOrdered = null;

    /**
     * @var int $productsDelivered
     */
    protected $productsDelivered = null;

    /**
     * @var float $sellingPrice
     */
    protected $sellingPrice = null;

    /**
     * @var float $lineTotal
     */
    protected $lineTotal = null;

    /**
     * @var float $vatRate
     */
    protected $vatRate = null;

    /**
     * @var \DateTime $despatchDate
     */
    protected $despatchDate = null;

    /**
     * @param int $productsOrdered
     * @param int $productsDelivered
     * @param float $sellingPrice
     * @param float $lineTotal
     * @param float $vatRate
     */
    public function __construct($productsOrdered, $productsDelivered, $sellingPrice, $lineTotal, $vatRate)
    {
      $this->productsOrdered = $productsOrdered;
      $this->productsDelivered = $productsDelivered;
      $this->sellingPrice = $sellingPrice;
      $this->lineTotal = $lineTotal;
      $this->vatRate = $vatRate;
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
     * @return \Torchbox\Thankq\Api\esitWStradingOrderProduct
     */
    public function setProductID($productID)
    {
      $this->productID = $productID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Torchbox\Thankq\Api\esitWStradingOrderProduct
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderProductLine()
    {
      return $this->orderProductLine;
    }

    /**
     * @param string $orderProductLine
     * @return \Torchbox\Thankq\Api\esitWStradingOrderProduct
     */
    public function setOrderProductLine($orderProductLine)
    {
      $this->orderProductLine = $orderProductLine;
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
     * @return \Torchbox\Thankq\Api\esitWStradingOrderProduct
     */
    public function setProductsOrdered($productsOrdered)
    {
      $this->productsOrdered = $productsOrdered;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductsDelivered()
    {
      return $this->productsDelivered;
    }

    /**
     * @param int $productsDelivered
     * @return \Torchbox\Thankq\Api\esitWStradingOrderProduct
     */
    public function setProductsDelivered($productsDelivered)
    {
      $this->productsDelivered = $productsDelivered;
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
     * @return \Torchbox\Thankq\Api\esitWStradingOrderProduct
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
     * @return \Torchbox\Thankq\Api\esitWStradingOrderProduct
     */
    public function setLineTotal($lineTotal)
    {
      $this->lineTotal = $lineTotal;
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
     * @return \Torchbox\Thankq\Api\esitWStradingOrderProduct
     */
    public function setVatRate($vatRate)
    {
      $this->vatRate = $vatRate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDespatchDate()
    {
      if ($this->despatchDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->despatchDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $despatchDate
     * @return \Torchbox\Thankq\Api\esitWStradingOrderProduct
     */
    public function setDespatchDate(\DateTime $despatchDate = null)
    {
      if ($despatchDate == null) {
       $this->despatchDate = null;
      } else {
        $this->despatchDate = $despatchDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
