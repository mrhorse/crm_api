<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgePay extends baseDataType
{

    /**
     * @var string $pledgeID
     */
    protected $pledgeID = null;

    /**
     * @var int $pledgeInstalmentID
     */
    protected $pledgeInstalmentID = null;

    /**
     * @var string $webRef
     */
    protected $webRef = null;

    /**
     * @param int $pledgeInstalmentID
     */
    public function __construct($pledgeInstalmentID)
    {
      $this->pledgeInstalmentID = $pledgeInstalmentID;
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
     * @return \Torchbox\Thankq\Api\esitWSdoPledgePay
     */
    public function setPledgeID($pledgeID)
    {
      $this->pledgeID = $pledgeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPledgeInstalmentID()
    {
      return $this->pledgeInstalmentID;
    }

    /**
     * @param int $pledgeInstalmentID
     * @return \Torchbox\Thankq\Api\esitWSdoPledgePay
     */
    public function setPledgeInstalmentID($pledgeInstalmentID)
    {
      $this->pledgeInstalmentID = $pledgeInstalmentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebRef()
    {
      return $this->webRef;
    }

    /**
     * @param string $webRef
     * @return \Torchbox\Thankq\Api\esitWSdoPledgePay
     */
    public function setWebRef($webRef)
    {
      $this->webRef = $webRef;
      return $this;
    }

}
