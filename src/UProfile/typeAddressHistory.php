<?php

namespace FilippoToso\Travelport\UProfile;

class typeAddressHistory extends typeKeyTaggedElement
{

    /**
     * @var StringLength1to128 $AddressLine
     */
    protected $AddressLine = null;

    /**
     * @var anonymous730 $City
     */
    protected $City = null;

    /**
     * @var StringLength1to255 $State
     */
    protected $State = null;

    /**
     * @var StringLength1to128 $OtherStateProvince
     */
    protected $OtherStateProvince = null;

    /**
     * @var typeCountry $Country
     */
    protected $Country = null;

    /**
     * @var anonymous731 $Postal
     */
    protected $Postal = null;

    /**
     * @var StringLength1to128 $Type
     */
    protected $Type = null;

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
     * @var StringLength1to255 $DeliveryDescription
     */
    protected $DeliveryDescription = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param StringLength1to128 $AddressLine
     * @param anonymous730 $City
     * @param StringLength1to255 $State
     * @param StringLength1to128 $OtherStateProvince
     * @param typeCountry $Country
     * @param anonymous731 $Postal
     * @param StringLength1to128 $Type
     * @param typeContactPurpose $Purpose
     * @param boolean $Provisioned
     * @param typePriorityOrder $PriorityOrder
     * @param StringLength1to255 $DeliveryDescription
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $TagRef = null, $AddressLine = null, $City = null, $State = null, $OtherStateProvince = null, $Country = null, $Postal = null, $Type = null, $Purpose = null, $Provisioned = null, $PriorityOrder = null, $DeliveryDescription = null, $OwnerID = null)
    {
      parent::__construct($Key, $TagRef);
      $this->AddressLine = $AddressLine;
      $this->City = $City;
      $this->State = $State;
      $this->OtherStateProvince = $OtherStateProvince;
      $this->Country = $Country;
      $this->Postal = $Postal;
      $this->Type = $Type;
      $this->Purpose = $Purpose;
      $this->Provisioned = $Provisioned;
      $this->PriorityOrder = $PriorityOrder;
      $this->DeliveryDescription = $DeliveryDescription;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return StringLength1to128
     */
    public function getAddressLine()
    {
      return $this->AddressLine;
    }

    /**
     * @param StringLength1to128 $AddressLine
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setAddressLine($AddressLine)
    {
      $this->AddressLine = $AddressLine;
      return $this;
    }

    /**
     * @return anonymous730
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param anonymous730 $City
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param StringLength1to255 $State
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getOtherStateProvince()
    {
      return $this->OtherStateProvince;
    }

    /**
     * @param StringLength1to128 $OtherStateProvince
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setOtherStateProvince($OtherStateProvince)
    {
      $this->OtherStateProvince = $OtherStateProvince;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param typeCountry $Country
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return anonymous731
     */
    public function getPostal()
    {
      return $this->Postal;
    }

    /**
     * @param anonymous731 $Postal
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setPostal($Postal)
    {
      $this->Postal = $Postal;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param StringLength1to128 $Type
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
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
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setDeliveryDescription($DeliveryDescription)
    {
      $this->DeliveryDescription = $DeliveryDescription;
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
     * @return \FilippoToso\Travelport\UProfile\typeAddressHistory
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
