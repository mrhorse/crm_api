<?php

namespace Torchbox\Thankq\Api;

class esitWSdoPledgeGetResult
{

    /**
     * @var esitWSpledgeRecord $pledge
     */
    protected $pledge = null;

    /**
     * @var ArrayOfEsitWSpledgeInstalment $instalments
     */
    protected $instalments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esitWSpledgeRecord
     */
    public function getPledge()
    {
      return $this->pledge;
    }

    /**
     * @param esitWSpledgeRecord $pledge
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeGetResult
     */
    public function setPledge($pledge)
    {
      $this->pledge = $pledge;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSpledgeInstalment
     */
    public function getInstalments()
    {
      return $this->instalments;
    }

    /**
     * @param ArrayOfEsitWSpledgeInstalment $instalments
     * @return \Torchbox\Thankq\Api\esitWSdoPledgeGetResult
     */
    public function setInstalments($instalments)
    {
      $this->instalments = $instalments;
      return $this;
    }

}
