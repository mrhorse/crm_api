<?php

namespace Torchbox\Thankq\Api;

class esitWSdoMembershipSetArgument extends baseDataType
{

    /**
     * @var string $typeID
     */
    protected $typeID = null;

    /**
     * @var string $paymentType
     */
    protected $paymentType = null;

    /**
     * @var string $amount
     */
    protected $amount = null;

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
     * @var ArrayOfEsitWScontact $secondaryContacts
     */
    protected $secondaryContacts = null;

    /**
     * @var esitWSdirectDebit $directDebit
     */
    protected $directDebit = null;

    /**
     * @var string $invoiceSerialnumber
     */
    protected $invoiceSerialnumber = null;

    /**
     * @var esitWScontactAddress $invoiceAddress
     */
    protected $invoiceAddress = null;

    
    public function __construct()
    {
    
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
     */
    public function setTypeID($typeID)
    {
      $this->typeID = $typeID;
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param string $amount
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
     */
    public function setContactAttribute($contactAttribute)
    {
      $this->contactAttribute = $contactAttribute;
      return $this;
    }

    /**
     * @return ArrayOfEsitWScontact
     */
    public function getSecondaryContacts()
    {
      return $this->secondaryContacts;
    }

    /**
     * @param ArrayOfEsitWScontact $secondaryContacts
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
     */
    public function setSecondaryContacts($secondaryContacts)
    {
      $this->secondaryContacts = $secondaryContacts;
      return $this;
    }

    /**
     * @return esitWSdirectDebit
     */
    public function getDirectDebit()
    {
      return $this->directDebit;
    }

    /**
     * @param esitWSdirectDebit $directDebit
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
     */
    public function setDirectDebit($directDebit)
    {
      $this->directDebit = $directDebit;
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
     */
    public function setInvoiceSerialnumber($invoiceSerialnumber)
    {
      $this->invoiceSerialnumber = $invoiceSerialnumber;
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSetArgument
     */
    public function setInvoiceAddress($invoiceAddress)
    {
      $this->invoiceAddress = $invoiceAddress;
      return $this;
    }

}
