<?php

namespace Torchbox\Thankq\Api;

class doDonateMemberInsert
{

    /**
     * @var esitWSdoDonateInsertArgument $doDonateMemberInsertArgument
     */
    protected $doDonateMemberInsertArgument = null;

    /**
     * @param esitWSdoDonateInsertArgument $doDonateMemberInsertArgument
     */
    public function __construct($doDonateMemberInsertArgument)
    {
      $this->doDonateMemberInsertArgument = $doDonateMemberInsertArgument;
    }

    /**
     * @return esitWSdoDonateInsertArgument
     */
    public function getDoDonateMemberInsertArgument()
    {
      return $this->doDonateMemberInsertArgument;
    }

    /**
     * @param esitWSdoDonateInsertArgument $doDonateMemberInsertArgument
     * @return \Torchbox\Thankq\Api\doDonateMemberInsert
     */
    public function setDoDonateMemberInsertArgument($doDonateMemberInsertArgument)
    {
      $this->doDonateMemberInsertArgument = $doDonateMemberInsertArgument;
      return $this;
    }

}
