<?php

namespace FilippoToso\Travelport\UProfile;

class typeTaggableElectronicAddress extends typeElectronicAddress
{

    /**
     * @var TagRef $TagRef
     */
    protected $TagRef = null;

    /**
     * @var typeContactPurpose $Purpose
     */
    protected $Purpose = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @param typeRef $Key
     * @param anonymous814 $Name
     * @param typeEmailType $Type
     * @param typeEmailFormat $Format
     * @param TagRef $TagRef
     * @param typeContactPurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $Name = null, $Type = null, $Format = null, $TagRef = null, $Purpose = null, $PriorityOrder = null)
    {
      parent::__construct($Key, $Name, $Type, $Format);
      $this->TagRef = $TagRef;
      $this->Purpose = $Purpose;
      $this->PriorityOrder = $PriorityOrder;
    }

    /**
     * @return TagRef
     */
    public function getTagRef()
    {
      return $this->TagRef;
    }

    /**
     * @param TagRef $TagRef
     * @return \FilippoToso\Travelport\UProfile\typeTaggableElectronicAddress
     */
    public function setTagRef($TagRef)
    {
      $this->TagRef = $TagRef;
      return $this;
    }

    /**
     * @return typeContactPurpose
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param typeContactPurpose $Purpose
     * @return \FilippoToso\Travelport\UProfile\typeTaggableElectronicAddress
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
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
     * @return \FilippoToso\Travelport\UProfile\typeTaggableElectronicAddress
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
