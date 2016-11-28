<?php

namespace Torchbox\Thankq\Api;

class doProfileSet
{

    /**
     * @var esitWSdoProfileSetArgument $doProfileSetArgument
     */
    protected $doProfileSetArgument = null;

    /**
     * @param esitWSdoProfileSetArgument $doProfileSetArgument
     */
    public function __construct($doProfileSetArgument)
    {
      $this->doProfileSetArgument = $doProfileSetArgument;
    }

    /**
     * @return esitWSdoProfileSetArgument
     */
    public function getDoProfileSetArgument()
    {
      return $this->doProfileSetArgument;
    }

    /**
     * @param esitWSdoProfileSetArgument $doProfileSetArgument
     * @return \Torchbox\Thankq\Api\doProfileSet
     */
    public function setDoProfileSetArgument($doProfileSetArgument)
    {
      $this->doProfileSetArgument = $doProfileSetArgument;
      return $this;
    }

}
