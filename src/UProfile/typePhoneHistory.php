<?php

namespace FilippoToso\Travelport\UProfile;

class typePhoneHistory extends typeKeyTaggedElement
{

    /**
     * @var typePhoneType $Type
     */
    protected $Type = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var typeContactPurpose $Purpose
     */
    protected $Purpose = null;

    /**
     * @var boolean $Provisioned
     */
    protected $Provisioned = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @var anonymous895 $Country
     */
    protected $Country = null;

    /**
     * @var anonymous896 $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var anonymous897 $LocalNumber
     */
    protected $LocalNumber = null;

    /**
     * @var anonymous898 $Extension
     */
    protected $Extension = null;

    /**
     * @var typeCityOrAirport $Location
     */
    protected $Location = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param typePhoneType $Type
     * @param StringLength1to255 $Description
     * @param typeContactPurpose $Purpose
     * @param boolean $Provisioned
     * @param typePriorityOrder $PriorityOrder
     * @param typeProfileID $OwnerID
     * @param anonymous895 $Country
     * @param anonymous896 $AreaCode
     * @param anonymous897 $LocalNumber
     * @param anonymous898 $Extension
     * @param typeCityOrAirport $Location
     */
    public function __construct($Key = null, $TagRef = null, $Type = null, $Description = null, $Purpose = null, $Provisioned = null, $PriorityOrder = null, $OwnerID = null, $Country = null, $AreaCode = null, $LocalNumber = null, $Extension = null, $Location = null)
    {
      parent::__construct($Key, $TagRef);
      $this->Type = $Type;
      $this->Description = $Description;
      $this->Purpose = $Purpose;
      $this->Provisioned = $Provisioned;
      $this->PriorityOrder = $PriorityOrder;
      $this->OwnerID = $OwnerID;
      $this->Country = $Country;
      $this->AreaCode = $AreaCode;
      $this->LocalNumber = $LocalNumber;
      $this->Extension = $Extension;
      $this->Location = $Location;
    }

    /**
     * @return typePhoneType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typePhoneType $Type
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setProvisioned($Provisioned)
    {
      $this->Provisioned = $Provisioned;
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
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
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
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

    /**
     * @return anonymous895
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param anonymous895 $Country
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return anonymous896
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param anonymous896 $AreaCode
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return anonymous897
     */
    public function getLocalNumber()
    {
      return $this->LocalNumber;
    }

    /**
     * @param anonymous897 $LocalNumber
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setLocalNumber($LocalNumber)
    {
      $this->LocalNumber = $LocalNumber;
      return $this;
    }

    /**
     * @return anonymous898
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param anonymous898 $Extension
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return typeCityOrAirport
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param typeCityOrAirport $Location
     * @return \FilippoToso\Travelport\UProfile\typePhoneHistory
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
