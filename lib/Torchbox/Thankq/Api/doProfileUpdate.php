<?php

namespace Torchbox\Thankq\Api;

class doProfileUpdate
{

    /**
     * @var esitWSdoProfileUpdateArgument $doProfileUpdateArgument
     */
    protected $doProfileUpdateArgument = null;

    /**
     * @param esitWSdoProfileUpdateArgument $doProfileUpdateArgument
     */
    public function __construct($doProfileUpdateArgument)
    {
      $this->doProfileUpdateArgument = $doProfileUpdateArgument;
    }

    /**
     * @return esitWSdoProfileUpdateArgument
     */
    public function getDoProfileUpdateArgument()
    {
      return $this->doProfileUpdateArgument;
    }

    /**
     * @param esitWSdoProfileUpdateArgument $doProfileUpdateArgument
     * @return \Torchbox\Thankq\Api\doProfileUpdate
     */
    public function setDoProfileUpdateArgument($doProfileUpdateArgument)
    {
      $this->doProfileUpdateArgument = $doProfileUpdateArgument;
      return $this;
    }

}
