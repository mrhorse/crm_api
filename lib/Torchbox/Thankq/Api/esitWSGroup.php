<?php

namespace Torchbox\Thankq\Api;

class esitWSGroup extends baseDataType
{

    /**
     * @var string $groupID
     */
    protected $groupID = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $description
     */
    protected $description = null;

    
    public function __construct()
    {
    
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
     * @return \Torchbox\Thankq\Api\esitWSGroup
     */
    public function setGroupID($groupID)
    {
      $this->groupID = $groupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Torchbox\Thankq\Api\esitWSGroup
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Torchbox\Thankq\Api\esitWSGroup
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
