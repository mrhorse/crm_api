<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSdoContactSearchResultRecord implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSdoContactSearchResultRecord[] $esitWSdoContactSearchResultRecord
     */
    protected $esitWSdoContactSearchResultRecord = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSdoContactSearchResultRecord[]
     */
    public function getEsitWSdoContactSearchResultRecord()
    {
      return $this->esitWSdoContactSearchResultRecord;
    }

    /**
     * @param esitWSdoContactSearchResultRecord[] $esitWSdoContactSearchResultRecord
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSdoContactSearchResultRecord
     */
    public function setEsitWSdoContactSearchResultRecord(array $esitWSdoContactSearchResultRecord = null)
    {
      $this->esitWSdoContactSearchResultRecord = $esitWSdoContactSearchResultRecord;
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
      return isset($this->esitWSdoContactSearchResultRecord[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSdoContactSearchResultRecord
     */
    public function offsetGet($offset)
    {
      return $this->esitWSdoContactSearchResultRecord[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSdoContactSearchResultRecord $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSdoContactSearchResultRecord[] = $value;
      } else {
        $this->esitWSdoContactSearchResultRecord[$offset] = $value;
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
      unset($this->esitWSdoContactSearchResultRecord[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSdoContactSearchResultRecord Return the current element
     */
    public function current()
    {
      return current($this->esitWSdoContactSearchResultRecord);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSdoContactSearchResultRecord);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSdoContactSearchResultRecord);
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
      reset($this->esitWSdoContactSearchResultRecord);
    }

    /**
     * Countable implementation
     *
     * @return esitWSdoContactSearchResultRecord Return count of elements
     */
    public function count()
    {
      return count($this->esitWSdoContactSearchResultRecord);
    }

}
