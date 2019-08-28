<?php

namespace FilippoToso\Travelport\UProfile;

class typeElectronicAddressHistory extends typeKeyTaggedElement
{

    /**
     * @var anonymous736 $Name
     */
    protected $Name = null;

    /**
     * @var typeEmailType $Type
     */
    protected $Type = null;

    /**
     * @var typeEmailFormat $Format
     */
    protected $Format = null;

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
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param anonymous736 $Name
     * @param typeEmailType $Type
     * @param typeEmailFormat $Format
     * @param typeContactPurpose $Purpose
     * @param boolean $Provisioned
     * @param typePriorityOrder $PriorityOrder
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $TagRef = null, $Name = null, $Type = null, $Format = null, $Purpose = null, $Provisioned = null, $PriorityOrder = null, $OwnerID = null)
    {
      parent::__construct($Key, $TagRef);
      $this->Name = $Name;
      $this->Type = $Type;
      $this->Format = $Format;
      $this->Purpose = $Purpose;
      $this->Provisioned = $Provisioned;
      $this->PriorityOrder = $PriorityOrder;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return anonymous736
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous736 $Name
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddressHistory
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeEmailType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeEmailType $Type
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddressHistory
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeEmailFormat
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param typeEmailFormat $Format
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddressHistory
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
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
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddressHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddressHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddressHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddressHistory
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
