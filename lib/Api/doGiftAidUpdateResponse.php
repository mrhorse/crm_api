<?php

namespace Torchbox\Thankq\Api;

class doGiftAidUpdateResponse
{

    /**
     * @var boolean $doGiftAidUpdateResult
     */
    protected $doGiftAidUpdateResult = null;

    /**
     * @param boolean $doGiftAidUpdateResult
     */
    public function __construct($doGiftAidUpdateResult)
    {
      $this->doGiftAidUpdateResult = $doGiftAidUpdateResult;
    }

    /**
     * @return boolean
     */
    public function getDoGiftAidUpdateResult()
    {
      return $this->doGiftAidUpdateResult;
    }

    /**
     * @param boolean $doGiftAidUpdateResult
     * @return \Torchbox\Thankq\Api\doGiftAidUpdateResponse
     */
    public function setDoGiftAidUpdateResult($doGiftAidUpdateResult)
    {
      $this->doGiftAidUpdateResult = $doGiftAidUpdateResult;
      return $this;
    }

}
