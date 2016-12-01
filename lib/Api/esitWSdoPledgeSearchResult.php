<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgeSearchResult extends baseDataType
{

    /**
     * @var int $totalResultCount
     */
    protected $totalResultCount = null;

    /**
     * @var ArrayOfEsitWSpledgeRecord $records
     */
    protected $records = null;

    /**
     * @param int $totalResultCount
     */
    public function __construct($totalResultCount)
    {
      $this->totalResultCount = $totalResultCount;
    }

    /**
     * @return int
     */
    public function getTotalResultCount()
    {
      return $this->totalResultCount;
    }

    /**
     * @param int $totalResultCount
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSearchResult
     */
    public function setTotalResultCount($totalResultCount)
    {
      $this->totalResultCount = $totalResultCount;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSpledgeRecord
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param ArrayOfEsitWSpledgeRecord $records
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSearchResult
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
