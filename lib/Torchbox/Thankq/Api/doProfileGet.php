<?php

namespace Torchbox\Thankq\Api;

class doProfileGet
{

    /**
     * @var esitWSdoProfileGetArgument $doProfileGetArgument
     */
    protected $doProfileGetArgument = null;

    /**
     * @param esitWSdoProfileGetArgument $doProfileGetArgument
     */
    public function __construct($doProfileGetArgument)
    {
      $this->doProfileGetArgument = $doProfileGetArgument;
    }

    /**
     * @return esitWSdoProfileGetArgument
     */
    public function getDoProfileGetArgument()
    {
      return $this->doProfileGetArgument;
    }

    /**
     * @param esitWSdoProfileGetArgument $doProfileGetArgument
     * @return \Torchbox\Thankq\Api\doProfileGet
     */
    public function setDoProfileGetArgument($doProfileGetArgument)
    {
      $this->doProfileGetArgument = $doProfileGetArgument;
      return $this;
    }

}
