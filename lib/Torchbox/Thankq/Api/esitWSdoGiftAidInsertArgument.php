<?php

namespace Torchbox\Thankq\Api;

class esitWSdoGiftAidInsertArgument extends baseDataType
{

    /**
     * @var string $serialnumber
     */
    protected $serialnumber = null;

    /**
     * @var \DateTime $dateOfDeclaration
     */
    protected $dateOfDeclaration = null;

    /**
     * @param \DateTime $dateOfDeclaration
     */
    public function __construct(\DateTime $dateOfDeclaration)
    {
      $this->dateOfDeclaration = $dateOfDeclaration->format(\DateTime::ATOM);
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
     * @return \Torchbox\Thankq\Api\esitWSdoGiftAidInsertArgument
     */
    public function setSerialnumber($serialnumber)
    {
      $this->serialnumber = $serialnumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfDeclaration()
    {
      if ($this->dateOfDeclaration == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateOfDeclaration);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateOfDeclaration
     * @return \Torchbox\Thankq\Api\esitWSdoGiftAidInsertArgument
     */
    public function setDateOfDeclaration(\DateTime $dateOfDeclaration)
    {
      $this->dateOfDeclaration = $dateOfDeclaration->format(\DateTime::ATOM);
      return $this;
    }

}
