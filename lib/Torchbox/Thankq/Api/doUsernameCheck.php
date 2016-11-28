<?php

namespace Torchbox\Thankq\Api;

class doUsernameCheck
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @param string $username
     */
    public function __construct($username)
    {
      $this->username = $username;
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
     * @return \Torchbox\Thankq\Api\doUsernameCheck
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

}
