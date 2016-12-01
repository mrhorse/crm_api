<?php

namespace Torchbox\Thankq\Api;

class doContactLoginResetPassword
{

    /**
     * @var esitWSdoContactLoginPasswordChangeArgument $doContactLoginPasswordChangeArgument
     */
    protected $doContactLoginPasswordChangeArgument = null;

    /**
     * @param esitWSdoContactLoginPasswordChangeArgument $doContactLoginPasswordChangeArgument
     */
    public function __construct($doContactLoginPasswordChangeArgument)
    {
      $this->doContactLoginPasswordChangeArgument = $doContactLoginPasswordChangeArgument;
    }

    /**
     * @return esitWSdoContactLoginPasswordChangeArgument
     */
    public function getDoContactLoginPasswordChangeArgument()
    {
      return $this->doContactLoginPasswordChangeArgument;
    }

    /**
     * @param esitWSdoContactLoginPasswordChangeArgument $doContactLoginPasswordChangeArgument
     * @return \Torchbox\Thankq\Api\doContactLoginResetPassword
     */
    public function setDoContactLoginPasswordChangeArgument($doContactLoginPasswordChangeArgument)
    {
      $this->doContactLoginPasswordChangeArgument = $doContactLoginPasswordChangeArgument;
      return $this;
    }

}
