<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSlookup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSlookup[] $esitWSlookup
     */
    protected $esitWSlookup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSlookup[]
     */
    public function getEsitWSlookup()
    {
      return $this->esitWSlookup;
    }

    /**
     * @param esitWSlookup[] $esitWSlookup
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSlookup
     */
    public function setEsitWSlookup(array $esitWSlookup = null)
    {
      $this->esitWSlookup = $esitWSlookup;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check_is_integer for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->esitWSlookup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSlookup
     */
    public function offsetGet($offset)
    {
      return $this->esitWSlookup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSlookup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSlookup[] = $value;
      } else {
        $this->esitWSlookup[$offset] = $value;
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
      unset($this->esitWSlookup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSlookup Return the current element
     */
    public function current()
    {
      return current($this->esitWSlookup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSlookup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSlookup);
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
      reset($this->esitWSlookup);
    }

    /**
     * Countable implementation
     *
     * @return esitWSlookup Return count of elements
     */
    public function count()
    {
      return count($this->esitWSlookup);
    }

}
