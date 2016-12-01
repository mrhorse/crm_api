<?php

namespace Torchbox\Thankq\Api;

class esitWSvolunteerSkill extends baseDataType
{

    /**
     * @var ArrayOfString $skillsList
     */
    protected $skillsList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getSkillsList()
    {
      return $this->skillsList;
    }

    /**
     * @param ArrayOfString $skillsList
     * @return \Torchbox\Thankq\Api\esitWSvolunteerSkill
     */
    public function setSkillsList($skillsList)
    {
      $this->skillsList = $skillsList;
      return $this;
    }

}
