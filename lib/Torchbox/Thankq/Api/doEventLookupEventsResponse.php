<?php

namespace Torchbox\Thankq\Api;

class doEventLookupEventsResponse
{

    /**
     * @var esitWSdoEventLookupEventResult $doEventLookupEventsResult
     */
    protected $doEventLookupEventsResult = null;

    /**
     * @param esitWSdoEventLookupEventResult $doEventLookupEventsResult
     */
    public function __construct($doEventLookupEventsResult)
    {
      $this->doEventLookupEventsResult = $doEventLookupEventsResult;
    }

    /**
     * @return esitWSdoEventLookupEventResult
     */
    public function getDoEventLookupEventsResult()
    {
      return $this->doEventLookupEventsResult;
    }

    /**
     * @param esitWSdoEventLookupEventResult $doEventLookupEventsResult
     * @return \Torchbox\Thankq\Api\doEventLookupEventsResponse
     */
    public function setDoEventLookupEventsResult($doEventLookupEventsResult)
    {
      $this->doEventLookupEventsResult = $doEventLookupEventsResult;
      return $this;
    }

}
