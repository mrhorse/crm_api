<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSProfile implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSProfile[] $esitWSProfile
     */
    protected $esitWSProfile = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSProfile[]
     */
    public function getEsitWSProfile()
    {
      return $this->esitWSProfile;
    }

    /**
     * @param esitWSProfile[] $esitWSProfile
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSProfile
     */
    public function setEsitWSProfile(array $esitWSProfile = null)
    {
      $this->esitWSProfile = $esitWSProfile;
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
      return isset($this->esitWSProfile[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSProfile
     */
    public function offsetGet($offset)
    {
      return $this->esitWSProfile[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSProfile $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSProfile[] = $value;
      } else {
        $this->esitWSProfile[$offset] = $value;
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
      unset($this->esitWSProfile[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSProfile Return the current element
     */
    public function current()
    {
      return current($this->esitWSProfile);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSProfile);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSProfile);
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
      reset($this->esitWSProfile);
    }

    /**
     * Countable implementation
     *
     * @return esitWSProfile Return count of elements
     */
    public function count()
    {
      return count($this->esitWSProfile);
    }

}
