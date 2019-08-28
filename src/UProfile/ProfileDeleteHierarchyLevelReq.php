<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileDeleteHierarchyLevelReq extends BaseReq
{

    /**
     * @var typeID $HierarchyLevelID
     */
    protected $HierarchyLevelID = null;

    /**
     * @var typeDeleteHierarchyLvlProfileType $ProfileType
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
     * @param typeID $HierarchyLevelID
     * @param typeDeleteHierarchyLvlProfileType $ProfileType
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $HierarchyLevelID = null, $ProfileType = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->HierarchyLevelID = $HierarchyLevelID;
      $this->ProfileType = $ProfileType;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDeleteHierarchyLevelReq
     */
    public function setHierarchyLevelID($HierarchyLevelID)
    {
      $this->HierarchyLevelID = $HierarchyLevelID;
      return $this;
    }

    /**
     * @return typeDeleteHierarchyLvlProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeDeleteHierarchyLvlProfileType $ProfileType
     * @return \FilippoToso\Travelport\UProfile\ProfileDeleteHierarchyLevelReq
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
