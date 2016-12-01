<?php

namespace Torchbox\Thankq\Api;

class doGiftAidUpdate
{

    /**
     * @var esitWSdoGiftAidUpdateArgument $doGiftAidUpdateArgument
     */
    protected $doGiftAidUpdateArgument = null;

    /**
     * @param esitWSdoGiftAidUpdateArgument $doGiftAidUpdateArgument
     */
    public function __construct($doGiftAidUpdateArgument)
    {
      $this->doGiftAidUpdateArgument = $doGiftAidUpdateArgument;
    }

    /**
     * @return esitWSdoGiftAidUpdateArgument
     */
    public function getDoGiftAidUpdateArgument()
    {
      return $this->doGiftAidUpdateArgument;
    }

    /**
     * @param esitWSdoGiftAidUpdateArgument $doGiftAidUpdateArgument
     * @return \Torchbox\Thankq\Api\doGiftAidUpdate
     */
    public function setDoGiftAidUpdateArgument($doGiftAidUpdateArgument)
    {
      $this->doGiftAidUpdateArgument = $doGiftAidUpdateArgument;
      return $this;
    }

}
