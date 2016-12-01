<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactSearchArgument extends baseDataType
{

    /**
     * @var esitWScontact $contact
     */
    protected $contact = null;

    /**
     * @var esitWScontactAddress $contactAddress
     */
    protected $contactAddress = null;

    /**
     * @var esitWScontactAttribute $contactAttribute
     */
    protected $contactAttribute = null;

    /**
     * @var int $resultLimit
     */
    protected $resultLimit = null;

    /**
     * @var esitWSrecordModified $recordModified
     */
    protected $recordModified = null;

    /**
     * @param int $resultLimit
     */
    public function __construct($resultLimit)
    {
      $this->resultLimit = $resultLimit;
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
     * @return \Torchbox\Thankq\Api\esitWSdoContactSearchArgument
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
     * @return \Torchbox\Thankq\Api\esitWSdoContactSearchArgument
     */
    public function setContactAddress($contactAddress)
    {
      $this->contactAddress = $contactAddress;
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
     * @return \Torchbox\Thankq\Api\esitWSdoContactSearchArgument
     */
    public function setContactAttribute($contactAttribute)
    {
      $this->contactAttribute = $contactAttribute;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultLimit()
    {
      return $this->resultLimit;
    }

    /**
     * @param int $resultLimit
     * @return \Torchbox\Thankq\Api\esitWSdoContactSearchArgument
     */
    public function setResultLimit($resultLimit)
    {
      $this->resultLimit = $resultLimit;
      return $this;
    }

    /**
     * @return esitWSrecordModified
     */
    public function getRecordModified()
    {
      return $this->recordModified;
    }

    /**
     * @param esitWSrecordModified $recordModified
     * @return \Torchbox\Thankq\Api\esitWSdoContactSearchArgument
     */
    public function setRecordModified($recordModified)
    {
      $this->recordModified = $recordModified;
      return $this;
    }

}
