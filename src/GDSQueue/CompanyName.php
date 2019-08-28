<?php

namespace FilippoToso\Travelport\GDSQueue;

class CompanyName
{

    /**
     * @var typeCarrier $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @param typeCarrier $SupplierCode
     */
    public function __construct($SupplierCode = null)
    {
      $this->SupplierCode = $SupplierCode;
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
     * @return \FilippoToso\Travelport\GDSQueue\CompanyName
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
