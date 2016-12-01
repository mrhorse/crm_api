<?php

namespace Torchbox\Thankq\Api;

class doPledgeSet
{

    /**
     * @var esitWSdoPledgeSetArgument $doPledgeSetArgument
     */
    protected $doPledgeSetArgument = null;

    /**
     * @param esitWSdoPledgeSetArgument $doPledgeSetArgument
     */
    public function __construct($doPledgeSetArgument)
    {
      $this->doPledgeSetArgument = $doPledgeSetArgument;
    }

    /**
     * @return esitWSdoPledgeSetArgument
     */
    public function getDoPledgeSetArgument()
    {
      return $this->doPledgeSetArgument;
    }

    /**
     * @param esitWSdoPledgeSetArgument $doPledgeSetArgument
     * @return \Torchbox\Thankq\Api\doPledgeSet
     */
    public function setDoPledgeSetArgument($doPledgeSetArgument)
    {
      $this->doPledgeSetArgument = $doPledgeSetArgument;
      return $this;
    }

}
