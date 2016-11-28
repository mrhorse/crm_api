<?php

namespace Torchbox\Thankq\Api;

class doCommunicationInsert
{

    /**
     * @var esitWScommunication $communication
     */
    protected $communication = null;

    /**
     * @param esitWScommunication $communication
     */
    public function __construct($communication)
    {
      $this->communication = $communication;
    }

    /**
     * @return esitWScommunication
     */
    public function getCommunication()
    {
      return $this->communication;
    }

    /**
     * @param esitWScommunication $communication
     * @return \Torchbox\Thankq\Api\doCommunicationInsert
     */
    public function setCommunication($communication)
    {
      $this->communication = $communication;
      return $this;
    }

}
