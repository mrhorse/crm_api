<?php

namespace Torchbox\Thankq\Api;

class doContactSearchResponse
{

    /**
     * @var esitWSdoContactSearchResult $doContactSearchResult
     */
    protected $doContactSearchResult = null;

    /**
     * @param esitWSdoContactSearchResult $doContactSearchResult
     */
    public function __construct($doContactSearchResult)
    {
      $this->doContactSearchResult = $doContactSearchResult;
    }

    /**
     * @return esitWSdoContactSearchResult
     */
    public function getDoContactSearchResult()
    {
      return $this->doContactSearchResult;
    }

    /**
     * @param esitWSdoContactSearchResult $doContactSearchResult
     * @return \Torchbox\Thankq\Api\doContactSearchResponse
     */
    public function setDoContactSearchResult($doContactSearchResult)
    {
      $this->doContactSearchResult = $doContactSearchResult;
      return $this;
    }

}
