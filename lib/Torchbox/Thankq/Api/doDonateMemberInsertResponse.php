<?php

namespace Torchbox\Thankq\Api;

class doDonateMemberInsertResponse
{

    /**
     * @var esitWSdoDonateInsertResult $doDonateMemberInsertResult
     */
    protected $doDonateMemberInsertResult = null;

    /**
     * @param esitWSdoDonateInsertResult $doDonateMemberInsertResult
     */
    public function __construct($doDonateMemberInsertResult)
    {
      $this->doDonateMemberInsertResult = $doDonateMemberInsertResult;
    }

    /**
     * @return esitWSdoDonateInsertResult
     */
    public function getDoDonateMemberInsertResult()
    {
      return $this->doDonateMemberInsertResult;
    }

    /**
     * @param esitWSdoDonateInsertResult $doDonateMemberInsertResult
     * @return \Torchbox\Thankq\Api\doDonateMemberInsertResponse
     */
    public function setDoDonateMemberInsertResult($doDonateMemberInsertResult)
    {
      $this->doDonateMemberInsertResult = $doDonateMemberInsertResult;
      return $this;
    }

}
