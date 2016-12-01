<?php

namespace Torchbox\Thankq\Api;

class doEventPublicInsert
{

    /**
     * @var esitWSdoEventInsertBookingArgument $doEventInsertBookingArgument
     */
    protected $doEventInsertBookingArgument = null;

    /**
     * @param esitWSdoEventInsertBookingArgument $doEventInsertBookingArgument
     */
    public function __construct($doEventInsertBookingArgument)
    {
      $this->doEventInsertBookingArgument = $doEventInsertBookingArgument;
    }

    /**
     * @return esitWSdoEventInsertBookingArgument
     */
    public function getDoEventInsertBookingArgument()
    {
      return $this->doEventInsertBookingArgument;
    }

    /**
     * @param esitWSdoEventInsertBookingArgument $doEventInsertBookingArgument
     * @return \Torchbox\Thankq\Api\doEventPublicInsert
     */
    public function setDoEventInsertBookingArgument($doEventInsertBookingArgument)
    {
      $this->doEventInsertBookingArgument = $doEventInsertBookingArgument;
      return $this;
    }

}
