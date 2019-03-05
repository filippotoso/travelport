<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileCreateReq extends BaseReq
{

    /**
     * @var ProfileParent $ProfileParent
     */
    protected $ProfileParent = null;

    /**
     * @var ProfileData $ProfileData
     */
    protected $ProfileData = null;

    /**
     * @var ProfileLink $ProfileLink
     */
    protected $ProfileLink = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var typeProfileEntityStatus $Status
     */
    protected $Status = null;

    /**
     * @var typeTemplateID $TemplateID
     */
    protected $TemplateID = null;

    /**
     * @var typeVersion $TemplateVersion
     */
    protected $TemplateVersion = null;

    /**
     * @var typeID $HierarchyLevelID
     */
    protected $HierarchyLevelID = null;

    /**
     * @var boolean $ReturnProfile
     */
    protected $ReturnProfile = null;

    /**
     * @var boolean $ShowDataUnmasked
     */
    protected $ShowDataUnmasked = null;

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
     * @param ProfileData $ProfileData
     * @param ProfileLink $ProfileLink
     * @param typeProfileType $ProfileType
     * @param typeProfileEntityStatus $Status
     * @param typeTemplateID $TemplateID
     * @param typeVersion $TemplateVersion
     * @param typeID $HierarchyLevelID
     * @param boolean $ReturnProfile
     * @param boolean $ShowDataUnmasked
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProfileData = null, $ProfileLink = null, $ProfileType = null, $Status = null, $TemplateID = null, $TemplateVersion = null, $HierarchyLevelID = null, $ReturnProfile = null, $ShowDataUnmasked = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProfileData = $ProfileData;
      $this->ProfileLink = $ProfileLink;
      $this->ProfileType = $ProfileType;
      $this->Status = $Status;
      $this->TemplateID = $TemplateID;
      $this->TemplateVersion = $TemplateVersion;
      $this->HierarchyLevelID = $HierarchyLevelID;
      $this->ReturnProfile = $ReturnProfile;
      $this->ShowDataUnmasked = $ShowDataUnmasked;
    }

    /**
     * @return ProfileParent
     */
    public function getProfileParent()
    {
      return $this->ProfileParent;
    }

    /**
     * @param ProfileParent $ProfileParent
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setProfileParent($ProfileParent)
    {
      $this->ProfileParent = $ProfileParent;
      return $this;
    }

    /**
     * @return ProfileData
     */
    public function getProfileData()
    {
      return $this->ProfileData;
    }

    /**
     * @param ProfileData $ProfileData
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setProfileData($ProfileData)
    {
      $this->ProfileData = $ProfileData;
      return $this;
    }

    /**
     * @return ProfileLink
     */
    public function getProfileLink()
    {
      return $this->ProfileLink;
    }

    /**
     * @param ProfileLink $ProfileLink
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setProfileLink($ProfileLink)
    {
      $this->ProfileLink = $ProfileLink;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typeTemplateID
     */
    public function getTemplateID()
    {
      return $this->TemplateID;
    }

    /**
     * @param typeTemplateID $TemplateID
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setTemplateID($TemplateID)
    {
      $this->TemplateID = $TemplateID;
      return $this;
    }

    /**
     * @return typeVersion
     */
    public function getTemplateVersion()
    {
      return $this->TemplateVersion;
    }

    /**
     * @param typeVersion $TemplateVersion
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setTemplateVersion($TemplateVersion)
    {
      $this->TemplateVersion = $TemplateVersion;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setHierarchyLevelID($HierarchyLevelID)
    {
      $this->HierarchyLevelID = $HierarchyLevelID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnProfile()
    {
      return $this->ReturnProfile;
    }

    /**
     * @param boolean $ReturnProfile
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setReturnProfile($ReturnProfile)
    {
      $this->ReturnProfile = $ReturnProfile;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowDataUnmasked()
    {
      return $this->ShowDataUnmasked;
    }

    /**
     * @param boolean $ShowDataUnmasked
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateReq
     */
    public function setShowDataUnmasked($ShowDataUnmasked)
    {
      $this->ShowDataUnmasked = $ShowDataUnmasked;
      return $this;
    }

}
