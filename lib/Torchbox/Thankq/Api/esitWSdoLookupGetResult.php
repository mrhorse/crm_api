<?php

namespace Torchbox\Thankq\Api;

class esitWSdoLookupGetResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSlookup $lookups
     */
    protected $lookups = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSlookup
     */
    public function getLookups()
    {
      return $this->lookups;
    }

    /**
     * @param ArrayOfEsitWSlookup $lookups
     * @return \Torchbox\Thankq\Api\esitWSdoLookupGetResult
     */
    public function setLookups($lookups)
    {
      $this->lookups = $lookups;
      return $this;
    }

}
