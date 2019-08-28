<?php

namespace FilippoToso\Travelport\Terminal;

class TerminalReq extends BaseReq
{

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var string $TerminalCommand
     */
    protected $TerminalCommand = null;

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
     * @param string $TerminalCommand
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $HostToken = null, $TerminalCommand = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->HostToken = $HostToken;
      $this->TerminalCommand = $TerminalCommand;
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
     * @return \FilippoToso\Travelport\Terminal\TerminalReq
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalCommand()
    {
      return $this->TerminalCommand;
    }

    /**
     * @param string $TerminalCommand
     * @return \FilippoToso\Travelport\Terminal\TerminalReq
     */
    public function setTerminalCommand($TerminalCommand)
    {
      $this->TerminalCommand = $TerminalCommand;
      return $this;
    }

}
