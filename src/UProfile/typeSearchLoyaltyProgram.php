<?php

namespace FilippoToso\Travelport\UProfile;

class typeSearchLoyaltyProgram
{

    /**
     * @var typeWildcard $Number
     */
    protected $Number = null;

    /**
     * @var typeSupplier $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @param typeWildcard $Number
     * @param typeSupplier $SupplierCode
     */
    public function __construct($Number = null, $SupplierCode = null)
    {
      $this->Number = $Number;
      $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return typeWildcard
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param typeWildcard $Number
     * @return \FilippoToso\Travelport\UProfile\typeSearchLoyaltyProgram
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return typeSupplier
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplier $SupplierCode
     * @return \FilippoToso\Travelport\UProfile\typeSearchLoyaltyProgram
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
