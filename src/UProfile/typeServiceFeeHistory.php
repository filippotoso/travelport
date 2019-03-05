<?php

namespace FilippoToso\Travelport\UProfile;

class typeServiceFeeHistory extends typeKeyElement
{

    /**
     * @var typeServiceFeeType $Type
     */
    protected $Type = null;

    /**
     * @var date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var typeSupplierType $SupplierType
     */
    protected $SupplierType = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @param typeRef $Key
     * @param typeServiceFeeType $Type
     * @param date $StartDate
     * @param typeSupplierType $SupplierType
     * @param typeMoney $Amount
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $Type = null, $StartDate = null, $SupplierType = null, $Amount = null, $PriorityOrder = null)
    {
      parent::__construct($Key);
      $this->Type = $Type;
      $this->StartDate = $StartDate;
      $this->SupplierType = $SupplierType;
      $this->Amount = $Amount;
      $this->PriorityOrder = $PriorityOrder;
    }

    /**
     * @return typeServiceFeeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeServiceFeeType $Type
     * @return \FilippoToso\Travelport\UProfile\typeServiceFeeHistory
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return \FilippoToso\Travelport\UProfile\typeServiceFeeHistory
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\typeServiceFeeHistory
     */
    public function setSupplierType($SupplierType)
    {
      $this->SupplierType = $SupplierType;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\UProfile\typeServiceFeeHistory
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \FilippoToso\Travelport\UProfile\typeServiceFeeHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
