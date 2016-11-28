<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSGroupSet implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSGroupSet[] $esitWSGroupSet
     */
    protected $esitWSGroupSet = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSGroupSet[]
     */
    public function getEsitWSGroupSet()
    {
      return $this->esitWSGroupSet;
    }

    /**
     * @param esitWSGroupSet[] $esitWSGroupSet
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSGroupSet
     */
    public function setEsitWSGroupSet(array $esitWSGroupSet = null)
    {
      $this->esitWSGroupSet = $esitWSGroupSet;
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
      return isset($this->esitWSGroupSet[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSGroupSet
     */
    public function offsetGet($offset)
    {
      return $this->esitWSGroupSet[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSGroupSet $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSGroupSet[] = $value;
      } else {
        $this->esitWSGroupSet[$offset] = $value;
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
      unset($this->esitWSGroupSet[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSGroupSet Return the current element
     */
    public function current()
    {
      return current($this->esitWSGroupSet);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSGroupSet);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSGroupSet);
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
      reset($this->esitWSGroupSet);
    }

    /**
     * Countable implementation
     *
     * @return esitWSGroupSet Return count of elements
     */
    public function count()
    {
      return count($this->esitWSGroupSet);
    }

}
