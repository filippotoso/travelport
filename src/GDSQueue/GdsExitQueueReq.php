<?php

namespace FilippoToso\Travelport\GDSQueue;

class GdsExitQueueReq extends BaseReq
{

    /**
     * @var QueuePseudoCitySelector $QueuePseudoCitySelector
     */
    protected $QueuePseudoCitySelector = null;

    /**
     * @var string $QueueSessionToken
     */
    protected $QueueSessionToken = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var boolean $RemoveCurrent
     */
    protected $RemoveCurrent = null;

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
     * @param string $QueueSessionToken
     * @param typeProviderCode $ProviderCode
     * @param boolean $RemoveCurrent
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $QueuePseudoCitySelector = null, $QueueSessionToken = null, $ProviderCode = null, $RemoveCurrent = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->QueuePseudoCitySelector = $QueuePseudoCitySelector;
      $this->QueueSessionToken = $QueueSessionToken;
      $this->ProviderCode = $ProviderCode;
      $this->RemoveCurrent = $RemoveCurrent;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsExitQueueReq
     */
    public function setQueuePseudoCitySelector($QueuePseudoCitySelector)
    {
      $this->QueuePseudoCitySelector = $QueuePseudoCitySelector;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueSessionToken()
    {
      return $this->QueueSessionToken;
    }

    /**
     * @param string $QueueSessionToken
     * @return \FilippoToso\Travelport\GDSQueue\GdsExitQueueReq
     */
    public function setQueueSessionToken($QueueSessionToken)
    {
      $this->QueueSessionToken = $QueueSessionToken;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsExitQueueReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveCurrent()
    {
      return $this->RemoveCurrent;
    }

    /**
     * @param boolean $RemoveCurrent
     * @return \FilippoToso\Travelport\GDSQueue\GdsExitQueueReq
     */
    public function setRemoveCurrent($RemoveCurrent)
    {
      $this->RemoveCurrent = $RemoveCurrent;
      return $this;
    }

}
