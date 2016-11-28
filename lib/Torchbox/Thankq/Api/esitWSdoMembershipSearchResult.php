<?php

namespace Torchbox\Thankq\Api;

class esitWSdoMembershipSearchResult extends baseDataType
{

    /**
     * @var int $totalResultCount
     */
    protected $totalResultCount = null;

    /**
     * @var ArrayOfEsitWSmembershipRecord $records
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSearchResult
     */
    public function setTotalResultCount($totalResultCount)
    {
      $this->totalResultCount = $totalResultCount;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSmembershipRecord
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param ArrayOfEsitWSmembershipRecord $records
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSearchResult
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
