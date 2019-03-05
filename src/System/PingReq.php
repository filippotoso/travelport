<?php

namespace FilippoToso\Travelport\System;

class PingReq extends BaseReq
{

    /**
     * @var Payload $Payload
     */
    protected $Payload = null;

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
     * @param Payload $Payload
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $Payload = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->Payload = $Payload;
    }

    /**
     * @return Payload
     */
    public function getPayload()
    {
      return $this->Payload;
    }

    /**
     * @param Payload $Payload
     * @return \FilippoToso\Travelport\System\PingReq
     */
    public function setPayload($Payload)
    {
      $this->Payload = $Payload;
      return $this;
    }

}
