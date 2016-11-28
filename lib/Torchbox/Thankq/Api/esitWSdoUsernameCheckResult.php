<?php

namespace Torchbox\Thankq\Api;

class esitWSdoUsernameCheckResult extends baseDataType
{

    /**
     * @var boolean $emailTaken
     */
    protected $emailTaken = null;

    /**
     * @param boolean $emailTaken
     */
    public function __construct($emailTaken)
    {
      $this->emailTaken = $emailTaken;
    }

    /**
     * @return boolean
     */
    public function getEmailTaken()
    {
      return $this->emailTaken;
    }

    /**
     * @param boolean $emailTaken
     * @return \Torchbox\Thankq\Api\esitWSdoUsernameCheckResult
     */
    public function setEmailTaken($emailTaken)
    {
      $this->emailTaken = $emailTaken;
      return $this;
    }

}
