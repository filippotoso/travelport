<?php

namespace FilippoToso\Travelport\UProfile;

class ElectronicAddress extends typeTaggableElectronicAddress
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
     * @param anonymous814 $Name
     * @param typeEmailType $Type
     * @param typeEmailFormat $Format
     * @param TagRef $TagRef
     * @param typeContactPurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     * @param boolean $Provisioned
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $Name = null, $Type = null, $Format = null, $TagRef = null, $Purpose = null, $PriorityOrder = null, $Provisioned = null, $OwnerID = null)
    {
      parent::__construct($Key, $Name, $Type, $Format, $TagRef, $Purpose, $PriorityOrder);
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
     * @return \FilippoToso\Travelport\UProfile\ElectronicAddress
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
     * @return \FilippoToso\Travelport\UProfile\ElectronicAddress
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
