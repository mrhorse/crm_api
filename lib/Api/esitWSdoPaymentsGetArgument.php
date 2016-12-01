<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPaymentsGetArgument extends baseDataType
{

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var string $incomeType
     */
    protected $incomeType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSerialnumber()
    {
      return $this->serialnumber;
    }

    /**
     * @param string $serialnumber
     * @return \Torchbox\Thankq\Api\esitWSdoPaymentsGetArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getIncomeType()
    {
      return $this->incomeType;
    }

    /**
     * @param string $incomeType
     * @return \Torchbox\Thankq\Api\esitWSdoPaymentsGetArgument
     */
    public function setIncomeType($incomeType)
    {
      $this->incomeType = $incomeType;
      return $this;
    }

}
