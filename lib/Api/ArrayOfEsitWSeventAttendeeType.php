<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSeventAttendeeType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSeventAttendeeType[] $esitWSeventAttendeeType
     */
    protected $esitWSeventAttendeeType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSeventAttendeeType[]
     */
    public function getEsitWSeventAttendeeType()
    {
      return $this->esitWSeventAttendeeType;
    }

    /**
     * @param esitWSeventAttendeeType[] $esitWSeventAttendeeType
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSeventAttendeeType
     */
    public function setEsitWSeventAttendeeType(array $esitWSeventAttendeeType = null)
    {
      $this->esitWSeventAttendeeType = $esitWSeventAttendeeType;
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
      return isset($this->esitWSeventAttendeeType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSeventAttendeeType
     */
    public function offsetGet($offset)
    {
      return $this->esitWSeventAttendeeType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSeventAttendeeType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSeventAttendeeType[] = $value;
      } else {
        $this->esitWSeventAttendeeType[$offset] = $value;
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
      unset($this->esitWSeventAttendeeType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSeventAttendeeType Return the current element
     */
    public function current()
    {
      return current($this->esitWSeventAttendeeType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSeventAttendeeType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSeventAttendeeType);
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
      reset($this->esitWSeventAttendeeType);
    }

    /**
     * Countable implementation
     *
     * @return esitWSeventAttendeeType Return count of elements
     */
    public function count()
    {
      return count($this->esitWSeventAttendeeType);
    }

}
