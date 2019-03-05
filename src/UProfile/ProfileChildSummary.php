<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileChildSummary
{

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to128 $ProvisioningCode
     */
    protected $ProvisioningCode = null;

    /**
     * @var typeID $HierarchyLevelID
     */
    protected $HierarchyLevelID = null;

    /**
     * @var typeProfileEntityStatus $Status
     */
    protected $Status = null;

    /**
     * @var typeVersion $Version
     */
    protected $Version = null;

    /**
     * @var boolean $Control
     */
    protected $Control = null;

    /**
     * @var typeDescription $Description
     */
    protected $Description = null;

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param StringLength1to128 $Name
     * @param StringLength1to128 $ProvisioningCode
     * @param typeID $HierarchyLevelID
     * @param typeProfileEntityStatus $Status
     * @param typeVersion $Version
     * @param boolean $Control
     * @param typeDescription $Description
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     */
    public function __construct($Name = null, $ProvisioningCode = null, $HierarchyLevelID = null, $Status = null, $Version = null, $Control = null, $Description = null, $ProfileID = null, $ProfileType = null)
    {
      $this->Name = $Name;
      $this->ProvisioningCode = $ProvisioningCode;
      $this->HierarchyLevelID = $HierarchyLevelID;
      $this->Status = $Status;
      $this->Version = $Version;
      $this->Control = $Control;
      $this->Description = $Description;
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return StringLength1to128
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringLength1to128 $Name
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSummary
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getProvisioningCode()
    {
      return $this->ProvisioningCode;
    }

    /**
     * @param StringLength1to128 $ProvisioningCode
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSummary
     */
    public function setProvisioningCode($ProvisioningCode)
    {
      $this->ProvisioningCode = $ProvisioningCode;
      return $this;
    }

    /**
     * @return typeID
     */
    public function getHierarchyLevelID()
    {
      return $this->HierarchyLevelID;
    }

    /**
     * @param typeID $HierarchyLevelID
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSummary
     */
    public function setHierarchyLevelID($HierarchyLevelID)
    {
      $this->HierarchyLevelID = $HierarchyLevelID;
      return $this;
    }

    /**
     * @return typeProfileEntityStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeProfileEntityStatus $Status
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typeVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeVersion $Version
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSummary
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getControl()
    {
      return $this->Control;
    }

    /**
     * @param boolean $Control
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSummary
     */
    public function setControl($Control)
    {
      $this->Control = $Control;
      return $this;
    }

    /**
     * @return typeDescription
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param typeDescription $Description
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSummary
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSummary
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeProfileType $ProfileType
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSummary
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
