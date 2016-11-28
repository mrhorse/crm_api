<?php

namespace Torchbox\Thankq\Api;

class esitWSdoGroupGetResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSGroupContact $contacts
     */
    protected $contacts = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSGroupContact
     */
    public function getContacts()
    {
      return $this->contacts;
    }

    /**
     * @param ArrayOfEsitWSGroupContact $contacts
     * @return \Torchbox\Thankq\Api\esitWSdoGroupGetResult
     */
    public function setContacts($contacts)
    {
      $this->contacts = $contacts;
      return $this;
    }

}
