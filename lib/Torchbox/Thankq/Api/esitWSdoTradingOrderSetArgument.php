<?php

namespace Torchbox\Thankq\Api;

class esitWSdoTradingOrderSetArgument extends baseDataType
{

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var esitWScontact $contact
     */
    protected $contact = null;

    /**
     * @var esitWScontactAddress $contactAddress
     */
    protected $contactAddress = null;

    /**
     * @var esitWScontactDataProtection $contactDataProtection
     */
    protected $contactDataProtection = null;

    /**
     * @var esitWScontactAttribute $contactAttribute
     */
    protected $contactAttribute = null;

    /**
     * @var esitWStradingNewOrder $order
     */
    protected $order = null;

    /**
     * @var ArrayOfEsitWStradingNewOrderProduct $products
     */
    protected $products = null;

    /**
     * @var esitWScontactAddress $invoiceAddress
     */
    protected $invoiceAddress = null;

    /**
     * @var string $invoiceSerialnumber
     */
    protected $invoiceSerialnumber = null;

    /**
     * @var esitWScontactAddress $deliveryAddress
     */
    protected $deliveryAddress = null;

    /**
     * @var string $deliverySerialnumber
     */
    protected $deliverySerialnumber = null;

    /**
     * @var esitWSdonation $donation
     */
    protected $donation = null;

    
    public function __construct()
    {
    
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
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return esitWScontact
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param esitWScontact $contact
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return esitWScontactAddress
     */
    public function getContactAddress()
    {
      return $this->contactAddress;
    }

    /**
     * @param esitWScontactAddress $contactAddress
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setContactAddress($contactAddress)
    {
      $this->contactAddress = $contactAddress;
      return $this;
    }

    /**
     * @return esitWScontactDataProtection
     */
    public function getContactDataProtection()
    {
      return $this->contactDataProtection;
    }

    /**
     * @param esitWScontactDataProtection $contactDataProtection
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setContactDataProtection($contactDataProtection)
    {
      $this->contactDataProtection = $contactDataProtection;
      return $this;
    }

    /**
     * @return esitWScontactAttribute
     */
    public function getContactAttribute()
    {
      return $this->contactAttribute;
    }

    /**
     * @param esitWScontactAttribute $contactAttribute
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setContactAttribute($contactAttribute)
    {
      $this->contactAttribute = $contactAttribute;
      return $this;
    }

    /**
     * @return esitWStradingNewOrder
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param esitWStradingNewOrder $order
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return ArrayOfEsitWStradingNewOrderProduct
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param ArrayOfEsitWStradingNewOrderProduct $products
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
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
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setInvoiceAddress($invoiceAddress)
    {
      $this->invoiceAddress = $invoiceAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceSerialnumber()
    {
      return $this->invoiceSerialnumber;
    }

    /**
     * @param string $invoiceSerialnumber
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setInvoiceSerialnumber($invoiceSerialnumber)
    {
      $this->invoiceSerialnumber = $invoiceSerialnumber;
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
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setDeliveryAddress($deliveryAddress)
    {
      $this->deliveryAddress = $deliveryAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliverySerialnumber()
    {
      return $this->deliverySerialnumber;
    }

    /**
     * @param string $deliverySerialnumber
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setDeliverySerialnumber($deliverySerialnumber)
    {
      $this->deliverySerialnumber = $deliverySerialnumber;
      return $this;
    }

    /**
     * @return esitWSdonation
     */
    public function getDonation()
    {
      return $this->donation;
    }

    /**
     * @param esitWSdonation $donation
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetArgument
     */
    public function setDonation($donation)
    {
      $this->donation = $donation;
      return $this;
    }

}
