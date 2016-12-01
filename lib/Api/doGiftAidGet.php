<?php

namespace Torchbox\Thankq\Api;

class doGiftAidGet
{

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @param string $serialnumber
     */
    public function __construct($serialnumber)
    {
      $this->serialnumber = $serialnumber;
    }

    /**
     * @return string
     */
    public function getSerialnumber()
    {
      return $this->serialnumber;
    }

    /**
     * @param string $serialnumber
     * @return \Torchbox\Thankq\Api\doGiftAidGet
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

}
