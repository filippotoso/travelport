<?php

namespace FilippoToso\Travelport\UProfile;

class AlternateContactPhone extends typeTaggablePhone
{

    /**
     * @var typeRef $AlternateContactRef
     */
    protected $AlternateContactRef = null;

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
     * @param typeRef $AlternateContactRef
     */
    public function __construct($Key = null, $Type = null, $Country = null, $AreaCode = null, $LocalNumber = null, $Extension = null, $Description = null, $Location = null, $TagRef = null, $Purpose = null, $PriorityOrder = null, $AlternateContactRef = null)
    {
      parent::__construct($Key, $Type, $Country, $AreaCode, $LocalNumber, $Extension, $Description, $Location, $TagRef, $Purpose, $PriorityOrder);
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
     * @return \FilippoToso\Travelport\UProfile\AlternateContactPhone
     */
    public function setAlternateContactRef($AlternateContactRef)
    {
      $this->AlternateContactRef = $AlternateContactRef;
      return $this;
    }

}
