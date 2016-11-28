<?php

namespace Torchbox\Thankq\Api;

class doTradingOrderSet
{

    /**
     * @var esitWSdoTradingOrderSetArgument $doTradingOrderSetArgument
     */
    protected $doTradingOrderSetArgument = null;

    /**
     * @param esitWSdoTradingOrderSetArgument $doTradingOrderSetArgument
     */
    public function __construct($doTradingOrderSetArgument)
    {
      $this->doTradingOrderSetArgument = $doTradingOrderSetArgument;
    }

    /**
     * @return esitWSdoTradingOrderSetArgument
     */
    public function getDoTradingOrderSetArgument()
    {
      return $this->doTradingOrderSetArgument;
    }

    /**
     * @param esitWSdoTradingOrderSetArgument $doTradingOrderSetArgument
     * @return \Torchbox\Thankq\Api\doTradingOrderSet
     */
    public function setDoTradingOrderSetArgument($doTradingOrderSetArgument)
    {
      $this->doTradingOrderSetArgument = $doTradingOrderSetArgument;
      return $this;
    }

}
