<?php

namespace Torchbox\Thankq\Api;

class esitWSlookup extends baseDataType
{

    /**
     * @var string $lookupvalue1
     */
    protected $lookupvalue1 = null;

    /**
     * @var string $lookupvalue2
     */
    protected $lookupvalue2 = null;

    /**
     * @var string $lookupvalue3
     */
    protected $lookupvalue3 = null;

    /**
     * @var string $lookupvalue4
     */
    protected $lookupvalue4 = null;

    /**
     * @var string $lookupvalue5
     */
    protected $lookupvalue5 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLookupvalue1()
    {
      return $this->lookupvalue1;
    }

    /**
     * @param string $lookupvalue1
     * @return \Torchbox\Thankq\Api\esitWSlookup
     */
    public function setLookupvalue1($lookupvalue1)
    {
      $this->lookupvalue1 = $lookupvalue1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLookupvalue2()
    {
      return $this->lookupvalue2;
    }

    /**
     * @param string $lookupvalue2
     * @return \Torchbox\Thankq\Api\esitWSlookup
     */
    public function setLookupvalue2($lookupvalue2)
    {
      $this->lookupvalue2 = $lookupvalue2;
      return $this;
    }

    /**
     * @return string
     */
    public function getLookupvalue3()
    {
      return $this->lookupvalue3;
    }

    /**
     * @param string $lookupvalue3
     * @return \Torchbox\Thankq\Api\esitWSlookup
     */
    public function setLookupvalue3($lookupvalue3)
    {
      $this->lookupvalue3 = $lookupvalue3;
      return $this;
    }

    /**
     * @return string
     */
    public function getLookupvalue4()
    {
      return $this->lookupvalue4;
    }

    /**
     * @param string $lookupvalue4
     * @return \Torchbox\Thankq\Api\esitWSlookup
     */
    public function setLookupvalue4($lookupvalue4)
    {
      $this->lookupvalue4 = $lookupvalue4;
      return $this;
    }

    /**
     * @return string
     */
    public function getLookupvalue5()
    {
      return $this->lookupvalue5;
    }

    /**
     * @param string $lookupvalue5
     * @return \Torchbox\Thankq\Api\esitWSlookup
     */
    public function setLookupvalue5($lookupvalue5)
    {
      $this->lookupvalue5 = $lookupvalue5;
      return $this;
    }

}
