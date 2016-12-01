<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWStradingCoreProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWStradingCoreProduct[] $esitWStradingCoreProduct
     */
    protected $esitWStradingCoreProduct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWStradingCoreProduct[]
     */
    public function getEsitWStradingCoreProduct()
    {
      return $this->esitWStradingCoreProduct;
    }

    /**
     * @param esitWStradingCoreProduct[] $esitWStradingCoreProduct
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWStradingCoreProduct
     */
    public function setEsitWStradingCoreProduct(array $esitWStradingCoreProduct = null)
    {
      $this->esitWStradingCoreProduct = $esitWStradingCoreProduct;
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
      return isset($this->esitWStradingCoreProduct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWStradingCoreProduct
     */
    public function offsetGet($offset)
    {
      return $this->esitWStradingCoreProduct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWStradingCoreProduct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWStradingCoreProduct[] = $value;
      } else {
        $this->esitWStradingCoreProduct[$offset] = $value;
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
      unset($this->esitWStradingCoreProduct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWStradingCoreProduct Return the current element
     */
    public function current()
    {
      return current($this->esitWStradingCoreProduct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWStradingCoreProduct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWStradingCoreProduct);
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
      reset($this->esitWStradingCoreProduct);
    }

    /**
     * Countable implementation
     *
     * @return esitWStradingCoreProduct Return count of elements
     */
    public function count()
    {
      return count($this->esitWStradingCoreProduct);
    }

}
