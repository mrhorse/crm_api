<?php

namespace Torchbox\Thankq\Api;

class esitWSdoGroupsLookupResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSGroup $groups
     */
    protected $groups = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSGroup
     */
    public function getGroups()
    {
      return $this->groups;
    }

    /**
     * @param ArrayOfEsitWSGroup $groups
     * @return \Torchbox\Thankq\Api\esitWSdoGroupsLookupResult
     */
    public function setGroups($groups)
    {
      $this->groups = $groups;
      return $this;
    }

}
