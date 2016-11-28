<?php

namespace Torchbox\Thankq\Api;

class esitWSmailingPreferenceRecord extends baseDataType
{

    /**
     * @var string $preferredAddressSerialnumber
     */
    protected $preferredAddressSerialnumber = null;

    /**
     * @var esitWSmailingPreference $mailingPreference
     */
    protected $mailingPreference = null;

    /**
     * @var string $preferredAddressType
     */
    protected $preferredAddressType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPreferredAddressSerialnumber()
    {
      return $this->preferredAddressSerialnumber;
    }

    /**
     * @param string $preferredAddressSerialnumber
     * @return \Torchbox\Thankq\Api\esitWSmailingPreferenceRecord
     */
    public function setPreferredAddressSerialnumber($preferredAddressSerialnumber)
    {
      $this->preferredAddressSerialnumber = $preferredAddressSerialnumber;
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
     * @return \Torchbox\Thankq\Api\esitWSmailingPreferenceRecord
     */
    public function setMailingPreference($mailingPreference)
    {
      $this->mailingPreference = $mailingPreference;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredAddressType()
    {
      return $this->preferredAddressType;
    }

    /**
     * @param string $preferredAddressType
     * @return \Torchbox\Thankq\Api\esitWSmailingPreferenceRecord
     */
    public function setPreferredAddressType($preferredAddressType)
    {
      $this->preferredAddressType = $preferredAddressType;
      return $this;
    }

}
