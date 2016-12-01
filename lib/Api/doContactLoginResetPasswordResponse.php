<?php

namespace Torchbox\Thankq\Api;

class doContactLoginResetPasswordResponse
{

    /**
     * @var esitWSdoContactLoginPasswordChangeResult $doContactLoginResetPasswordResult
     */
    protected $doContactLoginResetPasswordResult = null;

    /**
     * @param esitWSdoContactLoginPasswordChangeResult $doContactLoginResetPasswordResult
     */
    public function __construct($doContactLoginResetPasswordResult)
    {
      $this->doContactLoginResetPasswordResult = $doContactLoginResetPasswordResult;
    }

    /**
     * @return esitWSdoContactLoginPasswordChangeResult
     */
    public function getDoContactLoginResetPasswordResult()
    {
      return $this->doContactLoginResetPasswordResult;
    }

    /**
     * @param esitWSdoContactLoginPasswordChangeResult $doContactLoginResetPasswordResult
     * @return \Torchbox\Thankq\Api\doContactLoginResetPasswordResponse
     */
    public function setDoContactLoginResetPasswordResult($doContactLoginResetPasswordResult)
    {
      $this->doContactLoginResetPasswordResult = $doContactLoginResetPasswordResult;
      return $this;
    }

}
