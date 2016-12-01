<?php

namespace Torchbox\Thankq\Api;

class esitWSdestinationCode extends baseDataType
{

    /**
     * @var string $destinationCode
     */
    protected $destinationCode = null;

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
    public function getDestinationCode()
    {
      return $this->destinationCode;
    }

    /**
     * @param string $destinationCode
     * @return \Torchbox\Thankq\Api\esitWSdestinationCode
     */
    public function setDestinationCode($destinationCode)
    {
      $this->destinationCode = $destinationCode;
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
     * @return \Torchbox\Thankq\Api\esitWSdestinationCode
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
