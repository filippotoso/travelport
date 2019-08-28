<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeEligibilityReq extends BaseReq
{

    /**
     * @var ProviderReservationInfo $ProviderReservationInfo
     */
    protected $ProviderReservationInfo = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

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
     * @param ProviderReservationInfo $ProviderReservationInfo
     * @param string $Type
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProviderReservationInfo = null, $Type = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProviderReservationInfo = $ProviderReservationInfo;
      $this->Type = $Type;
    }

    /**
     * @return ProviderReservationInfo
     */
    public function getProviderReservationInfo()
    {
      return $this->ProviderReservationInfo;
    }

    /**
     * @param ProviderReservationInfo $ProviderReservationInfo
     * @return \FilippoToso\Travelport\Air\AirExchangeEligibilityReq
     */
    public function setProviderReservationInfo($ProviderReservationInfo)
    {
      $this->ProviderReservationInfo = $ProviderReservationInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Air\AirExchangeEligibilityReq
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
