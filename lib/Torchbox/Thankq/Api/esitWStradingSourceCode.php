<?php

namespace Torchbox\Thankq\Api;

class esitWStradingSourceCode extends baseDataType
{

    /**
     * @var string $sourceCode
     */
    protected $sourceCode = null;

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
    public function getSourceCode()
    {
      return $this->sourceCode;
    }

    /**
     * @param string $sourceCode
     * @return \Torchbox\Thankq\Api\esitWStradingSourceCode
     */
    public function setSourceCode($sourceCode)
    {
      $this->sourceCode = $sourceCode;
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
     * @return \Torchbox\Thankq\Api\esitWStradingSourceCode
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
