<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSearchTagsReq extends BaseReq
{

    /**
     * @var typeProfileID $AgencyID
     */
    protected $AgencyID = null;

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
     * @param typeProfileID $AgencyID
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AgencyID = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AgencyID = $AgencyID;
    }

    /**
     * @return typeProfileID
     */
    public function getAgencyID()
    {
      return $this->AgencyID;
    }

    /**
     * @param typeProfileID $AgencyID
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchTagsReq
     */
    public function setAgencyID($AgencyID)
    {
      $this->AgencyID = $AgencyID;
      return $this;
    }

}
