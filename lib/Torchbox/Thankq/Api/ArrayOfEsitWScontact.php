<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWScontact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWScontact[] $esitWScontact
     */
    protected $esitWScontact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWScontact[]
     */
    public function getEsitWScontact()
    {
      return $this->esitWScontact;
    }

    /**
     * @param esitWScontact[] $esitWScontact
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWScontact
     */
    public function setEsitWScontact(array $esitWScontact = null)
    {
      $this->esitWScontact = $esitWScontact;
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
      return isset($this->esitWScontact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWScontact
     */
    public function offsetGet($offset)
    {
      return $this->esitWScontact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWScontact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWScontact[] = $value;
      } else {
        $this->esitWScontact[$offset] = $value;
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
      unset($this->esitWScontact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWScontact Return the current element
     */
    public function current()
    {
      return current($this->esitWScontact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWScontact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWScontact);
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
      reset($this->esitWScontact);
    }

    /**
     * Countable implementation
     *
     * @return esitWScontact Return count of elements
     */
    public function count()
    {
      return count($this->esitWScontact);
    }

}
