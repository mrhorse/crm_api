<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgeEditResult extends baseDataType
{

    /**
     * @var boolean $OK
     */
    protected $OK = null;

    /**
     * @param boolean $OK
     */
    public function __construct($OK)
    {
      $this->OK = $OK;
    }

    /**
     * @return boolean
     */
    public function getOK()
    {
      return $this->OK;
    }

    /**
     * @param boolean $OK
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeEditResult
     */
    public function setOK($OK)
    {
      $this->OK = $OK;
      return $this;
    }

}
