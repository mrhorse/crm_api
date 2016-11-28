<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgeSearchArgument extends baseDataType
{

    /**
     * @var string $pledgeID
     */
    protected $pledgeID = null;

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var esitWSrecordModified $recordModified
     */
    protected $recordModified = null;

    
    public function __construct()
    {
    
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
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSearchArgument
     */
    public function setPledgeID($pledgeID)
    {
      $this->pledgeID = $pledgeID;
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
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSearchArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return esitWSrecordModified
     */
    public function getRecordModified()
    {
      return $this->recordModified;
    }

    /**
     * @param esitWSrecordModified $recordModified
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeSearchArgument
     */
    public function setRecordModified($recordModified)
    {
      $this->recordModified = $recordModified;
      return $this;
    }

}
