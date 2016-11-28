<?php

namespace Torchbox\Thankq\Api;

class esitWSdoEventInsertBookingResult extends baseDataType
{

    /**
     * @var string $bookingId
     */
    protected $bookingId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBookingId()
    {
      return $this->bookingId;
    }

    /**
     * @param string $bookingId
     * @return \Torchbox\Thankq\Api\esitWSdoEventInsertBookingResult
     */
    public function setBookingId($bookingId)
    {
      $this->bookingId = $bookingId;
      return $this;
    }

}
