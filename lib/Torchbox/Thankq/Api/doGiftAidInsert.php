<?php

namespace Torchbox\Thankq\Api;

class doGiftAidInsert
{

    /**
     * @var esitWSdoGiftAidInsertArgument $doGiftAidInsertArgument
     */
    protected $doGiftAidInsertArgument = null;

    /**
     * @param esitWSdoGiftAidInsertArgument $doGiftAidInsertArgument
     */
    public function __construct($doGiftAidInsertArgument)
    {
      $this->doGiftAidInsertArgument = $doGiftAidInsertArgument;
    }

    /**
     * @return esitWSdoGiftAidInsertArgument
     */
    public function getDoGiftAidInsertArgument()
    {
      return $this->doGiftAidInsertArgument;
    }

    /**
     * @param esitWSdoGiftAidInsertArgument $doGiftAidInsertArgument
     * @return \Torchbox\Thankq\Api\doGiftAidInsert
     */
    public function setDoGiftAidInsertArgument($doGiftAidInsertArgument)
    {
      $this->doGiftAidInsertArgument = $doGiftAidInsertArgument;
      return $this;
    }

}
