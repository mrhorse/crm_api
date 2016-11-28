<?php

namespace Torchbox\Thankq\Api;

class doContactSearch
{

    /**
     * @var esitWSdoContactSearchArgument $doContactSearchArgument
     */
    protected $doContactSearchArgument = null;

    /**
     * @param esitWSdoContactSearchArgument $doContactSearchArgument
     */
    public function __construct($doContactSearchArgument)
    {
      $this->doContactSearchArgument = $doContactSearchArgument;
    }

    /**
     * @return esitWSdoContactSearchArgument
     */
    public function getDoContactSearchArgument()
    {
      return $this->doContactSearchArgument;
    }

    /**
     * @param esitWSdoContactSearchArgument $doContactSearchArgument
     * @return \Torchbox\Thankq\Api\doContactSearch
     */
    public function setDoContactSearchArgument($doContactSearchArgument)
    {
      $this->doContactSearchArgument = $doContactSearchArgument;
      return $this;
    }

}
