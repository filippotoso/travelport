<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSearchReq extends BaseReq
{

    /**
     * @var ProfileTypeSearch $ProfileTypeSearch
     */
    protected $ProfileTypeSearch = null;

    /**
     * @var ProfileSearch $ProfileSearch
     */
    protected $ProfileSearch = null;

    /**
     * @var ProfileSearchModifiers $ProfileSearchModifiers
     */
    protected $ProfileSearchModifiers = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var UNKNOWN $ProfileParentID
     */
    protected $ProfileParentID = null;

    /**
     * @var boolean $ReturnParentSummary
     */
    protected $ReturnParentSummary = null;

    /**
     * @var StringLength1to128 $SearchToken
     */
    protected $SearchToken = null;

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
     * @param ProfileTypeSearch $ProfileTypeSearch
     * @param ProfileSearch $ProfileSearch
     * @param ProfileSearchModifiers $ProfileSearchModifiers
     * @param typeProfileType $ProfileType
     * @param UNKNOWN $ProfileParentID
     * @param boolean $ReturnParentSummary
     * @param StringLength1to128 $SearchToken
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProfileTypeSearch = null, $ProfileSearch = null, $ProfileSearchModifiers = null, $ProfileType = null, $ProfileParentID = null, $ReturnParentSummary = null, $SearchToken = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProfileTypeSearch = $ProfileTypeSearch;
      $this->ProfileSearch = $ProfileSearch;
      $this->ProfileSearchModifiers = $ProfileSearchModifiers;
      $this->ProfileType = $ProfileType;
      $this->ProfileParentID = $ProfileParentID;
      $this->ReturnParentSummary = $ReturnParentSummary;
      $this->SearchToken = $SearchToken;
    }

    /**
     * @return ProfileTypeSearch
     */
    public function getProfileTypeSearch()
    {
      return $this->ProfileTypeSearch;
    }

    /**
     * @param ProfileTypeSearch $ProfileTypeSearch
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchReq
     */
    public function setProfileTypeSearch($ProfileTypeSearch)
    {
      $this->ProfileTypeSearch = $ProfileTypeSearch;
      return $this;
    }

    /**
     * @return ProfileSearch
     */
    public function getProfileSearch()
    {
      return $this->ProfileSearch;
    }

    /**
     * @param ProfileSearch $ProfileSearch
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchReq
     */
    public function setProfileSearch($ProfileSearch)
    {
      $this->ProfileSearch = $ProfileSearch;
      return $this;
    }

    /**
     * @return ProfileSearchModifiers
     */
    public function getProfileSearchModifiers()
    {
      return $this->ProfileSearchModifiers;
    }

    /**
     * @param ProfileSearchModifiers $ProfileSearchModifiers
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchReq
     */
    public function setProfileSearchModifiers($ProfileSearchModifiers)
    {
      $this->ProfileSearchModifiers = $ProfileSearchModifiers;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchReq
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getProfileParentID()
    {
      return $this->ProfileParentID;
    }

    /**
     * @param UNKNOWN $ProfileParentID
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchReq
     */
    public function setProfileParentID($ProfileParentID)
    {
      $this->ProfileParentID = $ProfileParentID;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchReq
     */
    public function setReturnParentSummary($ReturnParentSummary)
    {
      $this->ReturnParentSummary = $ReturnParentSummary;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSearchToken()
    {
      return $this->SearchToken;
    }

    /**
     * @param StringLength1to128 $SearchToken
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchReq
     */
    public function setSearchToken($SearchToken)
    {
      $this->SearchToken = $SearchToken;
      return $this;
    }

}
