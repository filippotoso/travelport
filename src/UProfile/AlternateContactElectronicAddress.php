<?php

namespace FilippoToso\Travelport\UProfile;

class AlternateContactElectronicAddress extends typeTaggableElectronicAddress
{

    /**
     * @var typeRef $AlternateContactRef
     */
    protected $AlternateContactRef = null;

    /**
     * @param typeRef $Key
     * @param anonymous814 $Name
     * @param typeEmailType $Type
     * @param typeEmailFormat $Format
     * @param TagRef $TagRef
     * @param typeContactPurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     * @param typeRef $AlternateContactRef
     */
    public function __construct($Key = null, $Name = null, $Type = null, $Format = null, $TagRef = null, $Purpose = null, $PriorityOrder = null, $AlternateContactRef = null)
    {
      parent::__construct($Key, $Name, $Type, $Format, $TagRef, $Purpose, $PriorityOrder);
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
     * @return \FilippoToso\Travelport\UProfile\AlternateContactElectronicAddress
     */
    public function setAlternateContactRef($AlternateContactRef)
    {
      $this->AlternateContactRef = $AlternateContactRef;
      return $this;
    }

}
