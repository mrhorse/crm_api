<?php

namespace Torchbox\Thankq\Api;

class esitWSmembershipInstalment extends baseDataType
{

    /**
     * @var int $instalmentID
     */
    protected $instalmentID = null;

    /**
     * @var string $instalmentStatus
     */
    protected $instalmentStatus = null;

    /**
     * @var float $instalment
     */
    protected $instalment = null;

    /**
     * @var \DateTime $dateDue
     */
    protected $dateDue = null;

    /**
     * @param int $instalmentID
     * @param float $instalment
     */
    public function __construct($instalmentID, $instalment)
    {
      $this->instalmentID = $instalmentID;
      $this->instalment = $instalment;
    }

    /**
     * @return int
     */
    public function getInstalmentID()
    {
      return $this->instalmentID;
    }

    /**
     * @param int $instalmentID
     * @return \Torchbox\Thankq\Api\esitWSmembershipInstalment
     */
    public function setInstalmentID($instalmentID)
    {
      $this->instalmentID = $instalmentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInstalmentStatus()
    {
      return $this->instalmentStatus;
    }

    /**
     * @param string $instalmentStatus
     * @return \Torchbox\Thankq\Api\esitWSmembershipInstalment
     */
    public function setInstalmentStatus($instalmentStatus)
    {
      $this->instalmentStatus = $instalmentStatus;
      return $this;
    }

    /**
     * @return float
     */
    public function getInstalment()
    {
      return $this->instalment;
    }

    /**
     * @param float $instalment
     * @return \Torchbox\Thankq\Api\esitWSmembershipInstalment
     */
    public function setInstalment($instalment)
    {
      $this->instalment = $instalment;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateDue()
    {
      if ($this->dateDue == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateDue);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateDue
     * @return \Torchbox\Thankq\Api\esitWSmembershipInstalment
     */
    public function setDateDue(\DateTime $dateDue = null)
    {
      if ($dateDue == null) {
       $this->dateDue = null;
      } else {
        $this->dateDue = $dateDue->format(\DateTime::ATOM);
      }
      return $this;
    }

}
