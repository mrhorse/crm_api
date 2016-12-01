<?php

namespace Torchbox\Thankq\Api;

class esitWSdoDonateLookupResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWSdonateSourceCode $sourcecodes
     */
    protected $sourcecodes = null;

    /**
     * @var ArrayOfEsitWSdestinationCode $destinationcodes
     */
    protected $destinationcodes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWSdonateSourceCode
     */
    public function getSourcecodes()
    {
      return $this->sourcecodes;
    }

    /**
     * @param ArrayOfEsitWSdonateSourceCode $sourcecodes
     * @return \Torchbox\Thankq\Api\esitWSdoDonateLookupResult
     */
    public function setSourcecodes($sourcecodes)
    {
      $this->sourcecodes = $sourcecodes;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSdestinationCode
     */
    public function getDestinationcodes()
    {
      return $this->destinationcodes;
    }

    /**
     * @param ArrayOfEsitWSdestinationCode $destinationcodes
     * @return \Torchbox\Thankq\Api\esitWSdoDonateLookupResult
     */
    public function setDestinationcodes($destinationcodes)
    {
      $this->destinationcodes = $destinationcodes;
      return $this;
    }

}
