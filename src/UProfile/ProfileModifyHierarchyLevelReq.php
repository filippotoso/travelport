<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyHierarchyLevelReq extends BaseReq
{

    /**
     * @var typeHierarchyName $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var typeID $ParentHierarchyLevelID
     */
    protected $ParentHierarchyLevelID = null;

    /**
     * @var typeID $HierarchyLevelID
     */
    protected $HierarchyLevelID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param typeHierarchyName $Name
     * @param StringLength1to255 $Description
     * @param typeID $ParentHierarchyLevelID
     * @param typeID $HierarchyLevelID
     * @param typeProfileType $ProfileType
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $Name = null, $Description = null, $ParentHierarchyLevelID = null, $HierarchyLevelID = null, $ProfileType = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->Name = $Name;
      $this->Description = $Description;
      $this->ParentHierarchyLevelID = $ParentHierarchyLevelID;
      $this->HierarchyLevelID = $HierarchyLevelID;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return typeHierarchyName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeHierarchyName $Name
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyHierarchyLevelReq
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyHierarchyLevelReq
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typeID
     */
    public function getParentHierarchyLevelID()
    {
      return $this->ParentHierarchyLevelID;
    }

    /**
     * @param typeID $ParentHierarchyLevelID
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyHierarchyLevelReq
     */
    public function setParentHierarchyLevelID($ParentHierarchyLevelID)
    {
      $this->ParentHierarchyLevelID = $ParentHierarchyLevelID;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyHierarchyLevelReq
     */
    public function setHierarchyLevelID($HierarchyLevelID)
    {
      $this->HierarchyLevelID = $HierarchyLevelID;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyHierarchyLevelReq
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
