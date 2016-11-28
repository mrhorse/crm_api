<?php

namespace Torchbox\Thankq\Api;

class esitWSdoContactCommitteeGetResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWScontactCommitee $committees
     */
    protected $committees = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWScontactCommitee
     */
    public function getCommittees()
    {
      return $this->committees;
    }

    /**
     * @param ArrayOfEsitWScontactCommitee $committees
     * @return \Torchbox\Thankq\Api\esitWSdoContactCommitteeGetResult
     */
    public function setCommittees($committees)
    {
      $this->committees = $committees;
      return $this;
    }

}
