<?php

namespace Torchbox\Thankq\Api;

class esitWSdoEventLookupEventResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSevent $events
     */
    protected $events = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSevent
     */
    public function getEvents()
    {
      return $this->events;
    }

    /**
     * @param ArrayOfEsitWSevent $events
     * @return \Torchbox\Thankq\Api\esitWSdoEventLookupEventResult
     */
    public function setEvents($events)
    {
      $this->events = $events;
      return $this;
    }

}
