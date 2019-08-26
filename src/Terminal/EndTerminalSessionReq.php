<?php

namespace FilippoToso\Travelport\Terminal;

class EndTerminalSessionReq extends BaseReq
{

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

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
     * @param HostToken $HostToken
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $HostToken)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->HostToken = $HostToken;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\Terminal\EndTerminalSessionReq
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

}
