<?php

namespace Torchbox\Thankq\Api;

class esitWSGiftAid extends baseDataType
{

    /**
     * @var string $declarationID
     */
    protected $declarationID = null;

    /**
     * @var \DateTime $dateOfDeclaration
     */
    protected $dateOfDeclaration = null;

    /**
     * @var \DateTime $effectiveFromDate
     */
    protected $effectiveFromDate = null;

    /**
     * @var \DateTime $effectiveToDate
     */
    protected $effectiveToDate = null;

    /**
     * @param \DateTime $dateOfDeclaration
     * @param \DateTime $effectiveFromDate
     */
    public function __construct(\DateTime $dateOfDeclaration, \DateTime $effectiveFromDate)
    {
      $this->dateOfDeclaration = $dateOfDeclaration->format(\DateTime::ATOM);
      $this->effectiveFromDate = $effectiveFromDate->format(\DateTime::ATOM);
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
     * @return \Torchbox\Thankq\Api\esitWSGiftAid
     */
    public function setDeclarationID($declarationID)
    {
      $this->declarationID = $declarationID;
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
     * @return \Torchbox\Thankq\Api\esitWSGiftAid
     */
    public function setDateOfDeclaration(\DateTime $dateOfDeclaration)
    {
      $this->dateOfDeclaration = $dateOfDeclaration->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveFromDate()
    {
      if ($this->effectiveFromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->effectiveFromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $effectiveFromDate
     * @return \Torchbox\Thankq\Api\esitWSGiftAid
     */
    public function setEffectiveFromDate(\DateTime $effectiveFromDate)
    {
      $this->effectiveFromDate = $effectiveFromDate->format(\DateTime::ATOM);
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
     * @return \Torchbox\Thankq\Api\esitWSGiftAid
     */
    public function setEffectiveToDate(\DateTime $effectiveToDate = null)
    {
      if ($effectiveToDate == null) {
       $this->effectiveToDate = null;
      } else {
        $this->effectiveToDate = $effectiveToDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
