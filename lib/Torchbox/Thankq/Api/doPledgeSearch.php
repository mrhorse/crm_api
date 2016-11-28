<?php

namespace Torchbox\Thankq\Api;

class doPledgeSearch
{

    /**
     * @var esitWSdoPledgeSearchArgument $doPledgeSearchArgument
     */
    protected $doPledgeSearchArgument = null;

    /**
     * @param esitWSdoPledgeSearchArgument $doPledgeSearchArgument
     */
    public function __construct($doPledgeSearchArgument)
    {
      $this->doPledgeSearchArgument = $doPledgeSearchArgument;
    }

    /**
     * @return esitWSdoPledgeSearchArgument
     */
    public function getDoPledgeSearchArgument()
    {
      return $this->doPledgeSearchArgument;
    }

    /**
     * @param esitWSdoPledgeSearchArgument $doPledgeSearchArgument
     * @return \Torchbox\Thankq\Api\doPledgeSearch
     */
    public function setDoPledgeSearchArgument($doPledgeSearchArgument)
    {
      $this->doPledgeSearchArgument = $doPledgeSearchArgument;
      return $this;
    }

}
