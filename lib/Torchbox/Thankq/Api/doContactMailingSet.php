<?php

namespace Torchbox\Thankq\Api;

class doContactMailingSet
{

    /**
     * @var esitWSdoContactMailingSetArgument $doContactMailingSetArgument
     */
    protected $doContactMailingSetArgument = null;

    /**
     * @param esitWSdoContactMailingSetArgument $doContactMailingSetArgument
     */
    public function __construct($doContactMailingSetArgument)
    {
      $this->doContactMailingSetArgument = $doContactMailingSetArgument;
    }

    /**
     * @return esitWSdoContactMailingSetArgument
     */
    public function getDoContactMailingSetArgument()
    {
      return $this->doContactMailingSetArgument;
    }

    /**
     * @param esitWSdoContactMailingSetArgument $doContactMailingSetArgument
     * @return \Torchbox\Thankq\Api\doContactMailingSet
     */
    public function setDoContactMailingSetArgument($doContactMailingSetArgument)
    {
      $this->doContactMailingSetArgument = $doContactMailingSetArgument;
      return $this;
    }

}
