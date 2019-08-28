<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileRetrieveHistoryReq extends BaseReq
{

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var ProfileHistoryRetrieveCriteria $ProfileHistoryRetrieveCriteria
     */
    protected $ProfileHistoryRetrieveCriteria = null;

    /**
     * @var ProfileSearchModifiers $ProfileSearchModifiers
     */
    protected $ProfileSearchModifiers = null;

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
     * @param typeProfileID $ProfileID
     * @param ProfileHistoryRetrieveCriteria $ProfileHistoryRetrieveCriteria
     * @param ProfileSearchModifiers $ProfileSearchModifiers
     * @param boolean $ShowDataUnmasked
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProfileID = null, $ProfileHistoryRetrieveCriteria = null, $ProfileSearchModifiers = null, $ShowDataUnmasked = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProfileID = $ProfileID;
      $this->ProfileHistoryRetrieveCriteria = $ProfileHistoryRetrieveCriteria;
      $this->ProfileSearchModifiers = $ProfileSearchModifiers;
      $this->ShowDataUnmasked = $ShowDataUnmasked;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveHistoryReq
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return ProfileHistoryRetrieveCriteria
     */
    public function getProfileHistoryRetrieveCriteria()
    {
      return $this->ProfileHistoryRetrieveCriteria;
    }

    /**
     * @param ProfileHistoryRetrieveCriteria $ProfileHistoryRetrieveCriteria
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveHistoryReq
     */
    public function setProfileHistoryRetrieveCriteria($ProfileHistoryRetrieveCriteria)
    {
      $this->ProfileHistoryRetrieveCriteria = $ProfileHistoryRetrieveCriteria;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveHistoryReq
     */
    public function setProfileSearchModifiers($ProfileSearchModifiers)
    {
      $this->ProfileSearchModifiers = $ProfileSearchModifiers;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveHistoryReq
     */
    public function setShowDataUnmasked($ShowDataUnmasked)
    {
      $this->ShowDataUnmasked = $ShowDataUnmasked;
      return $this;
    }

}
