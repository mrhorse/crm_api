<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactLoginInsertArgument extends baseDataType
{

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    
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
     * @return \Torchbox\Thankq\Api\esitWSdoContactLoginInsertArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \Torchbox\Thankq\Api\esitWSdoContactLoginInsertArgument
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Torchbox\Thankq\Api\esitWSdoContactLoginInsertArgument
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
