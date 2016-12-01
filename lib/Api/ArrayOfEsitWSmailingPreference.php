<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSmailingPreference implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSmailingPreference[] $esitWSmailingPreference
     */
    protected $esitWSmailingPreference = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSmailingPreference[]
     */
    public function getEsitWSmailingPreference()
    {
      return $this->esitWSmailingPreference;
    }

    /**
     * @param esitWSmailingPreference[] $esitWSmailingPreference
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSmailingPreference
     */
    public function setEsitWSmailingPreference(array $esitWSmailingPreference = null)
    {
      $this->esitWSmailingPreference = $esitWSmailingPreference;
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
      return isset($this->esitWSmailingPreference[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSmailingPreference
     */
    public function offsetGet($offset)
    {
      return $this->esitWSmailingPreference[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSmailingPreference $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSmailingPreference[] = $value;
      } else {
        $this->esitWSmailingPreference[$offset] = $value;
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
      unset($this->esitWSmailingPreference[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSmailingPreference Return the current element
     */
    public function current()
    {
      return current($this->esitWSmailingPreference);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSmailingPreference);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSmailingPreference);
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
      reset($this->esitWSmailingPreference);
    }

    /**
     * Countable implementation
     *
     * @return esitWSmailingPreference Return count of elements
     */
    public function count()
    {
      return count($this->esitWSmailingPreference);
    }

}
