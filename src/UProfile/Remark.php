<?php

namespace FilippoToso\Travelport\UProfile;

class Remark extends typeKeyTaggedElement
{

    /**
     * @var StringLength1to255 $RemarkText
     */
    protected $RemarkText = null;

    /**
     * @var typeRemarkType $Type
     */
    protected $Type = null;

    /**
     * @var typeAccountingRemarkType $AccountingRemarkType
     */
    protected $AccountingRemarkType = null;

    /**
     * @var typeProviderCode $Provider
     */
    protected $Provider = null;

    /**
     * @var typeGeneralRemarkType $GeneralRemarkType
     */
    protected $GeneralRemarkType = null;

    /**
     * @var typeRemarkCategory $CategoryType
     */
    protected $CategoryType = null;

    /**
     * @var typeSupplierType $SupplierType
     */
    protected $SupplierType = null;

    /**
     * @var typeSupplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param StringLength1to255 $RemarkText
     * @param typeRemarkType $Type
     * @param typeAccountingRemarkType $AccountingRemarkType
     * @param typeProviderCode $Provider
     * @param typeGeneralRemarkType $GeneralRemarkType
     * @param typeRemarkCategory $CategoryType
     * @param typeSupplierType $SupplierType
     * @param typeSupplier $Supplier
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $TagRef = null, $RemarkText = null, $Type = null, $AccountingRemarkType = null, $Provider = null, $GeneralRemarkType = null, $CategoryType = null, $SupplierType = null, $Supplier = null, $PriorityOrder = null)
    {
      parent::__construct($Key, $TagRef);
      $this->RemarkText = $RemarkText;
      $this->Type = $Type;
      $this->AccountingRemarkType = $AccountingRemarkType;
      $this->Provider = $Provider;
      $this->GeneralRemarkType = $GeneralRemarkType;
      $this->CategoryType = $CategoryType;
      $this->SupplierType = $SupplierType;
      $this->Supplier = $Supplier;
      $this->PriorityOrder = $PriorityOrder;
    }

    /**
     * @return StringLength1to255
     */
    public function getRemarkText()
    {
      return $this->RemarkText;
    }

    /**
     * @param StringLength1to255 $RemarkText
     * @return \FilippoToso\Travelport\UProfile\Remark
     */
    public function setRemarkText($RemarkText)
    {
      $this->RemarkText = $RemarkText;
      return $this;
    }

    /**
     * @return typeRemarkType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeRemarkType $Type
     * @return \FilippoToso\Travelport\UProfile\Remark
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeAccountingRemarkType
     */
    public function getAccountingRemarkType()
    {
      return $this->AccountingRemarkType;
    }

    /**
     * @param typeAccountingRemarkType $AccountingRemarkType
     * @return \FilippoToso\Travelport\UProfile\Remark
     */
    public function setAccountingRemarkType($AccountingRemarkType)
    {
      $this->AccountingRemarkType = $AccountingRemarkType;
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
     * @return \FilippoToso\Travelport\UProfile\Remark
     */
    public function setProvider($Provider)
    {
      $this->Provider = $Provider;
      return $this;
    }

    /**
     * @return typeGeneralRemarkType
     */
    public function getGeneralRemarkType()
    {
      return $this->GeneralRemarkType;
    }

    /**
     * @param typeGeneralRemarkType $GeneralRemarkType
     * @return \FilippoToso\Travelport\UProfile\Remark
     */
    public function setGeneralRemarkType($GeneralRemarkType)
    {
      $this->GeneralRemarkType = $GeneralRemarkType;
      return $this;
    }

    /**
     * @return typeRemarkCategory
     */
    public function getCategoryType()
    {
      return $this->CategoryType;
    }

    /**
     * @param typeRemarkCategory $CategoryType
     * @return \FilippoToso\Travelport\UProfile\Remark
     */
    public function setCategoryType($CategoryType)
    {
      $this->CategoryType = $CategoryType;
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
     * @return \FilippoToso\Travelport\UProfile\Remark
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
     * @return \FilippoToso\Travelport\UProfile\Remark
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
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
     * @return \FilippoToso\Travelport\UProfile\Remark
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
