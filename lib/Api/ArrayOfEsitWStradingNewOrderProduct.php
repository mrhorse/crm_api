<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWStradingNewOrderProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWStradingNewOrderProduct[] $esitWStradingNewOrderProduct
     */
    protected $esitWStradingNewOrderProduct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWStradingNewOrderProduct[]
     */
    public function getEsitWStradingNewOrderProduct()
    {
      return $this->esitWStradingNewOrderProduct;
    }

    /**
     * @param esitWStradingNewOrderProduct[] $esitWStradingNewOrderProduct
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWStradingNewOrderProduct
     */
    public function setEsitWStradingNewOrderProduct(array $esitWStradingNewOrderProduct = null)
    {
      $this->esitWStradingNewOrderProduct = $esitWStradingNewOrderProduct;
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
      return isset($this->esitWStradingNewOrderProduct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWStradingNewOrderProduct
     */
    public function offsetGet($offset)
    {
      return $this->esitWStradingNewOrderProduct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWStradingNewOrderProduct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWStradingNewOrderProduct[] = $value;
      } else {
        $this->esitWStradingNewOrderProduct[$offset] = $value;
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
      unset($this->esitWStradingNewOrderProduct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWStradingNewOrderProduct Return the current element
     */
    public function current()
    {
      return current($this->esitWStradingNewOrderProduct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWStradingNewOrderProduct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWStradingNewOrderProduct);
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
      reset($this->esitWStradingNewOrderProduct);
    }

    /**
     * Countable implementation
     *
     * @return esitWStradingNewOrderProduct Return count of elements
     */
    public function count()
    {
      return count($this->esitWStradingNewOrderProduct);
    }

}
