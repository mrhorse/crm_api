<?php

namespace Torchbox\Thankq\Api;

class esitWSdoGiftAidUpdateArgument extends baseDataType
{

    /**
     * @var string $declarationID
     */
    protected $declarationID = null;

    /**
     * @var \DateTime $effectiveToDate
     */
    protected $effectiveToDate = null;

    /**
     * @param \DateTime $effectiveToDate
     */
    public function __construct(\DateTime $effectiveToDate)
    {
      $this->effectiveToDate = $effectiveToDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getDeclarationID()
    {
      return $this->declarationID;
    }

    /**
     * @param string $declarationID
     * @return \Torchbox\Thankq\Api\esitWSdoGiftAidUpdateArgument
     */
    public function setDeclarationID($declarationID)
    {
      $this->declarationID = $declarationID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveToDate()
    {
      if ($this->effectiveToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->effectiveToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $effectiveToDate
     * @return \Torchbox\Thankq\Api\esitWSdoGiftAidUpdateArgument
     */
    public function setEffectiveToDate(\DateTime $effectiveToDate)
    {
      $this->effectiveToDate = $effectiveToDate->format(\DateTime::ATOM);
      return $this;
    }

}
