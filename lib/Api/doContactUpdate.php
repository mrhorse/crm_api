<?php

namespace Torchbox\Thankq\Api;

class doContactUpdate
{

    /**
     * @var esitWSdoContactUpdateArgument $doContactUpdateArgument
     */
    protected $doContactUpdateArgument = null;

    /**
     * @param esitWSdoContactUpdateArgument $doContactUpdateArgument
     */
    public function __construct($doContactUpdateArgument)
    {
      $this->doContactUpdateArgument = $doContactUpdateArgument;
    }

    /**
     * @return esitWSdoContactUpdateArgument
     */
    public function getDoContactUpdateArgument()
    {
      return $this->doContactUpdateArgument;
    }

    /**
     * @param esitWSdoContactUpdateArgument $doContactUpdateArgument
     * @return \Torchbox\Thankq\Api\doContactUpdate
     */
    public function setDoContactUpdateArgument($doContactUpdateArgument)
    {
      $this->doContactUpdateArgument = $doContactUpdateArgument;
      return $this;
    }

}
