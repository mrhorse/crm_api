<?php

namespace Torchbox\Thankq\Api;

class doContactGroupsSetResponse
{

    /**
     * @var boolean $doContactGroupsSetResult
     */
    protected $doContactGroupsSetResult = null;

    /**
     * @param boolean $doContactGroupsSetResult
     */
    public function __construct($doContactGroupsSetResult)
    {
      $this->doContactGroupsSetResult = $doContactGroupsSetResult;
    }

    /**
     * @return boolean
     */
    public function getDoContactGroupsSetResult()
    {
      return $this->doContactGroupsSetResult;
    }

    /**
     * @param boolean $doContactGroupsSetResult
     * @return \Torchbox\Thankq\Api\doContactGroupsSetResponse
     */
    public function setDoContactGroupsSetResult($doContactGroupsSetResult)
    {
      $this->doContactGroupsSetResult = $doContactGroupsSetResult;
      return $this;
    }

}
