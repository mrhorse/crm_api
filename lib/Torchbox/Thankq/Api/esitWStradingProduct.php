<?php

namespace Torchbox\Thankq\Api;

class esitWStradingProduct extends baseDataType
{

    /**
     * @var esitWStradingCoreProduct $coreProduct
     */
    protected $coreProduct = null;

    /**
     * @var float $vatrate
     */
    protected $vatrate = null;

    /**
     * @var int $stockLevel
     */
    protected $stockLevel = null;

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @var string $offerID
     */
    protected $offerID = null;

    /**
     * @var float $memberPrice
     */
    protected $memberPrice = null;

    /**
     * @var string $memberOfferID
     */
    protected $memberOfferID = null;

    /**
     * @var int $webRank
     */
    protected $webRank = null;

    /**
     * @var boolean $toSell
     */
    protected $toSell = null;

    /**
     * @var boolean $virtual
     */
    protected $virtual = null;

    /**
     * @var ArrayOfEsitWStradingCoreProduct $packageProducts
     */
    protected $packageProducts = null;

    /**
     * @param float $vatrate
     * @param int $stockLevel
     * @param float $price
     * @param float $memberPrice
     * @param int $webRank
     * @param boolean $toSell
     * @param boolean $virtual
     */
    public function __construct($vatrate, $stockLevel, $price, $memberPrice, $webRank, $toSell, $virtual)
    {
      $this->vatrate = $vatrate;
      $this->stockLevel = $stockLevel;
      $this->price = $price;
      $this->memberPrice = $memberPrice;
      $this->webRank = $webRank;
      $this->toSell = $toSell;
      $this->virtual = $virtual;
    }

    /**
     * @return esitWStradingCoreProduct
     */
    public function getCoreProduct()
    {
      return $this->coreProduct;
    }

    /**
     * @param esitWStradingCoreProduct $coreProduct
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setCoreProduct($coreProduct)
    {
      $this->coreProduct = $coreProduct;
      return $this;
    }

    /**
     * @return float
     */
    public function getVatrate()
    {
      return $this->vatrate;
    }

    /**
     * @param float $vatrate
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setVatrate($vatrate)
    {
      $this->vatrate = $vatrate;
      return $this;
    }

    /**
     * @return int
     */
    public function getStockLevel()
    {
      return $this->stockLevel;
    }

    /**
     * @param int $stockLevel
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setStockLevel($stockLevel)
    {
      $this->stockLevel = $stockLevel;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfferID()
    {
      return $this->offerID;
    }

    /**
     * @param string $offerID
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setOfferID($offerID)
    {
      $this->offerID = $offerID;
      return $this;
    }

    /**
     * @return float
     */
    public function getMemberPrice()
    {
      return $this->memberPrice;
    }

    /**
     * @param float $memberPrice
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setMemberPrice($memberPrice)
    {
      $this->memberPrice = $memberPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemberOfferID()
    {
      return $this->memberOfferID;
    }

    /**
     * @param string $memberOfferID
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setMemberOfferID($memberOfferID)
    {
      $this->memberOfferID = $memberOfferID;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebRank()
    {
      return $this->webRank;
    }

    /**
     * @param int $webRank
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setWebRank($webRank)
    {
      $this->webRank = $webRank;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getToSell()
    {
      return $this->toSell;
    }

    /**
     * @param boolean $toSell
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setToSell($toSell)
    {
      $this->toSell = $toSell;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVirtual()
    {
      return $this->virtual;
    }

    /**
     * @param boolean $virtual
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setVirtual($virtual)
    {
      $this->virtual = $virtual;
      return $this;
    }

    /**
     * @return ArrayOfEsitWStradingCoreProduct
     */
    public function getPackageProducts()
    {
      return $this->packageProducts;
    }

    /**
     * @param ArrayOfEsitWStradingCoreProduct $packageProducts
     * @return \Torchbox\Thankq\Api\esitWStradingProduct
     */
    public function setPackageProducts($packageProducts)
    {
      $this->packageProducts = $packageProducts;
      return $this;
    }

}
