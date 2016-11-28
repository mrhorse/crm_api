<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSdonateSourceCode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSdonateSourceCode[] $esitWSdonateSourceCode
     */
    protected $esitWSdonateSourceCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSdonateSourceCode[]
     */
    public function getEsitWSdonateSourceCode()
    {
      return $this->esitWSdonateSourceCode;
    }

    /**
     * @param esitWSdonateSourceCode[] $esitWSdonateSourceCode
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSdonateSourceCode
     */
    public function setEsitWSdonateSourceCode(array $esitWSdonateSourceCode = null)
    {
      $this->esitWSdonateSourceCode = $esitWSdonateSourceCode;
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
      return isset($this->esitWSdonateSourceCode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSdonateSourceCode
     */
    public function offsetGet($offset)
    {
      return $this->esitWSdonateSourceCode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSdonateSourceCode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSdonateSourceCode[] = $value;
      } else {
        $this->esitWSdonateSourceCode[$offset] = $value;
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
      unset($this->esitWSdonateSourceCode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSdonateSourceCode Return the current element
     */
    public function current()
    {
      return current($this->esitWSdonateSourceCode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSdonateSourceCode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSdonateSourceCode);
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
      reset($this->esitWSdonateSourceCode);
    }

    /**
     * Countable implementation
     *
     * @return esitWSdonateSourceCode Return count of elements
     */
    public function count()
    {
      return count($this->esitWSdonateSourceCode);
    }

}
