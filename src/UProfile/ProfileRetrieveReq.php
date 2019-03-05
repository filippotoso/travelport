<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileRetrieveReq extends BaseReq
{

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var ProvisioningCode $ProvisioningCode
     */
    protected $ProvisioningCode = null;

    /**
     * @var UniqueProfileID $UniqueProfileID
     */
    protected $UniqueProfileID = null;

    /**
     * @var ProfileDataFilter $ProfileDataFilter
     */
    protected $ProfileDataFilter = null;

    /**
     * @var boolean $ReturnParent
     */
    protected $ReturnParent = null;

    /**
     * @var boolean $ReturnParentSummary
     */
    protected $ReturnParentSummary = null;

    /**
     * @var boolean $ShowDataUnmasked
     */
    protected $ShowDataUnmasked = null;

    /**
     * @var boolean $FullParentHierarchy
     */
    protected $FullParentHierarchy = null;

    /**
     * @var typeProfileID $ParentID
     */
    protected $ParentID = null;

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
     * @param typeProfileID $ProfileID
     * @param ProvisioningCode $ProvisioningCode
     * @param UniqueProfileID $UniqueProfileID
     * @param ProfileDataFilter $ProfileDataFilter
     * @param boolean $ReturnParent
     * @param boolean $ReturnParentSummary
     * @param boolean $ShowDataUnmasked
     * @param boolean $FullParentHierarchy
     * @param typeProfileID $ParentID
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProfileID = null, $ProvisioningCode = null, $UniqueProfileID = null, $ProfileDataFilter = null, $ReturnParent = null, $ReturnParentSummary = null, $ShowDataUnmasked = null, $FullParentHierarchy = null, $ParentID = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProfileID = $ProfileID;
      $this->ProvisioningCode = $ProvisioningCode;
      $this->UniqueProfileID = $UniqueProfileID;
      $this->ProfileDataFilter = $ProfileDataFilter;
      $this->ReturnParent = $ReturnParent;
      $this->ReturnParentSummary = $ReturnParentSummary;
      $this->ShowDataUnmasked = $ShowDataUnmasked;
      $this->FullParentHierarchy = $FullParentHierarchy;
      $this->ParentID = $ParentID;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveReq
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return ProvisioningCode
     */
    public function getProvisioningCode()
    {
      return $this->ProvisioningCode;
    }

    /**
     * @param ProvisioningCode $ProvisioningCode
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveReq
     */
    public function setProvisioningCode($ProvisioningCode)
    {
      $this->ProvisioningCode = $ProvisioningCode;
      return $this;
    }

    /**
     * @return UniqueProfileID
     */
    public function getUniqueProfileID()
    {
      return $this->UniqueProfileID;
    }

    /**
     * @param UniqueProfileID $UniqueProfileID
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveReq
     */
    public function setUniqueProfileID($UniqueProfileID)
    {
      $this->UniqueProfileID = $UniqueProfileID;
      return $this;
    }

    /**
     * @return ProfileDataFilter
     */
    public function getProfileDataFilter()
    {
      return $this->ProfileDataFilter;
    }

    /**
     * @param ProfileDataFilter $ProfileDataFilter
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveReq
     */
    public function setProfileDataFilter($ProfileDataFilter)
    {
      $this->ProfileDataFilter = $ProfileDataFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnParent()
    {
      return $this->ReturnParent;
    }

    /**
     * @param boolean $ReturnParent
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveReq
     */
    public function setReturnParent($ReturnParent)
    {
      $this->ReturnParent = $ReturnParent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnParentSummary()
    {
      return $this->ReturnParentSummary;
    }

    /**
     * @param boolean $ReturnParentSummary
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveReq
     */
    public function setReturnParentSummary($ReturnParentSummary)
    {
      $this->ReturnParentSummary = $ReturnParentSummary;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveReq
     */
    public function setShowDataUnmasked($ShowDataUnmasked)
    {
      $this->ShowDataUnmasked = $ShowDataUnmasked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFullParentHierarchy()
    {
      return $this->FullParentHierarchy;
    }

    /**
     * @param boolean $FullParentHierarchy
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveReq
     */
    public function setFullParentHierarchy($FullParentHierarchy)
    {
      $this->FullParentHierarchy = $FullParentHierarchy;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getParentID()
    {
      return $this->ParentID;
    }

    /**
     * @param typeProfileID $ParentID
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveReq
     */
    public function setParentID($ParentID)
    {
      $this->ParentID = $ParentID;
      return $this;
    }

}
