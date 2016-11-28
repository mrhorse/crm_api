<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactCommitteeGetArgument extends baseDataType
{

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var string $committeeId
     */
    protected $committeeId = null;

    
    public function __construct()
    {
    
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
     * @return \Torchbox\Thankq\Api\esitWSdoContactCommitteeGetArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommitteeId()
    {
      return $this->committeeId;
    }

    /**
     * @param string $committeeId
     * @return \Torchbox\Thankq\Api\esitWSdoContactCommitteeGetArgument
     */
    public function setCommitteeId($committeeId)
    {
      $this->committeeId = $committeeId;
      return $this;
    }

}
