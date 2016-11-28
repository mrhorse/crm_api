<?php

namespace Torchbox\Thankq\Api;

class esitWStradingCoreProduct extends baseDataType
{

    /**
     * @var string $productID
     */
    protected $productID = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $productType
     */
    protected $productType = null;

    /**
     * @var int $productWeightGram
     */
    protected $productWeightGram = null;

    /**
     * @var string $itemType
     */
    protected $itemType = null;

    /**
     * @param int $productWeightGram
     */
    public function __construct($productWeightGram)
    {
      $this->productWeightGram = $productWeightGram;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
      return $this->productID;
    }

    /**
     * @param string $productID
     * @return \Torchbox\Thankq\Api\esitWStradingCoreProduct
     */
    public function setProductID($productID)
    {
      $this->productID = $productID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Torchbox\Thankq\Api\esitWStradingCoreProduct
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Torchbox\Thankq\Api\esitWStradingCoreProduct
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
      return $this->productType;
    }

    /**
     * @param string $productType
     * @return \Torchbox\Thankq\Api\esitWStradingCoreProduct
     */
    public function setProductType($productType)
    {
      $this->productType = $productType;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductWeightGram()
    {
      return $this->productWeightGram;
    }

    /**
     * @param int $productWeightGram
     * @return \Torchbox\Thankq\Api\esitWStradingCoreProduct
     */
    public function setProductWeightGram($productWeightGram)
    {
      $this->productWeightGram = $productWeightGram;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemType()
    {
      return $this->itemType;
    }

    /**
     * @param string $itemType
     * @return \Torchbox\Thankq\Api\esitWStradingCoreProduct
     */
    public function setItemType($itemType)
    {
      $this->itemType = $itemType;
      return $this;
    }

}
