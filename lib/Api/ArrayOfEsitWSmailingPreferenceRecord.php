<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSmailingPreferenceRecord implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSmailingPreferenceRecord[] $esitWSmailingPreferenceRecord
     */
    protected $esitWSmailingPreferenceRecord = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSmailingPreferenceRecord[]
     */
    public function getEsitWSmailingPreferenceRecord()
    {
      return $this->esitWSmailingPreferenceRecord;
    }

    /**
     * @param esitWSmailingPreferenceRecord[] $esitWSmailingPreferenceRecord
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSmailingPreferenceRecord
     */
    public function setEsitWSmailingPreferenceRecord(array $esitWSmailingPreferenceRecord = null)
    {
      $this->esitWSmailingPreferenceRecord = $esitWSmailingPreferenceRecord;
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
      return isset($this->esitWSmailingPreferenceRecord[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSmailingPreferenceRecord
     */
    public function offsetGet($offset)
    {
      return $this->esitWSmailingPreferenceRecord[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSmailingPreferenceRecord $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSmailingPreferenceRecord[] = $value;
      } else {
        $this->esitWSmailingPreferenceRecord[$offset] = $value;
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
      unset($this->esitWSmailingPreferenceRecord[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSmailingPreferenceRecord Return the current element
     */
    public function current()
    {
      return current($this->esitWSmailingPreferenceRecord);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSmailingPreferenceRecord);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSmailingPreferenceRecord);
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
      reset($this->esitWSmailingPreferenceRecord);
    }

    /**
     * Countable implementation
     *
     * @return esitWSmailingPreferenceRecord Return count of elements
     */
    public function count()
    {
      return count($this->esitWSmailingPreferenceRecord);
    }

}
