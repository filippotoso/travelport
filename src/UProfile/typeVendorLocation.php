<?php

namespace FilippoToso\Travelport\UProfile;

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
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $VendorCode
     * @param boolean $PreferredOption
     * @param anonymous4 $VendorLocationID
     * @param typeRef $Key
     */
    public function __construct($ProviderCode = null, $VendorCode = null, $PreferredOption = null, $VendorLocationID = null, $Key = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->VendorCode = $VendorCode;
      $this->PreferredOption = $PreferredOption;
      $this->VendorLocationID = $VendorLocationID;
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\UProfile\typeVendorLocation
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
     * @return \FilippoToso\Travelport\UProfile\typeVendorLocation
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
     * @return \FilippoToso\Travelport\UProfile\typeVendorLocation
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
     * @return \FilippoToso\Travelport\UProfile\typeVendorLocation
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
     * @return \FilippoToso\Travelport\UProfile\typeVendorLocation
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
