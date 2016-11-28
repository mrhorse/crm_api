<?php

namespace Torchbox\Thankq\Api;

class doContactCommitteeGet
{

    /**
     * @var esitWSdoContactCommitteeGetArgument $doContactCommitteeGetArgument
     */
    protected $doContactCommitteeGetArgument = null;

    /**
     * @param esitWSdoContactCommitteeGetArgument $doContactCommitteeGetArgument
     */
    public function __construct($doContactCommitteeGetArgument)
    {
      $this->doContactCommitteeGetArgument = $doContactCommitteeGetArgument;
    }

    /**
     * @return esitWSdoContactCommitteeGetArgument
     */
    public function getDoContactCommitteeGetArgument()
    {
      return $this->doContactCommitteeGetArgument;
    }

    /**
     * @param esitWSdoContactCommitteeGetArgument $doContactCommitteeGetArgument
     * @return \Torchbox\Thankq\Api\doContactCommitteeGet
     */
    public function setDoContactCommitteeGetArgument($doContactCommitteeGetArgument)
    {
      $this->doContactCommitteeGetArgument = $doContactCommitteeGetArgument;
      return $this;
    }

}
