<?php

namespace Torchbox\Thankq\Api;

class doPledgeEdit
{

    /**
     * @var esitWSdoPledgeEditArgument $doPledgeEditArgument
     */
    protected $doPledgeEditArgument = null;

    /**
     * @param esitWSdoPledgeEditArgument $doPledgeEditArgument
     */
    public function __construct($doPledgeEditArgument)
    {
      $this->doPledgeEditArgument = $doPledgeEditArgument;
    }

    /**
     * @return esitWSdoPledgeEditArgument
     */
    public function getDoPledgeEditArgument()
    {
      return $this->doPledgeEditArgument;
    }

    /**
     * @param esitWSdoPledgeEditArgument $doPledgeEditArgument
     * @return \Torchbox\Thankq\Api\doPledgeEdit
     */
    public function setDoPledgeEditArgument($doPledgeEditArgument)
    {
      $this->doPledgeEditArgument = $doPledgeEditArgument;
      return $this;
    }

}
