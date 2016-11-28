<?php

namespace Torchbox\Thankq\Api;

class esitWSdoMailingPrefLookupResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSmailingPreference $mailingPreferences
     */
    protected $mailingPreferences = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSmailingPreference
     */
    public function getMailingPreferences()
    {
      return $this->mailingPreferences;
    }

    /**
     * @param ArrayOfEsitWSmailingPreference $mailingPreferences
     * @return \Torchbox\Thankq\Api\esitWSdoMailingPrefLookupResult
     */
    public function setMailingPreferences($mailingPreferences)
    {
      $this->mailingPreferences = $mailingPreferences;
      return $this;
    }

}
