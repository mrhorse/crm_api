<?php

namespace Torchbox\Thankq\Api;

class esitWStradingOrder extends baseDataType
{

    /**
     * @var string $orderID
     */
    protected $orderID = null;

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var \DateTime $orderDate
     */
    protected $orderDate = null;

    /**
     * @var \DateTime $created
     */
    protected $created = null;

    /**
     * @var \DateTime $completed
     */
    protected $completed = null;

    /**
     * @var string $supersedesOrderID
     */
    protected $supersedesOrderID = null;

    /**
     * @var string $supersededByOrderID
     */
    protected $supersededByOrderID = null;

    /**
     * @var float $orderValue
     */
    protected $orderValue = null;

    /**
     * @var float $paid
     */
    protected $paid = null;

    /**
     * @var string $stage
     */
    protected $stage = null;

    /**
     * @var ArrayOfEsitWStradingOrderProduct $products
     */
    protected $products = null;

    /**
     * @var esitWScontactAddress $invoiceAddress
     */
    protected $invoiceAddress = null;

    /**
     * @var esitWScontactAddress $deliveryAddress
     */
    protected $deliveryAddress = null;

    /**
     * @param float $orderValue
     * @param float $paid
     */
    public function __construct($orderValue, $paid)
    {
      $this->orderValue = $orderValue;
      $this->paid = $paid;
    }

    /**
     * @return string
     */
    public function getOrderID()
    {
      return $this->orderID;
    }

    /**
     * @param string $orderID
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setOrderID($orderID)
    {
      $this->orderID = $orderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialnumber()
    {
      return $this->serialnumber;
    }

    /**
     * @param string $serialnumber
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
      if ($this->orderDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->orderDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $orderDate
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setOrderDate(\DateTime $orderDate = null)
    {
      if ($orderDate == null) {
       $this->orderDate = null;
      } else {
        $this->orderDate = $orderDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
      if ($this->created == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->created);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $created
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setCreated(\DateTime $created = null)
    {
      if ($created == null) {
       $this->created = null;
      } else {
        $this->created = $created->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCompleted()
    {
      if ($this->completed == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->completed);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $completed
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setCompleted(\DateTime $completed = null)
    {
      if ($completed == null) {
       $this->completed = null;
      } else {
        $this->completed = $completed->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getSupersedesOrderID()
    {
      return $this->supersedesOrderID;
    }

    /**
     * @param string $supersedesOrderID
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setSupersedesOrderID($supersedesOrderID)
    {
      $this->supersedesOrderID = $supersedesOrderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupersededByOrderID()
    {
      return $this->supersededByOrderID;
    }

    /**
     * @param string $supersededByOrderID
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setSupersededByOrderID($supersededByOrderID)
    {
      $this->supersededByOrderID = $supersededByOrderID;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrderValue()
    {
      return $this->orderValue;
    }

    /**
     * @param float $orderValue
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setOrderValue($orderValue)
    {
      $this->orderValue = $orderValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaid()
    {
      return $this->paid;
    }

    /**
     * @param float $paid
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setPaid($paid)
    {
      $this->paid = $paid;
      return $this;
    }

    /**
     * @return string
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param string $stage
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setStage($stage)
    {
      $this->stage = $stage;
      return $this;
    }

    /**
     * @return ArrayOfEsitWStradingOrderProduct
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param ArrayOfEsitWStradingOrderProduct $products
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

    /**
     * @return esitWScontactAddress
     */
    public function getInvoiceAddress()
    {
      return $this->invoiceAddress;
    }

    /**
     * @param esitWScontactAddress $invoiceAddress
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setInvoiceAddress($invoiceAddress)
    {
      $this->invoiceAddress = $invoiceAddress;
      return $this;
    }

    /**
     * @return esitWScontactAddress
     */
    public function getDeliveryAddress()
    {
      return $this->deliveryAddress;
    }

    /**
     * @param esitWScontactAddress $deliveryAddress
     * @return \Torchbox\Thankq\Api\esitWStradingOrder
     */
    public function setDeliveryAddress($deliveryAddress)
    {
      $this->deliveryAddress = $deliveryAddress;
      return $this;
    }

}
