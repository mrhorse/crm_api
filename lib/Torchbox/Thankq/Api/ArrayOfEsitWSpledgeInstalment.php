<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSpledgeInstalment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSpledgeInstalment[] $esitWSpledgeInstalment
     */
    protected $esitWSpledgeInstalment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSpledgeInstalment[]
     */
    public function getEsitWSpledgeInstalment()
    {
      return $this->esitWSpledgeInstalment;
    }

    /**
     * @param esitWSpledgeInstalment[] $esitWSpledgeInstalment
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSpledgeInstalment
     */
    public function setEsitWSpledgeInstalment(array $esitWSpledgeInstalment = null)
    {
      $this->esitWSpledgeInstalment = $esitWSpledgeInstalment;
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
      return isset($this->esitWSpledgeInstalment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSpledgeInstalment
     */
    public function offsetGet($offset)
    {
      return $this->esitWSpledgeInstalment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSpledgeInstalment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSpledgeInstalment[] = $value;
      } else {
        $this->esitWSpledgeInstalment[$offset] = $value;
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
      unset($this->esitWSpledgeInstalment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSpledgeInstalment Return the current element
     */
    public function current()
    {
      return current($this->esitWSpledgeInstalment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSpledgeInstalment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSpledgeInstalment);
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
      reset($this->esitWSpledgeInstalment);
    }

    /**
     * Countable implementation
     *
     * @return esitWSpledgeInstalment Return count of elements
     */
    public function count()
    {
      return count($this->esitWSpledgeInstalment);
    }

}
