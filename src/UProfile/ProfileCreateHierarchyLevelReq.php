<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileCreateHierarchyLevelReq extends BaseReq
{

    /**
     * @var typeProfileID $ParentHierarchyLevelID
     */
    protected $ParentHierarchyLevelID = null;

    /**
     * @var typeCreateHierarchyLevel $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var typeHierarchyName $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

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
     * @param typeProfileID $ParentHierarchyLevelID
     * @param typeCreateHierarchyLevel $ProfileType
     * @param typeHierarchyName $Name
     * @param StringLength1to255 $Description
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ParentHierarchyLevelID = null, $ProfileType = null, $Name = null, $Description = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ParentHierarchyLevelID = $ParentHierarchyLevelID;
      $this->ProfileType = $ProfileType;
      $this->Name = $Name;
      $this->Description = $Description;
    }

    /**
     * @return typeProfileID
     */
    public function getParentHierarchyLevelID()
    {
      return $this->ParentHierarchyLevelID;
    }

    /**
     * @param typeProfileID $ParentHierarchyLevelID
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateHierarchyLevelReq
     */
    public function setParentHierarchyLevelID($ParentHierarchyLevelID)
    {
      $this->ParentHierarchyLevelID = $ParentHierarchyLevelID;
      return $this;
    }

    /**
     * @return typeCreateHierarchyLevel
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeCreateHierarchyLevel $ProfileType
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateHierarchyLevelReq
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateHierarchyLevelReq
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
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateHierarchyLevelReq
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
