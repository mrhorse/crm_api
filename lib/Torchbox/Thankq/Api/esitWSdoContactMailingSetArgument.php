<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactMailingSetArgument extends baseDataType
{

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var string $addressSerialnumber
     */
    protected $addressSerialnumber = null;

    /**
     * @var esitWSmailingPreference $mailingPreference
     */
    protected $mailingPreference = null;

    
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
     * @return \Torchbox\Thankq\Api\esitWSdoContactMailingSetArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressSerialnumber()
    {
      return $this->addressSerialnumber;
    }

    /**
     * @param string $addressSerialnumber
     * @return \Torchbox\Thankq\Api\esitWSdoContactMailingSetArgument
     */
    public function setAddressSerialnumber($addressSerialnumber)
    {
      $this->addressSerialnumber = $addressSerialnumber;
      return $this;
    }

    /**
     * @return esitWSmailingPreference
     */
    public function getMailingPreference()
    {
      return $this->mailingPreference;
    }

    /**
     * @param esitWSmailingPreference $mailingPreference
     * @return \Torchbox\Thankq\Api\esitWSdoContactMailingSetArgument
     */
    public function setMailingPreference($mailingPreference)
    {
      $this->mailingPreference = $mailingPreference;
      return $this;
    }

}
