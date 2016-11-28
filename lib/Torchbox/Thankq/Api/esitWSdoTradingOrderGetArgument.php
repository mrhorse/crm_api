<?php

namespace Torchbox\Thankq\Api;

class esitWSdoTradingOrderGetArgument extends baseDataType
{

    /**
     * @var string $orderId
     */
    protected $orderId = null;

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderGetArgument
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialnumber()
    {
      return $this->serialnumber;
    }

    /**
     * @param string $serialnumber
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderGetArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

}
