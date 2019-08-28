<?php

namespace FilippoToso\Travelport\Terminal;

class AccountCode
{

    /**
     * @var anonymous116 $Code
     */
    protected $Code = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @param anonymous116 $Code
     * @param string $Type
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($Code = null, $Type = null, $ProviderCode = null, $SupplierCode = null)
    {
      $this->Code = $Code;
      $this->Type = $Type;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return anonymous116
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous116 $Code
     * @return \FilippoToso\Travelport\Terminal\AccountCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Terminal\AccountCode
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\Terminal\AccountCode
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
     * @return \FilippoToso\Travelport\Terminal\AccountCode
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
