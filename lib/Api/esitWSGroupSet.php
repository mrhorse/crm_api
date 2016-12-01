<?php

namespace Torchbox\Thankq\Api;

class esitWSGroupSet
{

    /**
     * @var string $groupID
     */
    protected $groupID = null;

    /**
     * @var int $mailQuantity
     */
    protected $mailQuantity = null;

    /**
     * @param int $mailQuantity
     */
    public function __construct($mailQuantity)
    {
      $this->mailQuantity = $mailQuantity;
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
     * @return \Torchbox\Thankq\Api\esitWSGroupSet
     */
    public function setGroupID($groupID)
    {
      $this->groupID = $groupID;
      return $this;
    }

    /**
     * @return int
     */
    public function getMailQuantity()
    {
      return $this->mailQuantity;
    }

    /**
     * @param int $mailQuantity
     * @return \Torchbox\Thankq\Api\esitWSGroupSet
     */
    public function setMailQuantity($mailQuantity)
    {
      $this->mailQuantity = $mailQuantity;
      return $this;
    }

}
