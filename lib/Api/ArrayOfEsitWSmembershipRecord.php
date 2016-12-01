<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSmembershipRecord implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSmembershipRecord[] $esitWSmembershipRecord
     */
    protected $esitWSmembershipRecord = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSmembershipRecord[]
     */
    public function getEsitWSmembershipRecord()
    {
      return $this->esitWSmembershipRecord;
    }

    /**
     * @param esitWSmembershipRecord[] $esitWSmembershipRecord
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSmembershipRecord
     */
    public function setEsitWSmembershipRecord(array $esitWSmembershipRecord = null)
    {
      $this->esitWSmembershipRecord = $esitWSmembershipRecord;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->esitWSmembershipRecord[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSmembershipRecord
     */
    public function offsetGet($offset)
    {
      return $this->esitWSmembershipRecord[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSmembershipRecord $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSmembershipRecord[] = $value;
      } else {
        $this->esitWSmembershipRecord[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->esitWSmembershipRecord[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSmembershipRecord Return the current element
     */
    public function current()
    {
      return current($this->esitWSmembershipRecord);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSmembershipRecord);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSmembershipRecord);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->esitWSmembershipRecord);
    }

    /**
     * Countable implementation
     *
     * @return esitWSmembershipRecord Return count of elements
     */
    public function count()
    {
      return count($this->esitWSmembershipRecord);
    }

}
