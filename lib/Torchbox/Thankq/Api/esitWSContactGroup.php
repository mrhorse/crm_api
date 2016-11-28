<?php

namespace Torchbox\Thankq\Api;

class esitWSContactGroup extends baseDataType
{

    /**
     * @var esitWSGroup $group
     */
    protected $group = null;

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
     * @return esitWSGroup
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param esitWSGroup $group
     * @return \Torchbox\Thankq\Api\esitWSContactGroup
     */
    public function setGroup($group)
    {
      $this->group = $group;
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
     * @return \Torchbox\Thankq\Api\esitWSContactGroup
     */
    public function setMailQuantity($mailQuantity)
    {
      $this->mailQuantity = $mailQuantity;
      return $this;
    }

}
