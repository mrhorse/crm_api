<?php

namespace Torchbox\Thankq\Api;

class doEventPublicInsertResponse
{

    /**
     * @var esitWSdoEventInsertBookingResult $doEventPublicInsertResult
     */
    protected $doEventPublicInsertResult = null;

    /**
     * @param esitWSdoEventInsertBookingResult $doEventPublicInsertResult
     */
    public function __construct($doEventPublicInsertResult)
    {
      $this->doEventPublicInsertResult = $doEventPublicInsertResult;
    }

    /**
     * @return esitWSdoEventInsertBookingResult
     */
    public function getDoEventPublicInsertResult()
    {
      return $this->doEventPublicInsertResult;
    }

    /**
     * @param esitWSdoEventInsertBookingResult $doEventPublicInsertResult
     * @return \Torchbox\Thankq\Api\doEventPublicInsertResponse
     */
    public function setDoEventPublicInsertResult($doEventPublicInsertResult)
    {
      $this->doEventPublicInsertResult = $doEventPublicInsertResult;
      return $this;
    }

}
