<?php

namespace FilippoToso\Travelport\UProfile;

class Phone extends typeTaggablePhone
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
     * @param boolean $Provisioned
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $Type = null, $Country = null, $AreaCode = null, $LocalNumber = null, $Extension = null, $Description = null, $Location = null, $TagRef = null, $Purpose = null, $PriorityOrder = null, $Provisioned = null, $OwnerID = null)
    {
      parent::__construct($Key, $Type, $Country, $AreaCode, $LocalNumber, $Extension, $Description, $Location, $TagRef, $Purpose, $PriorityOrder);
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
     * @return \FilippoToso\Travelport\UProfile\Phone
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
     * @return \FilippoToso\Travelport\UProfile\Phone
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
