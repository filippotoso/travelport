<?php

namespace FilippoToso\Travelport\GDSQueue;

class GdsQueueRemoveReq extends BaseReq
{

    /**
     * @var QueueSelector $QueueSelector
     */
    protected $QueueSelector = null;

    /**
     * @var string $QueueSessionToken
     */
    protected $QueueSessionToken = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @var boolean $RemoveDuplicates
     */
    protected $RemoveDuplicates = null;

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
     * @param QueueSelector $QueueSelector
     * @param string $QueueSessionToken
     * @param typePCC $PseudoCityCode
     * @param typeProviderCode $ProviderCode
     * @param typeLocatorCode $ProviderLocatorCode
     * @param boolean $RemoveDuplicates
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $QueueSelector = null, $QueueSessionToken = null, $PseudoCityCode = null, $ProviderCode = null, $ProviderLocatorCode = null, $RemoveDuplicates = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->QueueSelector = $QueueSelector;
      $this->QueueSessionToken = $QueueSessionToken;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->RemoveDuplicates = $RemoveDuplicates;
    }

    /**
     * @return QueueSelector
     */
    public function getQueueSelector()
    {
      return $this->QueueSelector;
    }

    /**
     * @param QueueSelector $QueueSelector
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueRemoveReq
     */
    public function setQueueSelector($QueueSelector)
    {
      $this->QueueSelector = $QueueSelector;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueRemoveReq
     */
    public function setQueueSessionToken($QueueSessionToken)
    {
      $this->QueueSessionToken = $QueueSessionToken;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueRemoveReq
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueRemoveReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueRemoveReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveDuplicates()
    {
      return $this->RemoveDuplicates;
    }

    /**
     * @param boolean $RemoveDuplicates
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueRemoveReq
     */
    public function setRemoveDuplicates($RemoveDuplicates)
    {
      $this->RemoveDuplicates = $RemoveDuplicates;
      return $this;
    }

}
