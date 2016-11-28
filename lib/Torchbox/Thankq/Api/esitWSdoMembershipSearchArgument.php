<?php

namespace Torchbox\Thankq\Api;

class esitWSdoMembershipSearchArgument extends baseDataType
{

    /**
     * @var string $membershipID
     */
    protected $membershipID = null;

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
    public function getMembershipID()
    {
      return $this->membershipID;
    }

    /**
     * @param string $membershipID
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSearchArgument
     */
    public function setMembershipID($membershipID)
    {
      $this->membershipID = $membershipID;
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSearchArgument
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
     * @return \Torchbox\Thankq\Api\esitWSdoMembershipSearchArgument
     */
    public function setRecordModified($recordModified)
    {
      $this->recordModified = $recordModified;
      return $this;
    }

}
