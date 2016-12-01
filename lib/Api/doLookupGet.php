<?php

namespace Torchbox\Thankq\Api;

class doLookupGet
{

    /**
     * @var string $lookupName
     */
    protected $lookupName = null;

    /**
     * @param string $lookupName
     */
    public function __construct($lookupName)
    {
      $this->lookupName = $lookupName;
    }

    /**
     * @return string
     */
    public function getLookupName()
    {
      return $this->lookupName;
    }

    /**
     * @param string $lookupName
     * @return \Torchbox\Thankq\Api\doLookupGet
     */
    public function setLookupName($lookupName)
    {
      $this->lookupName = $lookupName;
      return $this;
    }

}
