<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWScontactCommitee implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWScontactCommitee[] $esitWScontactCommitee
     */
    protected $esitWScontactCommitee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWScontactCommitee[]
     */
    public function getEsitWScontactCommitee()
    {
      return $this->esitWScontactCommitee;
    }

    /**
     * @param esitWScontactCommitee[] $esitWScontactCommitee
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWScontactCommitee
     */
    public function setEsitWScontactCommitee(array $esitWScontactCommitee = null)
    {
      $this->esitWScontactCommitee = $esitWScontactCommitee;
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
      return isset($this->esitWScontactCommitee[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWScontactCommitee
     */
    public function offsetGet($offset)
    {
      return $this->esitWScontactCommitee[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWScontactCommitee $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWScontactCommitee[] = $value;
      } else {
        $this->esitWScontactCommitee[$offset] = $value;
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
      unset($this->esitWScontactCommitee[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWScontactCommitee Return the current element
     */
    public function current()
    {
      return current($this->esitWScontactCommitee);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWScontactCommitee);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWScontactCommitee);
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
      reset($this->esitWScontactCommitee);
    }

    /**
     * Countable implementation
     *
     * @return esitWScontactCommitee Return count of elements
     */
    public function count()
    {
      return count($this->esitWScontactCommitee);
    }

}
