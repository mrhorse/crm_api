<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactGroupsGetResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSContactGroup $groups
     */
    protected $groups = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSContactGroup
     */
    public function getGroups()
    {
      return $this->groups;
    }

    /**
     * @param ArrayOfEsitWSContactGroup $groups
     * @return \Torchbox\Thankq\Api\esitWSdoContactGroupsGetResult
     */
    public function setGroups($groups)
    {
      $this->groups = $groups;
      return $this;
    }

}
