<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSGiftAid implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSGiftAid[] $esitWSGiftAid
     */
    protected $esitWSGiftAid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSGiftAid[]
     */
    public function getEsitWSGiftAid()
    {
      return $this->esitWSGiftAid;
    }

    /**
     * @param esitWSGiftAid[] $esitWSGiftAid
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSGiftAid
     */
    public function setEsitWSGiftAid(array $esitWSGiftAid = null)
    {
      $this->esitWSGiftAid = $esitWSGiftAid;
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
      return isset($this->esitWSGiftAid[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSGiftAid
     */
    public function offsetGet($offset)
    {
      return $this->esitWSGiftAid[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSGiftAid $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSGiftAid[] = $value;
      } else {
        $this->esitWSGiftAid[$offset] = $value;
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
      unset($this->esitWSGiftAid[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSGiftAid Return the current element
     */
    public function current()
    {
      return current($this->esitWSGiftAid);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSGiftAid);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSGiftAid);
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
      reset($this->esitWSGiftAid);
    }

    /**
     * Countable implementation
     *
     * @return esitWSGiftAid Return count of elements
     */
    public function count()
    {
      return count($this->esitWSGiftAid);
    }

}
