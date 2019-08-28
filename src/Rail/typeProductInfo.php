<?php

namespace FilippoToso\Travelport\Rail;

class typeProductInfo
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
     * @var string $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @param typeProduct $ProductType
     * @param string $VendorCode
     * @param string $ProviderCode
     * @param string $ProviderLocatorCode
     */
    public function __construct($ProductType = null, $VendorCode = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      $this->ProductType = $ProductType;
      $this->VendorCode = $VendorCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
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
     * @return \FilippoToso\Travelport\Rail\typeProductInfo
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
     * @return \FilippoToso\Travelport\Rail\typeProductInfo
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
     * @return \FilippoToso\Travelport\Rail\typeProductInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param string $ProviderLocatorCode
     * @return \FilippoToso\Travelport\Rail\typeProductInfo
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
