<?php

namespace Torchbox\Thankq\Api;

class doContactGroupsGetResponse
{

    /**
     * @var esitWSdoContactGroupsGetResult $doContactGroupsGetResult
     */
    protected $doContactGroupsGetResult = null;

    /**
     * @param esitWSdoContactGroupsGetResult $doContactGroupsGetResult
     */
    public function __construct($doContactGroupsGetResult)
    {
      $this->doContactGroupsGetResult = $doContactGroupsGetResult;
    }

    /**
     * @return esitWSdoContactGroupsGetResult
     */
    public function getDoContactGroupsGetResult()
    {
      return $this->doContactGroupsGetResult;
    }

    /**
     * @param esitWSdoContactGroupsGetResult $doContactGroupsGetResult
     * @return \Torchbox\Thankq\Api\doContactGroupsGetResponse
     */
    public function setDoContactGroupsGetResult($doContactGroupsGetResult)
    {
      $this->doContactGroupsGetResult = $doContactGroupsGetResult;
      return $this;
    }

}
