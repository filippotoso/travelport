<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SavedTripCreateReq extends BaseReq
{

    /**
     * @var SavedTrip $SavedTrip
     */
    protected $SavedTrip = null;

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
     * @param SavedTrip $SavedTrip
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $SavedTrip = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->SavedTrip = $SavedTrip;
    }

    /**
     * @return SavedTrip
     */
    public function getSavedTrip()
    {
      return $this->SavedTrip;
    }

    /**
     * @param SavedTrip $SavedTrip
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripCreateReq
     */
    public function setSavedTrip($SavedTrip)
    {
      $this->SavedTrip = $SavedTrip;
      return $this;
    }

}
