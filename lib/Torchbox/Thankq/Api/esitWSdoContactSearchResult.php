<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactSearchResult extends baseDataType
{

    /**
     * @var int $totalResultCount
     */
    protected $totalResultCount = null;

    /**
     * @var ArrayOfEsitWSdoContactSearchResultRecord $records
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
     * @return \Torchbox\Thankq\Api\esitWSdoContactSearchResult
     */
    public function setTotalResultCount($totalResultCount)
    {
      $this->totalResultCount = $totalResultCount;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSdoContactSearchResultRecord
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param ArrayOfEsitWSdoContactSearchResultRecord $records
     * @return \Torchbox\Thankq\Api\esitWSdoContactSearchResult
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
