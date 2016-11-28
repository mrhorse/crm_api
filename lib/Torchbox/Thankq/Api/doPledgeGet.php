<?php

namespace Torchbox\Thankq\Api;

class doPledgeGet
{

    /**
     * @var esitWSdoPledgeGetArgument $doPledgeGetArgument
     */
    protected $doPledgeGetArgument = null;

    /**
     * @param esitWSdoPledgeGetArgument $doPledgeGetArgument
     */
    public function __construct($doPledgeGetArgument)
    {
      $this->doPledgeGetArgument = $doPledgeGetArgument;
    }

    /**
     * @return esitWSdoPledgeGetArgument
     */
    public function getDoPledgeGetArgument()
    {
      return $this->doPledgeGetArgument;
    }

    /**
     * @param esitWSdoPledgeGetArgument $doPledgeGetArgument
     * @return \Torchbox\Thankq\Api\doPledgeGet
     */
    public function setDoPledgeGetArgument($doPledgeGetArgument)
    {
      $this->doPledgeGetArgument = $doPledgeGetArgument;
      return $this;
    }

}
