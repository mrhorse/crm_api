<?php

namespace Torchbox\Thankq\Api;

class doPledgePay
{

    /**
     * @var esitWSdoPledgePay $doPledgePayArgument
     */
    protected $doPledgePayArgument = null;

    /**
     * @param esitWSdoPledgePay $doPledgePayArgument
     */
    public function __construct($doPledgePayArgument)
    {
      $this->doPledgePayArgument = $doPledgePayArgument;
    }

    /**
     * @return esitWSdoPledgePay
     */
    public function getDoPledgePayArgument()
    {
      return $this->doPledgePayArgument;
    }

    /**
     * @param esitWSdoPledgePay $doPledgePayArgument
     * @return \Torchbox\Thankq\Api\doPledgePay
     */
    public function setDoPledgePayArgument($doPledgePayArgument)
    {
      $this->doPledgePayArgument = $doPledgePayArgument;
      return $this;
    }

}
