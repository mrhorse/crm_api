<?php

namespace Torchbox\Thankq\Api;

class doContactLoginPasswordChangeResponse
{

    /**
     * @var esitWSdoContactLoginPasswordChangeResult $doContactLoginPasswordChangeResult
     */
    protected $doContactLoginPasswordChangeResult = null;

    /**
     * @param esitWSdoContactLoginPasswordChangeResult $doContactLoginPasswordChangeResult
     */
    public function __construct($doContactLoginPasswordChangeResult)
    {
      $this->doContactLoginPasswordChangeResult = $doContactLoginPasswordChangeResult;
    }

    /**
     * @return esitWSdoContactLoginPasswordChangeResult
     */
    public function getDoContactLoginPasswordChangeResult()
    {
      return $this->doContactLoginPasswordChangeResult;
    }

    /**
     * @param esitWSdoContactLoginPasswordChangeResult $doContactLoginPasswordChangeResult
     * @return \Torchbox\Thankq\Api\doContactLoginPasswordChangeResponse
     */
    public function setDoContactLoginPasswordChangeResult($doContactLoginPasswordChangeResult)
    {
      $this->doContactLoginPasswordChangeResult = $doContactLoginPasswordChangeResult;
      return $this;
    }

}
