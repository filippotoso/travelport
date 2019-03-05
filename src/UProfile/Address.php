<?php

namespace FilippoToso\Travelport\UProfile;

class Address extends typeTaggableAddress
{

    /**
     * @var boolean $Provisioned
     */
    protected $Provisioned = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

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
     * @param boolean $Provisioned
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $AddressLine = null, $City = null, $State = null, $OtherStateProvince = null, $Country = null, $Postal = null, $Type = null, $TagRef = null, $DeliveryDescription = null, $Purpose = null, $PriorityOrder = null, $Provisioned = null, $OwnerID = null)
    {
      parent::__construct($Key, $AddressLine, $City, $State, $OtherStateProvince, $Country, $Postal, $Type, $TagRef, $DeliveryDescription, $Purpose, $PriorityOrder);
      $this->Provisioned = $Provisioned;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return boolean
     */
    public function getProvisioned()
    {
      return $this->Provisioned;
    }

    /**
     * @param boolean $Provisioned
     * @return \FilippoToso\Travelport\UProfile\Address
     */
    public function setProvisioned($Provisioned)
    {
      $this->Provisioned = $Provisioned;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getOwnerID()
    {
      return $this->OwnerID;
    }

    /**
     * @param typeProfileID $OwnerID
     * @return \FilippoToso\Travelport\UProfile\Address
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
