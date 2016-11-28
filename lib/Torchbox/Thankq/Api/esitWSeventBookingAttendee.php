<?php

namespace Torchbox\Thankq\Api;

class esitWSeventBookingAttendee extends baseDataType
{

    /**
     * @var string $attendeeId
     */
    protected $attendeeId = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $firstname
     */
    protected $firstname = null;

    /**
     * @var string $keyname
     */
    protected $keyname = null;

    /**
     * @var string $dietaryrequirements
     */
    protected $dietaryrequirements = null;

    /**
     * @var string $specialneeds
     */
    protected $specialneeds = null;

    /**
     * @var boolean $attendeeIsBooker
     */
    protected $attendeeIsBooker = null;

    /**
     * @var ArrayOfEsitWSeventStructure $structures
     */
    protected $structures = null;

    /**
     * @param boolean $attendeeIsBooker
     */
    public function __construct($attendeeIsBooker)
    {
      $this->attendeeIsBooker = $attendeeIsBooker;
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
     * @return \Torchbox\Thankq\Api\esitWSeventBookingAttendee
     */
    public function setAttendeeId($attendeeId)
    {
      $this->attendeeId = $attendeeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Torchbox\Thankq\Api\esitWSeventBookingAttendee
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
      return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return \Torchbox\Thankq\Api\esitWSeventBookingAttendee
     */
    public function setFirstname($firstname)
    {
      $this->firstname = $firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyname()
    {
      return $this->keyname;
    }

    /**
     * @param string $keyname
     * @return \Torchbox\Thankq\Api\esitWSeventBookingAttendee
     */
    public function setKeyname($keyname)
    {
      $this->keyname = $keyname;
      return $this;
    }

    /**
     * @return string
     */
    public function getDietaryrequirements()
    {
      return $this->dietaryrequirements;
    }

    /**
     * @param string $dietaryrequirements
     * @return \Torchbox\Thankq\Api\esitWSeventBookingAttendee
     */
    public function setDietaryrequirements($dietaryrequirements)
    {
      $this->dietaryrequirements = $dietaryrequirements;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialneeds()
    {
      return $this->specialneeds;
    }

    /**
     * @param string $specialneeds
     * @return \Torchbox\Thankq\Api\esitWSeventBookingAttendee
     */
    public function setSpecialneeds($specialneeds)
    {
      $this->specialneeds = $specialneeds;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAttendeeIsBooker()
    {
      return $this->attendeeIsBooker;
    }

    /**
     * @param boolean $attendeeIsBooker
     * @return \Torchbox\Thankq\Api\esitWSeventBookingAttendee
     */
    public function setAttendeeIsBooker($attendeeIsBooker)
    {
      $this->attendeeIsBooker = $attendeeIsBooker;
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
     * @return \Torchbox\Thankq\Api\esitWSeventBookingAttendee
     */
    public function setStructures($structures)
    {
      $this->structures = $structures;
      return $this;
    }

}
