<?php

namespace FilippoToso\Travelport\UProfile;

class typeContractHistory extends typeKeyElement
{

    /**
     * @var typeSupplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var typeSupplierType $SupplierType
     */
    protected $SupplierType = null;

    /**
     * @var typeProviderCode $Provider
     */
    protected $Provider = null;

    /**
     * @var date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var date $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var typePercentageWithDecimal $DiscountPercentage
     */
    protected $DiscountPercentage = null;

    /**
     * @var typeMoney $DiscountValue
     */
    protected $DiscountValue = null;

    /**
     * @var StringLength1to255 $SupplierContractNumber
     */
    protected $SupplierContractNumber = null;

    /**
     * @var StringLength1to255 $PromotionalDesignatorName
     */
    protected $PromotionalDesignatorName = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @param typeRef $Key
     * @param typeSupplier $Supplier
     * @param typeSupplierType $SupplierType
     * @param typeProviderCode $Provider
     * @param date $StartDate
     * @param date $ExpirationDate
     * @param typePercentageWithDecimal $DiscountPercentage
     * @param typeMoney $DiscountValue
     * @param StringLength1to255 $SupplierContractNumber
     * @param StringLength1to255 $PromotionalDesignatorName
     * @param StringLength1to255 $Description
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $Supplier = null, $SupplierType = null, $Provider = null, $StartDate = null, $ExpirationDate = null, $DiscountPercentage = null, $DiscountValue = null, $SupplierContractNumber = null, $PromotionalDesignatorName = null, $Description = null, $PriorityOrder = null)
    {
      parent::__construct($Key);
      $this->Supplier = $Supplier;
      $this->SupplierType = $SupplierType;
      $this->Provider = $Provider;
      $this->StartDate = $StartDate;
      $this->ExpirationDate = $ExpirationDate;
      $this->DiscountPercentage = $DiscountPercentage;
      $this->DiscountValue = $DiscountValue;
      $this->SupplierContractNumber = $SupplierContractNumber;
      $this->PromotionalDesignatorName = $PromotionalDesignatorName;
      $this->Description = $Description;
      $this->PriorityOrder = $PriorityOrder;
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
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
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
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setSupplierType($SupplierType)
    {
      $this->SupplierType = $SupplierType;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProvider()
    {
      return $this->Provider;
    }

    /**
     * @param typeProviderCode $Provider
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setProvider($Provider)
    {
      $this->Provider = $Provider;
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
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param date $ExpirationDate
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getDiscountPercentage()
    {
      return $this->DiscountPercentage;
    }

    /**
     * @param typePercentageWithDecimal $DiscountPercentage
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
      $this->DiscountPercentage = $DiscountPercentage;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getDiscountValue()
    {
      return $this->DiscountValue;
    }

    /**
     * @param typeMoney $DiscountValue
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setDiscountValue($DiscountValue)
    {
      $this->DiscountValue = $DiscountValue;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getSupplierContractNumber()
    {
      return $this->SupplierContractNumber;
    }

    /**
     * @param StringLength1to255 $SupplierContractNumber
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setSupplierContractNumber($SupplierContractNumber)
    {
      $this->SupplierContractNumber = $SupplierContractNumber;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getPromotionalDesignatorName()
    {
      return $this->PromotionalDesignatorName;
    }

    /**
     * @param StringLength1to255 $PromotionalDesignatorName
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setPromotionalDesignatorName($PromotionalDesignatorName)
    {
      $this->PromotionalDesignatorName = $PromotionalDesignatorName;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to255 $Description
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UProfile\typeContractHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
