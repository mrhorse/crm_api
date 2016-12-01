<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWStradingOrderProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWStradingOrderProduct[] $esitWStradingOrderProduct
     */
    protected $esitWStradingOrderProduct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWStradingOrderProduct[]
     */
    public function getEsitWStradingOrderProduct()
    {
      return $this->esitWStradingOrderProduct;
    }

    /**
     * @param esitWStradingOrderProduct[] $esitWStradingOrderProduct
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWStradingOrderProduct
     */
    public function setEsitWStradingOrderProduct(array $esitWStradingOrderProduct = null)
    {
      $this->esitWStradingOrderProduct = $esitWStradingOrderProduct;
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
      return isset($this->esitWStradingOrderProduct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWStradingOrderProduct
     */
    public function offsetGet($offset)
    {
      return $this->esitWStradingOrderProduct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWStradingOrderProduct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWStradingOrderProduct[] = $value;
      } else {
        $this->esitWStradingOrderProduct[$offset] = $value;
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
      unset($this->esitWStradingOrderProduct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWStradingOrderProduct Return the current element
     */
    public function current()
    {
      return current($this->esitWStradingOrderProduct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWStradingOrderProduct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWStradingOrderProduct);
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
      reset($this->esitWStradingOrderProduct);
    }

    /**
     * Countable implementation
     *
     * @return esitWStradingOrderProduct Return count of elements
     */
    public function count()
    {
      return count($this->esitWStradingOrderProduct);
    }

}
