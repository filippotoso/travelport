<?php

namespace FilippoToso\Travelport\Rail;

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
    public function __construct($SupplierCode, $PriorityCode)
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
     * @return \FilippoToso\Travelport\Rail\LoyaltyCardDetails
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
     * @return \FilippoToso\Travelport\Rail\LoyaltyCardDetails
     */
    public function setPriorityCode($PriorityCode)
    {
      $this->PriorityCode = $PriorityCode;
      return $this;
    }

}
