<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWScontactCommiteeMember implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWScontactCommiteeMember[] $esitWScontactCommiteeMember
     */
    protected $esitWScontactCommiteeMember = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWScontactCommiteeMember[]
     */
    public function getEsitWScontactCommiteeMember()
    {
      return $this->esitWScontactCommiteeMember;
    }

    /**
     * @param esitWScontactCommiteeMember[] $esitWScontactCommiteeMember
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWScontactCommiteeMember
     */
    public function setEsitWScontactCommiteeMember(array $esitWScontactCommiteeMember = null)
    {
      $this->esitWScontactCommiteeMember = $esitWScontactCommiteeMember;
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
      return isset($this->esitWScontactCommiteeMember[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWScontactCommiteeMember
     */
    public function offsetGet($offset)
    {
      return $this->esitWScontactCommiteeMember[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWScontactCommiteeMember $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWScontactCommiteeMember[] = $value;
      } else {
        $this->esitWScontactCommiteeMember[$offset] = $value;
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
      unset($this->esitWScontactCommiteeMember[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWScontactCommiteeMember Return the current element
     */
    public function current()
    {
      return current($this->esitWScontactCommiteeMember);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWScontactCommiteeMember);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWScontactCommiteeMember);
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
      reset($this->esitWScontactCommiteeMember);
    }

    /**
     * Countable implementation
     *
     * @return esitWScontactCommiteeMember Return count of elements
     */
    public function count()
    {
      return count($this->esitWScontactCommiteeMember);
    }

}
