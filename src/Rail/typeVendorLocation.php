<?php

namespace FilippoToso\Travelport\Rail;

class typeVendorLocation
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $VendorCode
     */
    protected $VendorCode = null;

    /**
     * @var boolean $PreferredOption
     */
    protected $PreferredOption = null;

    /**
     * @var anonymous4 $VendorLocationID
     */
    protected $VendorLocationID = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var anonymous5 $MoreRatesToken
     */
    protected $MoreRatesToken = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $VendorCode
     * @param boolean $PreferredOption
     * @param anonymous4 $VendorLocationID
     * @param typeRef $Key
     * @param anonymous5 $MoreRatesToken
     */
    public function __construct($ProviderCode = null, $VendorCode = null, $PreferredOption = null, $VendorLocationID = null, $Key = null, $MoreRatesToken = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->VendorCode = $VendorCode;
      $this->PreferredOption = $PreferredOption;
      $this->VendorLocationID = $VendorLocationID;
      $this->Key = $Key;
      $this->MoreRatesToken = $MoreRatesToken;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Rail\typeVendorLocation
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param typeSupplierCode $VendorCode
     * @return \FilippoToso\Travelport\Rail\typeVendorLocation
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferredOption()
    {
      return $this->PreferredOption;
    }

    /**
     * @param boolean $PreferredOption
     * @return \FilippoToso\Travelport\Rail\typeVendorLocation
     */
    public function setPreferredOption($PreferredOption)
    {
      $this->PreferredOption = $PreferredOption;
      return $this;
    }

    /**
     * @return anonymous4
     */
    public function getVendorLocationID()
    {
      return $this->VendorLocationID;
    }

    /**
     * @param anonymous4 $VendorLocationID
     * @return \FilippoToso\Travelport\Rail\typeVendorLocation
     */
    public function setVendorLocationID($VendorLocationID)
    {
      $this->VendorLocationID = $VendorLocationID;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Rail\typeVendorLocation
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous5
     */
    public function getMoreRatesToken()
    {
      return $this->MoreRatesToken;
    }

    /**
     * @param anonymous5 $MoreRatesToken
     * @return \FilippoToso\Travelport\Rail\typeVendorLocation
     */
    public function setMoreRatesToken($MoreRatesToken)
    {
      $this->MoreRatesToken = $MoreRatesToken;
      return $this;
    }

}
