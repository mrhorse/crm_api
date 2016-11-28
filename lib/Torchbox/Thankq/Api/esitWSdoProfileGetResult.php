<?php

namespace Torchbox\Thankq\Api;

class esitWSdoProfileGetResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSProfile $profiles
     */
    protected $profiles = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSProfile
     */
    public function getProfiles()
    {
      return $this->profiles;
    }

    /**
     * @param ArrayOfEsitWSProfile $profiles
     * @return \Torchbox\Thankq\Api\esitWSdoProfileGetResult
     */
    public function setProfiles($profiles)
    {
      $this->profiles = $profiles;
      return $this;
    }

}
