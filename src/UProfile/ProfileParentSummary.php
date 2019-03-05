<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileParentSummary
{

    /**
     * @var ProfileParentSummary $ProfileParentSummary
     */
    protected $ProfileParentSummary = null;

    /**
     * @var typeProvisioningCode $ProvisioningCode
     */
    protected $ProvisioningCode = null;

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var typeVersion $Version
     */
    protected $Version = null;

    /**
     * @var typeID $HierarchyLevelID
     */
    protected $HierarchyLevelID = null;

    /**
     * @var typeProfileEntityStatus $Status
     */
    protected $Status = null;

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
     * @param ProfileParentSummary $ProfileParentSummary
     * @param typeProvisioningCode $ProvisioningCode
     * @param StringLength1to128 $Name
     * @param typeVersion $Version
     * @param typeID $HierarchyLevelID
     * @param typeProfileEntityStatus $Status
     * @param typeDescription $Description
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     */
    public function __construct($ProfileParentSummary = null, $ProvisioningCode = null, $Name = null, $Version = null, $HierarchyLevelID = null, $Status = null, $Description = null, $ProfileID = null, $ProfileType = null)
    {
      $this->ProfileParentSummary = $ProfileParentSummary;
      $this->ProvisioningCode = $ProvisioningCode;
      $this->Name = $Name;
      $this->Version = $Version;
      $this->HierarchyLevelID = $HierarchyLevelID;
      $this->Status = $Status;
      $this->Description = $Description;
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return ProfileParentSummary
     */
    public function getProfileParentSummary()
    {
      return $this->ProfileParentSummary;
    }

    /**
     * @param ProfileParentSummary $ProfileParentSummary
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSummary
     */
    public function setProfileParentSummary($ProfileParentSummary)
    {
      $this->ProfileParentSummary = $ProfileParentSummary;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getProvisioningCode()
    {
      return $this->ProvisioningCode;
    }

    /**
     * @param typeProvisioningCode $ProvisioningCode
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSummary
     */
    public function setProvisioningCode($ProvisioningCode)
    {
      $this->ProvisioningCode = $ProvisioningCode;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSummary
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSummary
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSummary
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSummary
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSummary
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSummary
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
