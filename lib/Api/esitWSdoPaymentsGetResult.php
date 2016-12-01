<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPaymentsGetResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSPaymentRecord $records
     */
    protected $records = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSPaymentRecord
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param ArrayOfEsitWSPaymentRecord $records
     * @return \Torchbox\Thankq\Api\esitWSdoPaymentsGetResult
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
