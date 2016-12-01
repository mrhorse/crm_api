<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWStradingProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWStradingProduct[] $esitWStradingProduct
     */
    protected $esitWStradingProduct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWStradingProduct[]
     */
    public function getEsitWStradingProduct()
    {
      return $this->esitWStradingProduct;
    }

    /**
     * @param esitWStradingProduct[] $esitWStradingProduct
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWStradingProduct
     */
    public function setEsitWStradingProduct(array $esitWStradingProduct = null)
    {
      $this->esitWStradingProduct = $esitWStradingProduct;
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
      return isset($this->esitWStradingProduct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWStradingProduct
     */
    public function offsetGet($offset)
    {
      return $this->esitWStradingProduct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWStradingProduct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWStradingProduct[] = $value;
      } else {
        $this->esitWStradingProduct[$offset] = $value;
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
      unset($this->esitWStradingProduct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWStradingProduct Return the current element
     */
    public function current()
    {
      return current($this->esitWStradingProduct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWStradingProduct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWStradingProduct);
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
      reset($this->esitWStradingProduct);
    }

    /**
     * Countable implementation
     *
     * @return esitWStradingProduct Return count of elements
     */
    public function count()
    {
      return count($this->esitWStradingProduct);
    }

}
