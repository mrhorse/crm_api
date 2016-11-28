<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgeEditArgument extends baseDataType
{

    /**
     * @var string $pledgeID
     */
    protected $pledgeID = null;

    /**
     * @var boolean $cancel
     */
    protected $cancel = null;

    /**
     * @var float $newInstalmentValue
     */
    protected $newInstalmentValue = null;

    /**
     * @var \DateTime $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @param boolean $cancel
     */
    public function __construct($cancel)
    {
      $this->cancel = $cancel;
    }

    /**
     * @return string
     */
    public function getPledgeID()
    {
      return $this->pledgeID;
    }

    /**
     * @param string $pledgeID
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeEditArgument
     */
    public function setPledgeID($pledgeID)
    {
      $this->pledgeID = $pledgeID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCancel()
    {
      return $this->cancel;
    }

    /**
     * @param boolean $cancel
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeEditArgument
     */
    public function setCancel($cancel)
    {
      $this->cancel = $cancel;
      return $this;
    }

    /**
     * @return float
     */
    public function getNewInstalmentValue()
    {
      return $this->newInstalmentValue;
    }

    /**
     * @param float $newInstalmentValue
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeEditArgument
     */
    public function setNewInstalmentValue($newInstalmentValue)
    {
      $this->newInstalmentValue = $newInstalmentValue;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
      if ($this->dateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateFrom
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeEditArgument
     */
    public function setDateFrom(\DateTime $dateFrom = null)
    {
      if ($dateFrom == null) {
       $this->dateFrom = null;
      } else {
        $this->dateFrom = $dateFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

}
