<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSGroupContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSGroupContact[] $esitWSGroupContact
     */
    protected $esitWSGroupContact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSGroupContact[]
     */
    public function getEsitWSGroupContact()
    {
      return $this->esitWSGroupContact;
    }

    /**
     * @param esitWSGroupContact[] $esitWSGroupContact
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSGroupContact
     */
    public function setEsitWSGroupContact(array $esitWSGroupContact = null)
    {
      $this->esitWSGroupContact = $esitWSGroupContact;
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
      return isset($this->esitWSGroupContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSGroupContact
     */
    public function offsetGet($offset)
    {
      return $this->esitWSGroupContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSGroupContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSGroupContact[] = $value;
      } else {
        $this->esitWSGroupContact[$offset] = $value;
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
      unset($this->esitWSGroupContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSGroupContact Return the current element
     */
    public function current()
    {
      return current($this->esitWSGroupContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSGroupContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSGroupContact);
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
      reset($this->esitWSGroupContact);
    }

    /**
     * Countable implementation
     *
     * @return esitWSGroupContact Return count of elements
     */
    public function count()
    {
      return count($this->esitWSGroupContact);
    }

}
