<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWStradingPostageOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWStradingPostageOption[] $esitWStradingPostageOption
     */
    protected $esitWStradingPostageOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWStradingPostageOption[]
     */
    public function getEsitWStradingPostageOption()
    {
      return $this->esitWStradingPostageOption;
    }

    /**
     * @param esitWStradingPostageOption[] $esitWStradingPostageOption
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWStradingPostageOption
     */
    public function setEsitWStradingPostageOption(array $esitWStradingPostageOption = null)
    {
      $this->esitWStradingPostageOption = $esitWStradingPostageOption;
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
      return isset($this->esitWStradingPostageOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWStradingPostageOption
     */
    public function offsetGet($offset)
    {
      return $this->esitWStradingPostageOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWStradingPostageOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWStradingPostageOption[] = $value;
      } else {
        $this->esitWStradingPostageOption[$offset] = $value;
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
      unset($this->esitWStradingPostageOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWStradingPostageOption Return the current element
     */
    public function current()
    {
      return current($this->esitWStradingPostageOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWStradingPostageOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWStradingPostageOption);
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
      reset($this->esitWStradingPostageOption);
    }

    /**
     * Countable implementation
     *
     * @return esitWStradingPostageOption Return count of elements
     */
    public function count()
    {
      return count($this->esitWStradingPostageOption);
    }

}
