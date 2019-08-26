<?php

namespace FilippoToso\Travelport\Rail;

class PromoCode
{

    /**
     * @var anonymous845 $Code
     */
    protected $Code = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @param anonymous845 $Code
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($Code, $ProviderCode, $SupplierCode)
    {
      $this->Code = $Code;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return anonymous845
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous845 $Code
     * @return \FilippoToso\Travelport\Rail\PromoCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\PromoCode
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Rail\PromoCode
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
