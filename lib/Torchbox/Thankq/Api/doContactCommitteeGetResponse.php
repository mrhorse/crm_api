<?php

namespace Torchbox\Thankq\Api;

class doContactCommitteeGetResponse
{

    /**
     * @var esitWSdoContactCommitteeGetResult $doContactCommitteeGetResult
     */
    protected $doContactCommitteeGetResult = null;

    /**
     * @param esitWSdoContactCommitteeGetResult $doContactCommitteeGetResult
     */
    public function __construct($doContactCommitteeGetResult)
    {
      $this->doContactCommitteeGetResult = $doContactCommitteeGetResult;
    }

    /**
     * @return esitWSdoContactCommitteeGetResult
     */
    public function getDoContactCommitteeGetResult()
    {
      return $this->doContactCommitteeGetResult;
    }

    /**
     * @param esitWSdoContactCommitteeGetResult $doContactCommitteeGetResult
     * @return \Torchbox\Thankq\Api\doContactCommitteeGetResponse
     */
    public function setDoContactCommitteeGetResult($doContactCommitteeGetResult)
    {
      $this->doContactCommitteeGetResult = $doContactCommitteeGetResult;
      return $this;
    }

}
