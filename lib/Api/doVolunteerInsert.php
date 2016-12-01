<?php

namespace Torchbox\Thankq\Api;

class doVolunteerInsert
{

    /**
     * @var esitWSdoVolunteerInsertArgument $doVolunteerInsertArgument
     */
    protected $doVolunteerInsertArgument = null;

    /**
     * @param esitWSdoVolunteerInsertArgument $doVolunteerInsertArgument
     */
    public function __construct($doVolunteerInsertArgument)
    {
      $this->doVolunteerInsertArgument = $doVolunteerInsertArgument;
    }

    /**
     * @return esitWSdoVolunteerInsertArgument
     */
    public function getDoVolunteerInsertArgument()
    {
      return $this->doVolunteerInsertArgument;
    }

    /**
     * @param esitWSdoVolunteerInsertArgument $doVolunteerInsertArgument
     * @return \Torchbox\Thankq\Api\doVolunteerInsert
     */
    public function setDoVolunteerInsertArgument($doVolunteerInsertArgument)
    {
      $this->doVolunteerInsertArgument = $doVolunteerInsertArgument;
      return $this;
    }

}
