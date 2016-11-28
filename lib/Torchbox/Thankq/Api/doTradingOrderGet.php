<?php

namespace Torchbox\Thankq\Api;

class doTradingOrderGet
{

    /**
     * @var esitWSdoTradingOrderGetArgument $doTradingOrderGetArgument
     */
    protected $doTradingOrderGetArgument = null;

    /**
     * @param esitWSdoTradingOrderGetArgument $doTradingOrderGetArgument
     */
    public function __construct($doTradingOrderGetArgument)
    {
      $this->doTradingOrderGetArgument = $doTradingOrderGetArgument;
    }

    /**
     * @return esitWSdoTradingOrderGetArgument
     */
    public function getDoTradingOrderGetArgument()
    {
      return $this->doTradingOrderGetArgument;
    }

    /**
     * @param esitWSdoTradingOrderGetArgument $doTradingOrderGetArgument
     * @return \Torchbox\Thankq\Api\doTradingOrderGet
     */
    public function setDoTradingOrderGetArgument($doTradingOrderGetArgument)
    {
      $this->doTradingOrderGetArgument = $doTradingOrderGetArgument;
      return $this;
    }

}
