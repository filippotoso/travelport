<?php

namespace FilippoToso\Travelport\UProfile;

class LoyaltyProgramEnrollment extends typeKeyTaggedElement
{

    /**
     * @var typeSupplierType $SupplierType
     */
    protected $SupplierType = null;

    /**
     * @var typeSupplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var StringLength1to255 $Number
     */
    protected $Number = null;

    /**
     * @var StringLength1to128 $ProgramName
     */
    protected $ProgramName = null;

    /**
     * @var StringLength1to128 $Status
     */
    protected $Status = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param typeSupplierType $SupplierType
     * @param typeSupplier $Supplier
     * @param StringLength1to255 $Number
     * @param StringLength1to128 $ProgramName
     * @param StringLength1to128 $Status
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $TagRef = null, $SupplierType = null, $Supplier = null, $Number = null, $ProgramName = null, $Status = null, $PriorityOrder = null)
    {
      parent::__construct($Key, $TagRef);
      $this->SupplierType = $SupplierType;
      $this->Supplier = $Supplier;
      $this->Number = $Number;
      $this->ProgramName = $ProgramName;
      $this->Status = $Status;
      $this->PriorityOrder = $PriorityOrder;
    }

    /**
     * @return typeSupplierType
     */
    public function getSupplierType()
    {
      return $this->SupplierType;
    }

    /**
     * @param typeSupplierType $SupplierType
     * @return \FilippoToso\Travelport\UProfile\LoyaltyProgramEnrollment
     */
    public function setSupplierType($SupplierType)
    {
      $this->SupplierType = $SupplierType;
      return $this;
    }

    /**
     * @return typeSupplier
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param typeSupplier $Supplier
     * @return \FilippoToso\Travelport\UProfile\LoyaltyProgramEnrollment
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param StringLength1to255 $Number
     * @return \FilippoToso\Travelport\UProfile\LoyaltyProgramEnrollment
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getProgramName()
    {
      return $this->ProgramName;
    }

    /**
     * @param StringLength1to128 $ProgramName
     * @return \FilippoToso\Travelport\UProfile\LoyaltyProgramEnrollment
     */
    public function setProgramName($ProgramName)
    {
      $this->ProgramName = $ProgramName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StringLength1to128 $Status
     * @return \FilippoToso\Travelport\UProfile\LoyaltyProgramEnrollment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\LoyaltyProgramEnrollment
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
