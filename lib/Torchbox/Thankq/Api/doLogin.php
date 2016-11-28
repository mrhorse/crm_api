<?php

namespace Torchbox\Thankq\Api;

class doLogin
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
      $this->username = $username;
      $this->password = $password;
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
     * @return \Torchbox\Thankq\Api\doLogin
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
     * @return \Torchbox\Thankq\Api\doLogin
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
