<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgeGetArgument extends baseDataType
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
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeGetArgument
     */
    public function setPledgeID($pledgeID)
    {
      $this->pledgeID = $pledgeID;
      return $this;
    }

}
