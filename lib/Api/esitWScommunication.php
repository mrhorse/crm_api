<?php

namespace Torchbox\Thankq\Api;

class esitWScommunication extends baseDataType
{

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var \DateTime $dateofcommunication
     */
    protected $dateofcommunication = null;

    /**
     * @var string $externalref
     */
    protected $externalref = null;

    /**
     * @var string $externalreftype
     */
    protected $externalreftype = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var string $priority
     */
    protected $priority = null;

    /**
     * @var string $inorout
     */
    protected $inorout = null;

    /**
     * @var string $communicationtype
     */
    protected $communicationtype = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \Torchbox\Thankq\Api\esitWScommunication
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialnumber()
    {
      return $this->serialnumber;
    }

    /**
     * @param string $serialnumber
     * @return \Torchbox\Thankq\Api\esitWScommunication
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateofcommunication()
    {
      if ($this->dateofcommunication == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateofcommunication);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateofcommunication
     * @return \Torchbox\Thankq\Api\esitWScommunication
     */
    public function setDateofcommunication(\DateTime $dateofcommunication = null)
    {
      if ($dateofcommunication == null) {
       $this->dateofcommunication = null;
      } else {
        $this->dateofcommunication = $dateofcommunication->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalref()
    {
      return $this->externalref;
    }

    /**
     * @param string $externalref
     * @return \Torchbox\Thankq\Api\esitWScommunication
     */
    public function setExternalref($externalref)
    {
      $this->externalref = $externalref;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalreftype()
    {
      return $this->externalreftype;
    }

    /**
     * @param string $externalreftype
     * @return \Torchbox\Thankq\Api\esitWScommunication
     */
    public function setExternalreftype($externalreftype)
    {
      $this->externalreftype = $externalreftype;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \Torchbox\Thankq\Api\esitWScommunication
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param string $priority
     * @return \Torchbox\Thankq\Api\esitWScommunication
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return string
     */
    public function getInorout()
    {
      return $this->inorout;
    }

    /**
     * @param string $inorout
     * @return \Torchbox\Thankq\Api\esitWScommunication
     */
    public function setInorout($inorout)
    {
      $this->inorout = $inorout;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommunicationtype()
    {
      return $this->communicationtype;
    }

    /**
     * @param string $communicationtype
     * @return \Torchbox\Thankq\Api\esitWScommunication
     */
    public function setCommunicationtype($communicationtype)
    {
      $this->communicationtype = $communicationtype;
      return $this;
    }

}
