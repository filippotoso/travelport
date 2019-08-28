<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileParentSearchSummary
{

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
     * @var typeImmediateParentRef $ImmediateParentRef
     */
    protected $ImmediateParentRef = null;

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param typeProvisioningCode $ProvisioningCode
     * @param StringLength1to128 $Name
     * @param typeVersion $Version
     * @param typeID $HierarchyLevelID
     * @param typeProfileEntityStatus $Status
     * @param typeImmediateParentRef $ImmediateParentRef
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     */
    public function __construct($ProvisioningCode = null, $Name = null, $Version = null, $HierarchyLevelID = null, $Status = null, $ImmediateParentRef = null, $ProfileID = null, $ProfileType = null)
    {
      $this->ProvisioningCode = $ProvisioningCode;
      $this->Name = $Name;
      $this->Version = $Version;
      $this->HierarchyLevelID = $HierarchyLevelID;
      $this->Status = $Status;
      $this->ImmediateParentRef = $ImmediateParentRef;
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSearchSummary
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSearchSummary
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSearchSummary
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSearchSummary
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSearchSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typeImmediateParentRef
     */
    public function getImmediateParentRef()
    {
      return $this->ImmediateParentRef;
    }

    /**
     * @param typeImmediateParentRef $ImmediateParentRef
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSearchSummary
     */
    public function setImmediateParentRef($ImmediateParentRef)
    {
      $this->ImmediateParentRef = $ImmediateParentRef;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSearchSummary
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentSearchSummary
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
