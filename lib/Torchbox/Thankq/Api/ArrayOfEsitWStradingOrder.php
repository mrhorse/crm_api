<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWStradingOrder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWStradingOrder[] $esitWStradingOrder
     */
    protected $esitWStradingOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWStradingOrder[]
     */
    public function getEsitWStradingOrder()
    {
      return $this->esitWStradingOrder;
    }

    /**
     * @param esitWStradingOrder[] $esitWStradingOrder
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWStradingOrder
     */
    public function setEsitWStradingOrder(array $esitWStradingOrder = null)
    {
      $this->esitWStradingOrder = $esitWStradingOrder;
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
      return isset($this->esitWStradingOrder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWStradingOrder
     */
    public function offsetGet($offset)
    {
      return $this->esitWStradingOrder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWStradingOrder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWStradingOrder[] = $value;
      } else {
        $this->esitWStradingOrder[$offset] = $value;
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
      unset($this->esitWStradingOrder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWStradingOrder Return the current element
     */
    public function current()
    {
      return current($this->esitWStradingOrder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWStradingOrder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWStradingOrder);
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
      reset($this->esitWStradingOrder);
    }

    /**
     * Countable implementation
     *
     * @return esitWStradingOrder Return count of elements
     */
    public function count()
    {
      return count($this->esitWStradingOrder);
    }

}
