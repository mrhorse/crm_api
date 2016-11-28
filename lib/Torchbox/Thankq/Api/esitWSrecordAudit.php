<?php

namespace Torchbox\Thankq\Api;

class esitWSrecordAudit extends baseDataType
{

    /**
     * @var \DateTime $created
     */
    protected $created = null;

    /**
     * @var string $createdBy
     */
    protected $createdBy = null;

    /**
     * @var \DateTime $modified
     */
    protected $modified = null;

    /**
     * @var string $modifiedBy
     */
    protected $modifiedBy = null;

    /**
     * @param \DateTime $created
     * @param \DateTime $modified
     */
    public function __construct(\DateTime $created, \DateTime $modified)
    {
      $this->created = $created->format(\DateTime::ATOM);
      $this->modified = $modified->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
      if ($this->created == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->created);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $created
     * @return \Torchbox\Thankq\Api\esitWSrecordAudit
     */
    public function setCreated(\DateTime $created)
    {
      $this->created = $created->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return \Torchbox\Thankq\Api\esitWSrecordAudit
     */
    public function setCreatedBy($createdBy)
    {
      $this->createdBy = $createdBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModified()
    {
      if ($this->modified == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->modified);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $modified
     * @return \Torchbox\Thankq\Api\esitWSrecordAudit
     */
    public function setModified(\DateTime $modified)
    {
      $this->modified = $modified->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     * @return \Torchbox\Thankq\Api\esitWSrecordAudit
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
      return $this;
    }

}
