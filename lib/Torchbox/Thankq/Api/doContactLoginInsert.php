<?php

namespace Torchbox\Thankq\Api;

class doContactLoginInsert
{

    /**
     * @var esitWSdoContactLoginInsertArgument $doContactLoginInsertArgument
     */
    protected $doContactLoginInsertArgument = null;

    /**
     * @param esitWSdoContactLoginInsertArgument $doContactLoginInsertArgument
     */
    public function __construct($doContactLoginInsertArgument)
    {
      $this->doContactLoginInsertArgument = $doContactLoginInsertArgument;
    }

    /**
     * @return esitWSdoContactLoginInsertArgument
     */
    public function getDoContactLoginInsertArgument()
    {
      return $this->doContactLoginInsertArgument;
    }

    /**
     * @param esitWSdoContactLoginInsertArgument $doContactLoginInsertArgument
     * @return \Torchbox\Thankq\Api\doContactLoginInsert
     */
    public function setDoContactLoginInsertArgument($doContactLoginInsertArgument)
    {
      $this->doContactLoginInsertArgument = $doContactLoginInsertArgument;
      return $this;
    }

}
