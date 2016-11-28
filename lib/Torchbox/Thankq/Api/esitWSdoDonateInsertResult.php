<?php

namespace Torchbox\Thankq\Api;

class esitWSdoDonateInsertResult extends baseDataType
{

    /**
     * @var string $donationID
     */
    protected $donationID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDonationID()
    {
      return $this->donationID;
    }

    /**
     * @param string $donationID
     * @return \Torchbox\Thankq\Api\esitWSdoDonateInsertResult
     */
    public function setDonationID($donationID)
    {
      $this->donationID = $donationID;
      return $this;
    }

}
