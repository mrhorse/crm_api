<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSGroup[] $esitWSGroup
     */
    protected $esitWSGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSGroup[]
     */
    public function getEsitWSGroup()
    {
      return $this->esitWSGroup;
    }

    /**
     * @param esitWSGroup[] $esitWSGroup
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSGroup
     */
    public function setEsitWSGroup(array $esitWSGroup = null)
    {
      $this->esitWSGroup = $esitWSGroup;
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
      return isset($this->esitWSGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSGroup
     */
    public function offsetGet($offset)
    {
      return $this->esitWSGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSGroup[] = $value;
      } else {
        $this->esitWSGroup[$offset] = $value;
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
      unset($this->esitWSGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSGroup Return the current element
     */
    public function current()
    {
      return current($this->esitWSGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSGroup);
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
      reset($this->esitWSGroup);
    }

    /**
     * Countable implementation
     *
     * @return esitWSGroup Return count of elements
     */
    public function count()
    {
      return count($this->esitWSGroup);
    }

}
