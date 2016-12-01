<?php

namespace Torchbox\Thankq\Api;

class esitWStradingPostageOption extends baseDataType
{

    /**
     * @var string $postageOption
     */
    protected $postageOption = null;

    /**
     * @var float $postageCost
     */
    protected $postageCost = null;

    /**
     * @var string $postageDescription
     */
    protected $postageDescription = null;

    /**
     * @param float $postageCost
     */
    public function __construct($postageCost)
    {
      $this->postageCost = $postageCost;
    }

    /**
     * @return string
     */
    public function getPostageOption()
    {
      return $this->postageOption;
    }

    /**
     * @param string $postageOption
     * @return \Torchbox\Thankq\Api\esitWStradingPostageOption
     */
    public function setPostageOption($postageOption)
    {
      $this->postageOption = $postageOption;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostageCost()
    {
      return $this->postageCost;
    }

    /**
     * @param float $postageCost
     * @return \Torchbox\Thankq\Api\esitWStradingPostageOption
     */
    public function setPostageCost($postageCost)
    {
      $this->postageCost = $postageCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostageDescription()
    {
      return $this->postageDescription;
    }

    /**
     * @param string $postageDescription
     * @return \Torchbox\Thankq\Api\esitWStradingPostageOption
     */
    public function setPostageDescription($postageDescription)
    {
      $this->postageDescription = $postageDescription;
      return $this;
    }

}
