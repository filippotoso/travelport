<?php

namespace FilippoToso\Travelport\UProfile;

class typeTaggablePhone extends typePhone
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
     * @param typePhoneType $Type
     * @param anonymous821 $Country
     * @param anonymous822 $AreaCode
     * @param anonymous823 $LocalNumber
     * @param anonymous824 $Extension
     * @param StringLength1to255 $Description
     * @param typeCityOrAirport $Location
     * @param TagRef $TagRef
     * @param typeContactPurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $Type = null, $Country = null, $AreaCode = null, $LocalNumber = null, $Extension = null, $Description = null, $Location = null, $TagRef = null, $Purpose = null, $PriorityOrder = null)
    {
      parent::__construct($Key, $Type, $Country, $AreaCode, $LocalNumber, $Extension, $Description, $Location);
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
     * @return \FilippoToso\Travelport\UProfile\typeTaggablePhone
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
     * @return \FilippoToso\Travelport\UProfile\typeTaggablePhone
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
     * @return \FilippoToso\Travelport\UProfile\typeTaggablePhone
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
