<?php

namespace Torchbox\Thankq\Api;

class doGiftAidInsertResponse
{

    /**
     * @var string $doGiftAidInsertResult
     */
    protected $doGiftAidInsertResult = null;

    /**
     * @param string $doGiftAidInsertResult
     */
    public function __construct($doGiftAidInsertResult)
    {
      $this->doGiftAidInsertResult = $doGiftAidInsertResult;
    }

    /**
     * @return string
     */
    public function getDoGiftAidInsertResult()
    {
      return $this->doGiftAidInsertResult;
    }

    /**
     * @param string $doGiftAidInsertResult
     * @return \Torchbox\Thankq\Api\doGiftAidInsertResponse
     */
    public function setDoGiftAidInsertResult($doGiftAidInsertResult)
    {
      $this->doGiftAidInsertResult = $doGiftAidInsertResult;
      return $this;
    }

}
