<?php

namespace FilippoToso\Travelport\UProfile;

class AlternateContactAddress extends typeTaggableAddress
{

    /**
     * @var typeRef $AlternateContactRef
     */
    protected $AlternateContactRef = null;

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
     * @param typeRef $AlternateContactRef
     */
    public function __construct($Key = null, $AddressLine = null, $City = null, $State = null, $OtherStateProvince = null, $Country = null, $Postal = null, $Type = null, $TagRef = null, $DeliveryDescription = null, $Purpose = null, $PriorityOrder = null, $AlternateContactRef = null)
    {
      parent::__construct($Key, $AddressLine, $City, $State, $OtherStateProvince, $Country, $Postal, $Type, $TagRef, $DeliveryDescription, $Purpose, $PriorityOrder);
      $this->AlternateContactRef = $AlternateContactRef;
    }

    /**
     * @return typeRef
     */
    public function getAlternateContactRef()
    {
      return $this->AlternateContactRef;
    }

    /**
     * @param typeRef $AlternateContactRef
     * @return \FilippoToso\Travelport\UProfile\AlternateContactAddress
     */
    public function setAlternateContactRef($AlternateContactRef)
    {
      $this->AlternateContactRef = $AlternateContactRef;
      return $this;
    }

}
