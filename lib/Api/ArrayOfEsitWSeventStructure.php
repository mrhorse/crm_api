<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSeventStructure implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSeventStructure[] $esitWSeventStructure
     */
    protected $esitWSeventStructure = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSeventStructure[]
     */
    public function getEsitWSeventStructure()
    {
      return $this->esitWSeventStructure;
    }

    /**
     * @param esitWSeventStructure[] $esitWSeventStructure
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSeventStructure
     */
    public function setEsitWSeventStructure(array $esitWSeventStructure = null)
    {
      $this->esitWSeventStructure = $esitWSeventStructure;
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
      return isset($this->esitWSeventStructure[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSeventStructure
     */
    public function offsetGet($offset)
    {
      return $this->esitWSeventStructure[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSeventStructure $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSeventStructure[] = $value;
      } else {
        $this->esitWSeventStructure[$offset] = $value;
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
      unset($this->esitWSeventStructure[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSeventStructure Return the current element
     */
    public function current()
    {
      return current($this->esitWSeventStructure);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSeventStructure);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSeventStructure);
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
      reset($this->esitWSeventStructure);
    }

    /**
     * Countable implementation
     *
     * @return esitWSeventStructure Return count of elements
     */
    public function count()
    {
      return count($this->esitWSeventStructure);
    }

}
