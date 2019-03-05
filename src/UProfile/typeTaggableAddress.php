<?php

namespace FilippoToso\Travelport\UProfile;

class typeTaggableAddress extends typeAddress
{

    /**
     * @var TagRef $TagRef
     */
    protected $TagRef = null;

    /**
     * @var StringLength1to255 $DeliveryDescription
     */
    protected $DeliveryDescription = null;

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
     * @param StringLength1to128 $AddressLine
     * @param anonymous802 $City
     * @param anonymous803 $State
     * @param StringLength1to128 $OtherStateProvince
     * @param typeCountry $Country
     * @param anonymous804 $Postal
     * @param StringLength1to128 $Type
     * @param TagRef $TagRef
     * @param StringLength1to255 $DeliveryDescription
     * @param typeContactPurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $AddressLine = null, $City = null, $State = null, $OtherStateProvince = null, $Country = null, $Postal = null, $Type = null, $TagRef = null, $DeliveryDescription = null, $Purpose = null, $PriorityOrder = null)
    {
      parent::__construct($Key, $AddressLine, $City, $State, $OtherStateProvince, $Country, $Postal, $Type);
      $this->TagRef = $TagRef;
      $this->DeliveryDescription = $DeliveryDescription;
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
     * @return \FilippoToso\Travelport\UProfile\typeTaggableAddress
     */
    public function setTagRef($TagRef)
    {
      $this->TagRef = $TagRef;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDeliveryDescription()
    {
      return $this->DeliveryDescription;
    }

    /**
     * @param StringLength1to255 $DeliveryDescription
     * @return \FilippoToso\Travelport\UProfile\typeTaggableAddress
     */
    public function setDeliveryDescription($DeliveryDescription)
    {
      $this->DeliveryDescription = $DeliveryDescription;
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
     * @return \FilippoToso\Travelport\UProfile\typeTaggableAddress
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
     * @return \FilippoToso\Travelport\UProfile\typeTaggableAddress
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
