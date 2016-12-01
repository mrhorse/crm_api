<?php

namespace Torchbox\Thankq\Api;

class esitWSdoTradingOrderGetResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWStradingOrder $orders
     */
    protected $orders = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWStradingOrder
     */
    public function getOrders()
    {
      return $this->orders;
    }

    /**
     * @param ArrayOfEsitWStradingOrder $orders
     * @return \Torchbox\Thankq\Api\esitWSdoTradingOrderGetResult
     */
    public function setOrders($orders)
    {
      $this->orders = $orders;
      return $this;
    }

}
