<?php

namespace Torchbox\Thankq\Api;

class esitWSrecordModified extends baseDataType
{

    /**
     * @var \DateTime $modifiedFrom
     */
    protected $modifiedFrom = null;

    /**
     * @var \DateTime $modifiedTo
     */
    protected $modifiedTo = null;

    /**
     * @var \DateTime $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var \DateTime $createdTo
     */
    protected $createdTo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getModifiedFrom()
    {
      if ($this->modifiedFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->modifiedFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $modifiedFrom
     * @return \Torchbox\Thankq\Api\esitWSrecordModified
     */
    public function setModifiedFrom(\DateTime $modifiedFrom = null)
    {
      if ($modifiedFrom == null) {
       $this->modifiedFrom = null;
      } else {
        $this->modifiedFrom = $modifiedFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedTo()
    {
      if ($this->modifiedTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->modifiedTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $modifiedTo
     * @return \Torchbox\Thankq\Api\esitWSrecordModified
     */
    public function setModifiedTo(\DateTime $modifiedTo = null)
    {
      if ($modifiedTo == null) {
       $this->modifiedTo = null;
      } else {
        $this->modifiedTo = $modifiedTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedFrom()
    {
      if ($this->createdFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdFrom
     * @return \Torchbox\Thankq\Api\esitWSrecordModified
     */
    public function setCreatedFrom(\DateTime $createdFrom = null)
    {
      if ($createdFrom == null) {
       $this->createdFrom = null;
      } else {
        $this->createdFrom = $createdFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTo()
    {
      if ($this->createdTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdTo
     * @return \Torchbox\Thankq\Api\esitWSrecordModified
     */
    public function setCreatedTo(\DateTime $createdTo = null)
    {
      if ($createdTo == null) {
       $this->createdTo = null;
      } else {
        $this->createdTo = $createdTo->format(\DateTime::ATOM);
      }
      return $this;
    }

}
