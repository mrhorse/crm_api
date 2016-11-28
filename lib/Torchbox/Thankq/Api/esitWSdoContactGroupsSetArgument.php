<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactGroupsSetArgument extends baseDataType
{

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var ArrayOfEsitWSGroupSet $groups
     */
    protected $groups = null;

    
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
     * @return \Torchbox\Thankq\Api\esitWSdoContactGroupsSetArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSGroupSet
     */
    public function getGroups()
    {
      return $this->groups;
    }

    /**
     * @param ArrayOfEsitWSGroupSet $groups
     * @return \Torchbox\Thankq\Api\esitWSdoContactGroupsSetArgument
     */
    public function setGroups($groups)
    {
      $this->groups = $groups;
      return $this;
    }

}
