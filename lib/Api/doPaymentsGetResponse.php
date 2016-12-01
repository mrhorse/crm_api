<?php

namespace Torchbox\Thankq\Api;

class doPaymentsGetResponse
{

    /**
     * @var esitWSdoPaymentsGetResult $doPaymentsGetResult
     */
    protected $doPaymentsGetResult = null;

    /**
     * @param esitWSdoPaymentsGetResult $doPaymentsGetResult
     */
    public function __construct($doPaymentsGetResult)
    {
      $this->doPaymentsGetResult = $doPaymentsGetResult;
    }

    /**
     * @return esitWSdoPaymentsGetResult
     */
    public function getDoPaymentsGetResult()
    {
      return $this->doPaymentsGetResult;
    }

    /**
     * @param esitWSdoPaymentsGetResult $doPaymentsGetResult
     * @return \Torchbox\Thankq\Api\doPaymentsGetResponse
     */
    public function setDoPaymentsGetResult($doPaymentsGetResult)
    {
      $this->doPaymentsGetResult = $doPaymentsGetResult;
      return $this;
    }

}
