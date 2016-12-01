<?php

namespace Torchbox\Thankq\Api;

class esitWSeventStructure extends baseDataType
{

    /**
     * @var string $structureid
     */
    protected $structureid = null;

    /**
     * @var string $eventid
     */
    protected $eventid = null;

    /**
     * @var string $parentid
     */
    protected $parentid = null;

    /**
     * @var string $structureType
     */
    protected $structureType = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $capacity
     */
    protected $capacity = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var string $startTime
     */
    protected $startTime = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var string $endTime
     */
    protected $endTime = null;

    /**
     * @var float $structureCost
     */
    protected $structureCost = null;

    /**
     * @var int $taken
     */
    protected $taken = null;

    /**
     * @param int $capacity
     * @param float $structureCost
     * @param int $taken
     */
    public function __construct($capacity, $structureCost, $taken)
    {
      $this->capacity = $capacity;
      $this->structureCost = $structureCost;
      $this->taken = $taken;
    }

    /**
     * @return string
     */
    public function getStructureid()
    {
      return $this->structureid;
    }

    /**
     * @param string $structureid
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setStructureid($structureid)
    {
      $this->structureid = $structureid;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventid()
    {
      return $this->eventid;
    }

    /**
     * @param string $eventid
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setEventid($eventid)
    {
      $this->eventid = $eventid;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentid()
    {
      return $this->parentid;
    }

    /**
     * @param string $parentid
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setParentid($parentid)
    {
      $this->parentid = $parentid;
      return $this;
    }

    /**
     * @return string
     */
    public function getStructureType()
    {
      return $this->structureType;
    }

    /**
     * @param string $structureType
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setStructureType($structureType)
    {
      $this->structureType = $structureType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
      return $this->capacity;
    }

    /**
     * @param int $capacity
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setCapacity($capacity)
    {
      $this->capacity = $capacity;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
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
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
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
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getStructureCost()
    {
      return $this->structureCost;
    }

    /**
     * @param float $structureCost
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setStructureCost($structureCost)
    {
      $this->structureCost = $structureCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaken()
    {
      return $this->taken;
    }

    /**
     * @param int $taken
     * @return \Torchbox\Thankq\Api\esitWSeventStructure
     */
    public function setTaken($taken)
    {
      $this->taken = $taken;
      return $this;
    }

}
