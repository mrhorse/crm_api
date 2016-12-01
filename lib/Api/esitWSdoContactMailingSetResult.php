<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactMailingSetResult extends baseDataType
{

    /**
     * @var boolean $ok
     */
    protected $ok = null;

    /**
     * @param boolean $ok
     */
    public function __construct($ok)
    {
      $this->ok = $ok;
    }

    /**
     * @return boolean
     */
    public function getOk()
    {
      return $this->ok;
    }

    /**
     * @param boolean $ok
     * @return \Torchbox\Thankq\Api\esitWSdoContactMailingSetResult
     */
    public function setOk($ok)
    {
      $this->ok = $ok;
      return $this;
    }

}
