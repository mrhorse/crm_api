<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactLoginPasswordChangeArgument extends baseDataType
{

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var string $oldPassword
     */
    protected $oldPassword = null;

    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    
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
     * @return \Torchbox\Thankq\Api\esitWSdoContactLoginPasswordChangeArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOldPassword()
    {
      return $this->oldPassword;
    }

    /**
     * @param string $oldPassword
     * @return \Torchbox\Thankq\Api\esitWSdoContactLoginPasswordChangeArgument
     */
    public function setOldPassword($oldPassword)
    {
      $this->oldPassword = $oldPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \Torchbox\Thankq\Api\esitWSdoContactLoginPasswordChangeArgument
     */
    public function setNewPassword($newPassword)
    {
      $this->newPassword = $newPassword;
      return $this;
    }

}
