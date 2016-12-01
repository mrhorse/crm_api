<?php

namespace Torchbox\Thankq\Api;

class doUsernameCheckResponse
{

    /**
     * @var esitWSdoUsernameCheckResult $doUsernameCheckResult
     */
    protected $doUsernameCheckResult = null;

    /**
     * @param esitWSdoUsernameCheckResult $doUsernameCheckResult
     */
    public function __construct($doUsernameCheckResult)
    {
      $this->doUsernameCheckResult = $doUsernameCheckResult;
    }

    /**
     * @return esitWSdoUsernameCheckResult
     */
    public function getDoUsernameCheckResult()
    {
      return $this->doUsernameCheckResult;
    }

    /**
     * @param esitWSdoUsernameCheckResult $doUsernameCheckResult
     * @return \Torchbox\Thankq\Api\doUsernameCheckResponse
     */
    public function setDoUsernameCheckResult($doUsernameCheckResult)
    {
      $this->doUsernameCheckResult = $doUsernameCheckResult;
      return $this;
    }

}
