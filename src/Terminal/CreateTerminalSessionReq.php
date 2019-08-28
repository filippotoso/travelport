<?php

namespace FilippoToso\Travelport\Terminal;

class CreateTerminalSessionReq extends BaseReq
{

    /**
     * @var typeProviderCode $Host
     */
    protected $Host = null;

    /**
     * @var int $SessionTimeout
     */
    protected $SessionTimeout = null;

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
     * @param typeProviderCode $Host
     * @param int $SessionTimeout
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $Host = null, $SessionTimeout = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->Host = $Host;
      $this->SessionTimeout = $SessionTimeout;
    }

    /**
     * @return typeProviderCode
     */
    public function getHost()
    {
      return $this->Host;
    }

    /**
     * @param typeProviderCode $Host
     * @return \FilippoToso\Travelport\Terminal\CreateTerminalSessionReq
     */
    public function setHost($Host)
    {
      $this->Host = $Host;
      return $this;
    }

    /**
     * @return int
     */
    public function getSessionTimeout()
    {
      return $this->SessionTimeout;
    }

    /**
     * @param int $SessionTimeout
     * @return \FilippoToso\Travelport\Terminal\CreateTerminalSessionReq
     */
    public function setSessionTimeout($SessionTimeout)
    {
      $this->SessionTimeout = $SessionTimeout;
      return $this;
    }

}
