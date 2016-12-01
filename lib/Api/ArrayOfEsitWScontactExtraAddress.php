<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWScontactExtraAddress implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWScontactExtraAddress[] $esitWScontactExtraAddress
     */
    protected $esitWScontactExtraAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWScontactExtraAddress[]
     */
    public function getEsitWScontactExtraAddress()
    {
      return $this->esitWScontactExtraAddress;
    }

    /**
     * @param esitWScontactExtraAddress[] $esitWScontactExtraAddress
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWScontactExtraAddress
     */
    public function setEsitWScontactExtraAddress(array $esitWScontactExtraAddress = null)
    {
      $this->esitWScontactExtraAddress = $esitWScontactExtraAddress;
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
      return isset($this->esitWScontactExtraAddress[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWScontactExtraAddress
     */
    public function offsetGet($offset)
    {
      return $this->esitWScontactExtraAddress[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWScontactExtraAddress $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWScontactExtraAddress[] = $value;
      } else {
        $this->esitWScontactExtraAddress[$offset] = $value;
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
      unset($this->esitWScontactExtraAddress[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWScontactExtraAddress Return the current element
     */
    public function current()
    {
      return current($this->esitWScontactExtraAddress);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWScontactExtraAddress);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWScontactExtraAddress);
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
      reset($this->esitWScontactExtraAddress);
    }

    /**
     * Countable implementation
     *
     * @return esitWScontactExtraAddress Return count of elements
     */
    public function count()
    {
      return count($this->esitWScontactExtraAddress);
    }

}
