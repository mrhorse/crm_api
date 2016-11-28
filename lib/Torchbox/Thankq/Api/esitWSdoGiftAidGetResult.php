<?php

namespace Torchbox\Thankq\Api;

class esitWSdoGiftAidGetResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSGiftAid $giftAids
     */
    protected $giftAids = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSGiftAid
     */
    public function getGiftAids()
    {
      return $this->giftAids;
    }

    /**
     * @param ArrayOfEsitWSGiftAid $giftAids
     * @return \Torchbox\Thankq\Api\esitWSdoGiftAidGetResult
     */
    public function setGiftAids($giftAids)
    {
      $this->giftAids = $giftAids;
      return $this;
    }

}
