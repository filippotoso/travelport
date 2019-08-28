<?php

namespace FilippoToso\Travelport\GDSQueue;

class GdsQueueCountReq extends BaseReq
{

    /**
     * @var QueuePseudoCitySelector $QueuePseudoCitySelector
     */
    protected $QueuePseudoCitySelector = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

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
     * @param QueuePseudoCitySelector $QueuePseudoCitySelector
     * @param typeProviderCode $ProviderCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $QueuePseudoCitySelector = null, $ProviderCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->QueuePseudoCitySelector = $QueuePseudoCitySelector;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return QueuePseudoCitySelector
     */
    public function getQueuePseudoCitySelector()
    {
      return $this->QueuePseudoCitySelector;
    }

    /**
     * @param QueuePseudoCitySelector $QueuePseudoCitySelector
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueCountReq
     */
    public function setQueuePseudoCitySelector($QueuePseudoCitySelector)
    {
      $this->QueuePseudoCitySelector = $QueuePseudoCitySelector;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueCountReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
