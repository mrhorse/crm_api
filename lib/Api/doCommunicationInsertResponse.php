<?php

namespace Torchbox\Thankq\Api;

class doCommunicationInsertResponse
{

    /**
     * @var boolean $doCommunicationInsertResult
     */
    protected $doCommunicationInsertResult = null;

    /**
     * @param boolean $doCommunicationInsertResult
     */
    public function __construct($doCommunicationInsertResult)
    {
      $this->doCommunicationInsertResult = $doCommunicationInsertResult;
    }

    /**
     * @return boolean
     */
    public function getDoCommunicationInsertResult()
    {
      return $this->doCommunicationInsertResult;
    }

    /**
     * @param boolean $doCommunicationInsertResult
     * @return \Torchbox\Thankq\Api\doCommunicationInsertResponse
     */
    public function setDoCommunicationInsertResult($doCommunicationInsertResult)
    {
      $this->doCommunicationInsertResult = $doCommunicationInsertResult;
      return $this;
    }

}
