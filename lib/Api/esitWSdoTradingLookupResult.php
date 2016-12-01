<?php

namespace Torchbox\Thankq\Api;

class esitWSdoTradingLookupResult extends baseDataType
{

    /**
     * @var ArrayOfEsitWStradingProduct $products
     */
    protected $products = null;

    /**
     * @var ArrayOfEsitWStradingSourceCode $sourcecodes
     */
    protected $sourcecodes = null;

    /**
     * @var ArrayOfEsitWStradingPostageOption $postageOptions
     */
    protected $postageOptions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfEsitWStradingProduct
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param ArrayOfEsitWStradingProduct $products
     * @return \Torchbox\Thankq\Api\esitWSdoTradingLookupResult
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

    /**
     * @return ArrayOfEsitWStradingSourceCode
     */
    public function getSourcecodes()
    {
      return $this->sourcecodes;
    }

    /**
     * @param ArrayOfEsitWStradingSourceCode $sourcecodes
     * @return \Torchbox\Thankq\Api\esitWSdoTradingLookupResult
     */
    public function setSourcecodes($sourcecodes)
    {
      $this->sourcecodes = $sourcecodes;
      return $this;
    }

    /**
     * @return ArrayOfEsitWStradingPostageOption
     */
    public function getPostageOptions()
    {
      return $this->postageOptions;
    }

    /**
     * @param ArrayOfEsitWStradingPostageOption $postageOptions
     * @return \Torchbox\Thankq\Api\esitWSdoTradingLookupResult
     */
    public function setPostageOptions($postageOptions)
    {
      $this->postageOptions = $postageOptions;
      return $this;
    }

}
