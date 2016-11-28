<?php

namespace Torchbox\Thankq\Api;

class esitWSeventAttendeeType extends baseDataType
{

    /**
     * @var string $attendeeId
     */
    protected $attendeeId = null;

    /**
     * @var string $attendeeType
     */
    protected $attendeeType = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var int $ticketsLeft
     */
    protected $ticketsLeft = null;

    /**
     * @param float $cost
     * @param int $ticketsLeft
     */
    public function __construct($cost, $ticketsLeft)
    {
      $this->cost = $cost;
      $this->ticketsLeft = $ticketsLeft;
    }

    /**
     * @return string
     */
    public function getAttendeeId()
    {
      return $this->attendeeId;
    }

    /**
     * @param string $attendeeId
     * @return \Torchbox\Thankq\Api\esitWSeventAttendeeType
     */
    public function setAttendeeId($attendeeId)
    {
      $this->attendeeId = $attendeeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttendeeType()
    {
      return $this->attendeeType;
    }

    /**
     * @param string $attendeeType
     * @return \Torchbox\Thankq\Api\esitWSeventAttendeeType
     */
    public function setAttendeeType($attendeeType)
    {
      $this->attendeeType = $attendeeType;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param float $cost
     * @return \Torchbox\Thankq\Api\esitWSeventAttendeeType
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return int
     */
    public function getTicketsLeft()
    {
      return $this->ticketsLeft;
    }

    /**
     * @param int $ticketsLeft
     * @return \Torchbox\Thankq\Api\esitWSeventAttendeeType
     */
    public function setTicketsLeft($ticketsLeft)
    {
      $this->ticketsLeft = $ticketsLeft;
      return $this;
    }

}
