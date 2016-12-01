<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSPaymentRecord implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSPaymentRecord[] $esitWSPaymentRecord
     */
    protected $esitWSPaymentRecord = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSPaymentRecord[]
     */
    public function getEsitWSPaymentRecord()
    {
      return $this->esitWSPaymentRecord;
    }

    /**
     * @param esitWSPaymentRecord[] $esitWSPaymentRecord
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSPaymentRecord
     */
    public function setEsitWSPaymentRecord(array $esitWSPaymentRecord = null)
    {
      $this->esitWSPaymentRecord = $esitWSPaymentRecord;
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
      return isset($this->esitWSPaymentRecord[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSPaymentRecord
     */
    public function offsetGet($offset)
    {
      return $this->esitWSPaymentRecord[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSPaymentRecord $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSPaymentRecord[] = $value;
      } else {
        $this->esitWSPaymentRecord[$offset] = $value;
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
      unset($this->esitWSPaymentRecord[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSPaymentRecord Return the current element
     */
    public function current()
    {
      return current($this->esitWSPaymentRecord);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSPaymentRecord);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSPaymentRecord);
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
      reset($this->esitWSPaymentRecord);
    }

    /**
     * Countable implementation
     *
     * @return esitWSPaymentRecord Return count of elements
     */
    public function count()
    {
      return count($this->esitWSPaymentRecord);
    }

}
