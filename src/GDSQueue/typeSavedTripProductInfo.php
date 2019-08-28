<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeSavedTripProductInfo
{

    /**
     * @var typeProduct $ProductType
     */
    protected $ProductType = null;

    /**
     * @var string $VendorCode
     */
    protected $VendorCode = null;

    /**
     * @var string $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @param typeProduct $ProductType
     * @param string $VendorCode
     * @param string $ProviderCode
     */
    public function __construct($ProductType = null, $VendorCode = null, $ProviderCode = null)
    {
      $this->ProductType = $ProductType;
      $this->VendorCode = $VendorCode;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return typeProduct
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param typeProduct $ProductType
     * @return \FilippoToso\Travelport\GDSQueue\typeSavedTripProductInfo
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param string $VendorCode
     * @return \FilippoToso\Travelport\GDSQueue\typeSavedTripProductInfo
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param string $ProviderCode
     * @return \FilippoToso\Travelport\GDSQueue\typeSavedTripProductInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
