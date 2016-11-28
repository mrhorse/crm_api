<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgeSetResult extends baseDataType
{

    /**
     * @var string $pledgeID
     */
    protected $pledgeID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPledgeID()
    {
      return $this->pledgeID;
    }

    /**
     * @param string $pledgeID
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSetResult
     */
    public function setPledgeID($pledgeID)
    {
      $this->pledgeID = $pledgeID;
      return $this;
    }

}
