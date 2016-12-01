<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSeventBookingAttendee implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSeventBookingAttendee[] $esitWSeventBookingAttendee
     */
    protected $esitWSeventBookingAttendee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSeventBookingAttendee[]
     */
    public function getEsitWSeventBookingAttendee()
    {
      return $this->esitWSeventBookingAttendee;
    }

    /**
     * @param esitWSeventBookingAttendee[] $esitWSeventBookingAttendee
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSeventBookingAttendee
     */
    public function setEsitWSeventBookingAttendee(array $esitWSeventBookingAttendee = null)
    {
      $this->esitWSeventBookingAttendee = $esitWSeventBookingAttendee;
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
      return isset($this->esitWSeventBookingAttendee[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSeventBookingAttendee
     */
    public function offsetGet($offset)
    {
      return $this->esitWSeventBookingAttendee[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSeventBookingAttendee $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSeventBookingAttendee[] = $value;
      } else {
        $this->esitWSeventBookingAttendee[$offset] = $value;
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
      unset($this->esitWSeventBookingAttendee[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSeventBookingAttendee Return the current element
     */
    public function current()
    {
      return current($this->esitWSeventBookingAttendee);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSeventBookingAttendee);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSeventBookingAttendee);
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
      reset($this->esitWSeventBookingAttendee);
    }

    /**
     * Countable implementation
     *
     * @return esitWSeventBookingAttendee Return count of elements
     */
    public function count()
    {
      return count($this->esitWSeventBookingAttendee);
    }

}
