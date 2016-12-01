<?php

namespace Torchbox\Thankq\Api;

class doGiftAidGetResponse
{

    /**
     * @var esitWSdoGiftAidGetResult $doGiftAidGetResult
     */
    protected $doGiftAidGetResult = null;

    /**
     * @param esitWSdoGiftAidGetResult $doGiftAidGetResult
     */
    public function __construct($doGiftAidGetResult)
    {
      $this->doGiftAidGetResult = $doGiftAidGetResult;
    }

    /**
     * @return esitWSdoGiftAidGetResult
     */
    public function getDoGiftAidGetResult()
    {
      return $this->doGiftAidGetResult;
    }

    /**
     * @param esitWSdoGiftAidGetResult $doGiftAidGetResult
     * @return \Torchbox\Thankq\Api\doGiftAidGetResponse
     */
    public function setDoGiftAidGetResult($doGiftAidGetResult)
    {
      $this->doGiftAidGetResult = $doGiftAidGetResult;
      return $this;
    }

}
