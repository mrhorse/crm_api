<?php

namespace Torchbox\Thankq\Api;

class doVolunteerInsertResponse
{

    /**
     * @var esitWSdoVolunteerInsertResult $doVolunteerInsertResult
     */
    protected $doVolunteerInsertResult = null;

    /**
     * @param esitWSdoVolunteerInsertResult $doVolunteerInsertResult
     */
    public function __construct($doVolunteerInsertResult)
    {
      $this->doVolunteerInsertResult = $doVolunteerInsertResult;
    }

    /**
     * @return esitWSdoVolunteerInsertResult
     */
    public function getDoVolunteerInsertResult()
    {
      return $this->doVolunteerInsertResult;
    }

    /**
     * @param esitWSdoVolunteerInsertResult $doVolunteerInsertResult
     * @return \Torchbox\Thankq\Api\doVolunteerInsertResponse
     */
    public function setDoVolunteerInsertResult($doVolunteerInsertResult)
    {
      $this->doVolunteerInsertResult = $doVolunteerInsertResult;
      return $this;
    }

}
