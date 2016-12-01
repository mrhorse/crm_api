<?php

namespace Torchbox\Thankq\Api;

class esitWScontactCommitee extends baseDataType
{

    /**
     * @var string $committeeId
     */
    protected $committeeId = null;

    /**
     * @var string $committeeName
     */
    protected $committeeName = null;

    /**
     * @var ArrayOfEsitWScontactCommiteeMember $members
     */
    protected $members = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCommitteeId()
    {
      return $this->committeeId;
    }

    /**
     * @param string $committeeId
     * @return \Torchbox\Thankq\Api\esitWScontactCommitee
     */
    public function setCommitteeId($committeeId)
    {
      $this->committeeId = $committeeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommitteeName()
    {
      return $this->committeeName;
    }

    /**
     * @param string $committeeName
     * @return \Torchbox\Thankq\Api\esitWScontactCommitee
     */
    public function setCommitteeName($committeeName)
    {
      $this->committeeName = $committeeName;
      return $this;
    }

    /**
     * @return ArrayOfEsitWScontactCommiteeMember
     */
    public function getMembers()
    {
      return $this->members;
    }

    /**
     * @param ArrayOfEsitWScontactCommiteeMember $members
     * @return \Torchbox\Thankq\Api\esitWScontactCommitee
     */
    public function setMembers($members)
    {
      $this->members = $members;
      return $this;
    }

}
