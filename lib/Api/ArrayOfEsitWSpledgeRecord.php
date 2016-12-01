<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSpledgeRecord implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSpledgeRecord[] $esitWSpledgeRecord
     */
    protected $esitWSpledgeRecord = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSpledgeRecord[]
     */
    public function getEsitWSpledgeRecord()
    {
      return $this->esitWSpledgeRecord;
    }

    /**
     * @param esitWSpledgeRecord[] $esitWSpledgeRecord
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSpledgeRecord
     */
    public function setEsitWSpledgeRecord(array $esitWSpledgeRecord = null)
    {
      $this->esitWSpledgeRecord = $esitWSpledgeRecord;
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
      return isset($this->esitWSpledgeRecord[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSpledgeRecord
     */
    public function offsetGet($offset)
    {
      return $this->esitWSpledgeRecord[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSpledgeRecord $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSpledgeRecord[] = $value;
      } else {
        $this->esitWSpledgeRecord[$offset] = $value;
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
      unset($this->esitWSpledgeRecord[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSpledgeRecord Return the current element
     */
    public function current()
    {
      return current($this->esitWSpledgeRecord);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSpledgeRecord);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSpledgeRecord);
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
      reset($this->esitWSpledgeRecord);
    }

    /**
     * Countable implementation
     *
     * @return esitWSpledgeRecord Return count of elements
     */
    public function count()
    {
      return count($this->esitWSpledgeRecord);
    }

}
