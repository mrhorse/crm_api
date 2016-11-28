<?php

namespace Torchbox\Thankq\Api;

class esitWSdoTradingOrderSetResult extends baseDataType
{

    /**
     * @var string $orderId
     */
    protected $orderId = null;

    
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
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderSetResult
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

}
