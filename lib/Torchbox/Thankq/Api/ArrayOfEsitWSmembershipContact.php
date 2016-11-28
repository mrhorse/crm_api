<?php

namespace Torchbox\Thankq\Api;

class ArrayOfEsitWSmembershipContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var esitWSmembershipContact[] $esitWSmembershipContact
     */
    protected $esitWSmembershipContact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSmembershipContact[]
     */
    public function getEsitWSmembershipContact()
    {
      return $this->esitWSmembershipContact;
    }

    /**
     * @param esitWSmembershipContact[] $esitWSmembershipContact
     * @return \Torchbox\Thankq\Api\ArrayOfEsitWSmembershipContact
     */
    public function setEsitWSmembershipContact(array $esitWSmembershipContact = null)
    {
      $this->esitWSmembershipContact = $esitWSmembershipContact;
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
      return isset($this->esitWSmembershipContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return esitWSmembershipContact
     */
    public function offsetGet($offset)
    {
      return $this->esitWSmembershipContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param esitWSmembershipContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->esitWSmembershipContact[] = $value;
      } else {
        $this->esitWSmembershipContact[$offset] = $value;
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
      unset($this->esitWSmembershipContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return esitWSmembershipContact Return the current element
     */
    public function current()
    {
      return current($this->esitWSmembershipContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->esitWSmembershipContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->esitWSmembershipContact);
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
      reset($this->esitWSmembershipContact);
    }

    /**
     * Countable implementation
     *
     * @return esitWSmembershipContact Return count of elements
     */
    public function count()
    {
      return count($this->esitWSmembershipContact);
    }

}
