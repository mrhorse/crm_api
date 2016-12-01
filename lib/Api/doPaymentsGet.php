<?php

namespace Torchbox\Thankq\Api;

class doPaymentsGet
{

    /**
     * @var esitWSdoPaymentsGetArgument $doPaymentsGetArgument
     */
    protected $doPaymentsGetArgument = null;

    /**
     * @param esitWSdoPaymentsGetArgument $doPaymentsGetArgument
     */
    public function __construct($doPaymentsGetArgument)
    {
      $this->doPaymentsGetArgument = $doPaymentsGetArgument;
    }

    /**
     * @return esitWSdoPaymentsGetArgument
     */
    public function getDoPaymentsGetArgument()
    {
      return $this->doPaymentsGetArgument;
    }

    /**
     * @param esitWSdoPaymentsGetArgument $doPaymentsGetArgument
     * @return \Torchbox\Thankq\Api\doPaymentsGet
     */
    public function setDoPaymentsGetArgument($doPaymentsGetArgument)
    {
      $this->doPaymentsGetArgument = $doPaymentsGetArgument;
      return $this;
    }

}
