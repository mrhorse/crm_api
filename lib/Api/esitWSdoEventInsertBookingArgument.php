<?php

namespace Torchbox\Thankq\Api;

class esitWSdoEventInsertBookingArgument extends baseDataType
{

    /**
     * @var string $eventID
     */
    protected $eventID = null;

    /**
     * @var float $paymentAmount
     */
    protected $paymentAmount = null;

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var esitWScontact $bookingContact
     */
    protected $bookingContact = null;

    /**
     * @var esitWScontactAttribute $bookingContactAttribute
     */
    protected $bookingContactAttribute = null;

    /**
     * @var esitWScontactAddress $bookingContactAddress
     */
    protected $bookingContactAddress = null;

    /**
     * @var esitWScontactDataProtection $bookingContactDataProtection
     */
    protected $bookingContactDataProtection = null;

    /**
     * @var ArrayOfEsitWSeventBookingAttendee $attendees
     */
    protected $attendees = null;

    /**
     * @var string $webRef
     */
    protected $webRef = null;

    /**
     * @param float $paymentAmount
     */
    public function __construct($paymentAmount)
    {
      $this->paymentAmount = $paymentAmount;
    }

    /**
     * @return string
     */
    public function getEventID()
    {
      return $this->eventID;
    }

    /**
     * @param string $eventID
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingArgument
     */
    public function setEventID($eventID)
    {
      $this->eventID = $eventID;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaymentAmount()
    {
      return $this->paymentAmount;
    }

    /**
     * @param float $paymentAmount
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingArgument
     */
    public function setPaymentAmount($paymentAmount)
    {
      $this->paymentAmount = $paymentAmount;
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
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return esitWScontact
     */
    public function getBookingContact()
    {
      return $this->bookingContact;
    }

    /**
     * @param esitWScontact $bookingContact
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingArgument
     */
    public function setBookingContact($bookingContact)
    {
      $this->bookingContact = $bookingContact;
      return $this;
    }

    /**
     * @return esitWScontactAttribute
     */
    public function getBookingContactAttribute()
    {
      return $this->bookingContactAttribute;
    }

    /**
     * @param esitWScontactAttribute $bookingContactAttribute
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingArgument
     */
    public function setBookingContactAttribute($bookingContactAttribute)
    {
      $this->bookingContactAttribute = $bookingContactAttribute;
      return $this;
    }

    /**
     * @return esitWScontactAddress
     */
    public function getBookingContactAddress()
    {
      return $this->bookingContactAddress;
    }

    /**
     * @param esitWScontactAddress $bookingContactAddress
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingArgument
     */
    public function setBookingContactAddress($bookingContactAddress)
    {
      $this->bookingContactAddress = $bookingContactAddress;
      return $this;
    }

    /**
     * @return esitWScontactDataProtection
     */
    public function getBookingContactDataProtection()
    {
      return $this->bookingContactDataProtection;
    }

    /**
     * @param esitWScontactDataProtection $bookingContactDataProtection
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingArgument
     */
    public function setBookingContactDataProtection($bookingContactDataProtection)
    {
      $this->bookingContactDataProtection = $bookingContactDataProtection;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSeventBookingAttendee
     */
    public function getAttendees()
    {
      return $this->attendees;
    }

    /**
     * @param ArrayOfEsitWSeventBookingAttendee $attendees
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingArgument
     */
    public function setAttendees($attendees)
    {
      $this->attendees = $attendees;
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
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingArgument
     */
    public function setWebRef($webRef)
    {
      $this->webRef = $webRef;
      return $this;
    }

}
