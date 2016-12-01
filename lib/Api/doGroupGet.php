<?php

namespace Torchbox\Thankq\Api;

class doGroupGet
{

    /**
     * @var string $groupID
     */
    protected $groupID = null;

    /**
     * @param string $groupID
     */
    public function __construct($groupID)
    {
      $this->groupID = $groupID;
    }

    /**
     * @return string
     */
    public function getGroupID()
    {
      return $this->groupID;
    }

    /**
     * @param string $groupID
     * @return \Torchbox\Thankq\Api\doGroupGet
     */
    public function setGroupID($groupID)
    {
      $this->groupID = $groupID;
      return $this;
    }

}
