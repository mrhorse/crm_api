<?php

namespace Torchbox\Thankq\Api;

class doPledgeSearchResponse
{

    /**
     * @var esitWSdoPledgeSearchResult $doPledgeSearchResult
     */
    protected $doPledgeSearchResult = null;

    /**
     * @param esitWSdoPledgeSearchResult $doPledgeSearchResult
     */
    public function __construct($doPledgeSearchResult)
    {
      $this->doPledgeSearchResult = $doPledgeSearchResult;
    }

    /**
     * @return esitWSdoPledgeSearchResult
     */
    public function getDoPledgeSearchResult()
    {
      return $this->doPledgeSearchResult;
    }

    /**
     * @param esitWSdoPledgeSearchResult $doPledgeSearchResult
     * @return \Torchbox\Thankq\Api\doPledgeSearchResponse
     */
    public function setDoPledgeSearchResult($doPledgeSearchResult)
    {
      $this->doPledgeSearchResult = $doPledgeSearchResult;
      return $this;
    }

}
