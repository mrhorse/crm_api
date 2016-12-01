<?php

namespace Torchbox\Thankq\Api;

class esitWSmailingPreference extends baseDataType
{

    /**
     * @var string $mailingPreference
     */
    protected $mailingPreference = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMailingPreference()
    {
      return $this->mailingPreference;
    }

    /**
     * @param string $mailingPreference
     * @return \Torchbox\Thankq\Api\esitWSmailingPreference
     */
    public function setMailingPreference($mailingPreference)
    {
      $this->mailingPreference = $mailingPreference;
      return $this;
    }

}
