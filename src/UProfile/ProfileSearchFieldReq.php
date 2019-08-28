<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSearchFieldReq extends BaseReq
{

    /**
     * @var ProfileSearchModifiers $ProfileSearchModifiers
     */
    protected $ProfileSearchModifiers = null;

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

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
     * @param ProfileSearchModifiers $ProfileSearchModifiers
     * @param typeProfileID $ProfileID
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProfileSearchModifiers = null, $ProfileID = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProfileSearchModifiers = $ProfileSearchModifiers;
      $this->ProfileID = $ProfileID;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchFieldReq
     */
    public function setProfileSearchModifiers($ProfileSearchModifiers)
    {
      $this->ProfileSearchModifiers = $ProfileSearchModifiers;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchFieldReq
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

}
