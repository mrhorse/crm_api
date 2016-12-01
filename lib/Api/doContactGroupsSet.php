<?php

namespace Torchbox\Thankq\Api;

class doContactGroupsSet
{

    /**
     * @var esitWSdoContactGroupsSetArgument $doContactGroupsSetArgument
     */
    protected $doContactGroupsSetArgument = null;

    /**
     * @param esitWSdoContactGroupsSetArgument $doContactGroupsSetArgument
     */
    public function __construct($doContactGroupsSetArgument)
    {
      $this->doContactGroupsSetArgument = $doContactGroupsSetArgument;
    }

    /**
     * @return esitWSdoContactGroupsSetArgument
     */
    public function getDoContactGroupsSetArgument()
    {
      return $this->doContactGroupsSetArgument;
    }

    /**
     * @param esitWSdoContactGroupsSetArgument $doContactGroupsSetArgument
     * @return \Torchbox\Thankq\Api\doContactGroupsSet
     */
    public function setDoContactGroupsSetArgument($doContactGroupsSetArgument)
    {
      $this->doContactGroupsSetArgument = $doContactGroupsSetArgument;
      return $this;
    }

}
