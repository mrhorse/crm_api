<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSpledgeSourceCode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSpledgeSourceCode[] $esitWSpledgeSourceCode
     */
    protected $esitWSpledgeSourceCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSpledgeSourceCode[]
     */
    public function getEsitWSpledgeSourceCode()
    {
      return $this->esitWSpledgeSourceCode;
    }

    /**
     * @param esitWSpledgeSourceCode[] $esitWSpledgeSourceCode
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSpledgeSourceCode
     */
    public function setEsitWSpledgeSourceCode(array $esitWSpledgeSourceCode = null)
    {
      $this->esitWSpledgeSourceCode = $esitWSpledgeSourceCode;
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
      return isset($this->esitWSpledgeSourceCode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSpledgeSourceCode
     */
    public function offsetGet($offset)
    {
      return $this->esitWSpledgeSourceCode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSpledgeSourceCode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSpledgeSourceCode[] = $value;
      } else {
        $this->esitWSpledgeSourceCode[$offset] = $value;
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
      unset($this->esitWSpledgeSourceCode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSpledgeSourceCode Return the current element
     */
    public function current()
    {
      return current($this->esitWSpledgeSourceCode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSpledgeSourceCode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSpledgeSourceCode);
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
      reset($this->esitWSpledgeSourceCode);
    }

    /**
     * Countable implementation
     *
     * @return esitWSpledgeSourceCode Return count of elements
     */
    public function count()
    {
      return count($this->esitWSpledgeSourceCode);
    }

}
