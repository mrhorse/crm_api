<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSmembership implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSmembership[] $esitWSmembership
     */
    protected $esitWSmembership = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSmembership[]
     */
    public function getEsitWSmembership()
    {
      return $this->esitWSmembership;
    }

    /**
     * @param esitWSmembership[] $esitWSmembership
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSmembership
     */
    public function setEsitWSmembership(array $esitWSmembership = null)
    {
      $this->esitWSmembership = $esitWSmembership;
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
      return isset($this->esitWSmembership[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSmembership
     */
    public function offsetGet($offset)
    {
      return $this->esitWSmembership[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSmembership $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSmembership[] = $value;
      } else {
        $this->esitWSmembership[$offset] = $value;
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
      unset($this->esitWSmembership[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSmembership Return the current element
     */
    public function current()
    {
      return current($this->esitWSmembership);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSmembership);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSmembership);
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
      reset($this->esitWSmembership);
    }

    /**
     * Countable implementation
     *
     * @return esitWSmembership Return count of elements
     */
    public function count()
    {
      return count($this->esitWSmembership);
    }

}
