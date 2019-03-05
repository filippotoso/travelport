<?php

namespace FilippoToso\Travelport\Util;

class LoyaltyCardDetails
{

    /**
     * @var typeCarrier $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var typePriorityCode $PriorityCode
     */
    protected $PriorityCode = null;

    /**
     * @param typeCarrier $SupplierCode
     * @param typePriorityCode $PriorityCode
     */
    public function __construct($SupplierCode = null, $PriorityCode = null)
    {
      $this->SupplierCode = $SupplierCode;
      $this->PriorityCode = $PriorityCode;
    }

    /**
     * @return typeCarrier
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeCarrier $SupplierCode
     * @return \FilippoToso\Travelport\Util\LoyaltyCardDetails
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typePriorityCode
     */
    public function getPriorityCode()
    {
      return $this->PriorityCode;
    }

    /**
     * @param typePriorityCode $PriorityCode
     * @return \FilippoToso\Travelport\Util\LoyaltyCardDetails
     */
    public function setPriorityCode($PriorityCode)
    {
      $this->PriorityCode = $PriorityCode;
      return $this;
    }

}