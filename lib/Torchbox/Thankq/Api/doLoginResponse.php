<?php

namespace Torchbox\Thankq\Api;

class doLoginResponse
{

    /**
     * @var esitWSdoLoginResult $doLoginResult
     */
    protected $doLoginResult = null;

    /**
     * @param esitWSdoLoginResult $doLoginResult
     */
    public function __construct($doLoginResult)
    {
      $this->doLoginResult = $doLoginResult;
    }

    /**
     * @return esitWSdoLoginResult
     */
    public function getDoLoginResult()
    {
      return $this->doLoginResult;
    }

    /**
     * @param esitWSdoLoginResult $doLoginResult
     * @return \Torchbox\Thankq\Api\doLoginResponse
     */
    public function setDoLoginResult($doLoginResult)
    {
      $this->doLoginResult = $doLoginResult;
      return $this;
    }

}
