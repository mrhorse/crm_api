<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactMailingGetResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWScontactExtraAddress $extraAddresses
     */
    protected $extraAddresses = null;

    /**
     * @var ArrayOfEsitWSmailingPreferenceRecord $mailingPreferences
     */
    protected $mailingPreferences = null;

    /**
     * @var ArrayOfEsitWSmailingPreference $doNotMailPreferences
     */
    protected $doNotMailPreferences = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWScontactExtraAddress
     */
    public function getExtraAddresses()
    {
      return $this->extraAddresses;
    }

    /**
     * @param ArrayOfEsitWScontactExtraAddress $extraAddresses
     * @return \Torchbox\Thankq\Api\esitWSdoContactMailingGetResult
     */
    public function setExtraAddresses($extraAddresses)
    {
      $this->extraAddresses = $extraAddresses;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSmailingPreferenceRecord
     */
    public function getMailingPreferences()
    {
      return $this->mailingPreferences;
    }

    /**
     * @param ArrayOfEsitWSmailingPreferenceRecord $mailingPreferences
     * @return \Torchbox\Thankq\Api\esitWSdoContactMailingGetResult
     */
    public function setMailingPreferences($mailingPreferences)
    {
      $this->mailingPreferences = $mailingPreferences;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSmailingPreference
     */
    public function getDoNotMailPreferences()
    {
      return $this->doNotMailPreferences;
    }

    /**
     * @param ArrayOfEsitWSmailingPreference $doNotMailPreferences
     * @return \Torchbox\Thankq\Api\esitWSdoContactMailingGetResult
     */
    public function setDoNotMailPreferences($doNotMailPreferences)
    {
      $this->doNotMailPreferences = $doNotMailPreferences;
      return $this;
    }

}
