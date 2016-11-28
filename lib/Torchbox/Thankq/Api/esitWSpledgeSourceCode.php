<?php

namespace Torchbox\Thankq\Api;

class esitWSpledgeSourceCode extends baseDataType
{

    /**
     * @var string $sourcecode
     */
    protected $sourcecode = null;

    /**
     * @var string $description
     */
    protected $description = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSourcecode()
    {
      return $this->sourcecode;
    }

    /**
     * @param string $sourcecode
     * @return \Torchbox\Thankq\Api\esitWSpledgeSourceCode
     */
    public function setSourcecode($sourcecode)
    {
      $this->sourcecode = $sourcecode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Torchbox\Thankq\Api\esitWSpledgeSourceCode
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
