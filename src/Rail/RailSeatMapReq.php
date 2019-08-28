<?php

namespace FilippoToso\Travelport\Rail;

class RailSeatMapReq extends BaseReq
{

    /**
     * @var RailInfo $RailInfo
     */
    protected $RailInfo = null;

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
     * @param RailInfo $RailInfo
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $RailInfo = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->RailInfo = $RailInfo;
    }

    /**
     * @return RailInfo
     */
    public function getRailInfo()
    {
      return $this->RailInfo;
    }

    /**
     * @param RailInfo $RailInfo
     * @return \FilippoToso\Travelport\Rail\RailSeatMapReq
     */
    public function setRailInfo($RailInfo)
    {
      $this->RailInfo = $RailInfo;
      return $this;
    }

}
