<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSdonateSourceCodeSuggestedDonation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSdonateSourceCodeSuggestedDonation[] $esitWSdonateSourceCodeSuggestedDonation
     */
    protected $esitWSdonateSourceCodeSuggestedDonation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSdonateSourceCodeSuggestedDonation[]
     */
    public function getEsitWSdonateSourceCodeSuggestedDonation()
    {
      return $this->esitWSdonateSourceCodeSuggestedDonation;
    }

    /**
     * @param esitWSdonateSourceCodeSuggestedDonation[] $esitWSdonateSourceCodeSuggestedDonation
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSdonateSourceCodeSuggestedDonation
     */
    public function setEsitWSdonateSourceCodeSuggestedDonation(array $esitWSdonateSourceCodeSuggestedDonation = null)
    {
      $this->esitWSdonateSourceCodeSuggestedDonation = $esitWSdonateSourceCodeSuggestedDonation;
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
      return isset($this->esitWSdonateSourceCodeSuggestedDonation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSdonateSourceCodeSuggestedDonation
     */
    public function offsetGet($offset)
    {
      return $this->esitWSdonateSourceCodeSuggestedDonation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSdonateSourceCodeSuggestedDonation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSdonateSourceCodeSuggestedDonation[] = $value;
      } else {
        $this->esitWSdonateSourceCodeSuggestedDonation[$offset] = $value;
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
      unset($this->esitWSdonateSourceCodeSuggestedDonation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSdonateSourceCodeSuggestedDonation Return the current element
     */
    public function current()
    {
      return current($this->esitWSdonateSourceCodeSuggestedDonation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSdonateSourceCodeSuggestedDonation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSdonateSourceCodeSuggestedDonation);
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
      reset($this->esitWSdonateSourceCodeSuggestedDonation);
    }

    /**
     * Countable implementation
     *
     * @return esitWSdonateSourceCodeSuggestedDonation Return count of elements
     */
    public function count()
    {
      return count($this->esitWSdonateSourceCodeSuggestedDonation);
    }

}
