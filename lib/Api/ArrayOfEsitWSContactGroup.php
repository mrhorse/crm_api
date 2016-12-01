<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSContactGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSContactGroup[] $esitWSContactGroup
     */
    protected $esitWSContactGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSContactGroup[]
     */
    public function getEsitWSContactGroup()
    {
      return $this->esitWSContactGroup;
    }

    /**
     * @param esitWSContactGroup[] $esitWSContactGroup
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSContactGroup
     */
    public function setEsitWSContactGroup(array $esitWSContactGroup = null)
    {
      $this->esitWSContactGroup = $esitWSContactGroup;
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
      return isset($this->esitWSContactGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSContactGroup
     */
    public function offsetGet($offset)
    {
      return $this->esitWSContactGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSContactGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSContactGroup[] = $value;
      } else {
        $this->esitWSContactGroup[$offset] = $value;
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
      unset($this->esitWSContactGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSContactGroup Return the current element
     */
    public function current()
    {
      return current($this->esitWSContactGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSContactGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSContactGroup);
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
      reset($this->esitWSContactGroup);
    }

    /**
     * Countable implementation
     *
     * @return esitWSContactGroup Return count of elements
     */
    public function count()
    {
      return count($this->esitWSContactGroup);
    }

}
