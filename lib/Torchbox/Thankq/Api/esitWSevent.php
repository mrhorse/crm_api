<?php

namespace Torchbox\Thankq\Api;

class esitWSevent extends baseDataType
{

    /**
     * @var string $eventId
     */
    protected $eventId = null;

    /**
     * @var string $eventName
     */
    protected $eventName = null;

    /**
     * @var string $webdescription
     */
    protected $webdescription = null;

    /**
     * @var \DateTime $startdate
     */
    protected $startdate = null;

    /**
     * @var \DateTime $enddate
     */
    protected $enddate = null;

    /**
     * @var string $startTime
     */
    protected $startTime = null;

    /**
     * @var string $endTime
     */
    protected $endTime = null;

    /**
     * @var string $eventType
     */
    protected $eventType = null;

    /**
     * @var string $eventWebsite
     */
    protected $eventWebsite = null;

    /**
     * @var int $maxAllowed
     */
    protected $maxAllowed = null;

    /**
     * @var int $ticketsLeft
     */
    protected $ticketsLeft = null;

    /**
     * @var esitWSeventLocation $location
     */
    protected $location = null;

    /**
     * @var boolean $booking
     */
    protected $booking = null;

    /**
     * @var ArrayOfEsitWSeventAttendeeType $attendeeTypes
     */
    protected $attendeeTypes = null;

    /**
     * @var ArrayOfEsitWSeventStructure $structures
     */
    protected $structures = null;

    /**
     * @param \DateTime $startdate
     * @param \DateTime $enddate
     * @param boolean $booking
     */
    public function __construct(\DateTime $startdate, \DateTime $enddate, $booking)
    {
      $this->startdate = $startdate->format(\DateTime::ATOM);
      $this->enddate = $enddate->format(\DateTime::ATOM);
      $this->booking = $booking;
    }

    /**
     * @return string
     */
    public function getEventId()
    {
      return $this->eventId;
    }

    /**
     * @param string $eventId
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setEventId($eventId)
    {
      $this->eventId = $eventId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
      return $this->eventName;
    }

    /**
     * @param string $eventName
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setEventName($eventName)
    {
      $this->eventName = $eventName;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebdescription()
    {
      return $this->webdescription;
    }

    /**
     * @param string $webdescription
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setWebdescription($webdescription)
    {
      $this->webdescription = $webdescription;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartdate()
    {
      if ($this->startdate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startdate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startdate
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setStartdate(\DateTime $startdate)
    {
      $this->startdate = $startdate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnddate()
    {
      if ($this->enddate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->enddate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $enddate
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setEnddate(\DateTime $enddate)
    {
      $this->enddate = $enddate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
      return $this->eventType;
    }

    /**
     * @param string $eventType
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setEventType($eventType)
    {
      $this->eventType = $eventType;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventWebsite()
    {
      return $this->eventWebsite;
    }

    /**
     * @param string $eventWebsite
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setEventWebsite($eventWebsite)
    {
      $this->eventWebsite = $eventWebsite;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxAllowed()
    {
      return $this->maxAllowed;
    }

    /**
     * @param int $maxAllowed
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setMaxAllowed($maxAllowed)
    {
      $this->maxAllowed = $maxAllowed;
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
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setTicketsLeft($ticketsLeft)
    {
      $this->ticketsLeft = $ticketsLeft;
      return $this;
    }

    /**
     * @return esitWSeventLocation
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param esitWSeventLocation $location
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBooking()
    {
      return $this->booking;
    }

    /**
     * @param boolean $booking
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setBooking($booking)
    {
      $this->booking = $booking;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSeventAttendeeType
     */
    public function getAttendeeTypes()
    {
      return $this->attendeeTypes;
    }

    /**
     * @param ArrayOfEsitWSeventAttendeeType $attendeeTypes
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setAttendeeTypes($attendeeTypes)
    {
      $this->attendeeTypes = $attendeeTypes;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSeventStructure
     */
    public function getStructures()
    {
      return $this->structures;
    }

    /**
     * @param ArrayOfEsitWSeventStructure $structures
     * @return \Torchbox\Thankq\Api\esitWSevent
     */
    public function setStructures($structures)
    {
      $this->structures = $structures;
      return $this;
    }

}
