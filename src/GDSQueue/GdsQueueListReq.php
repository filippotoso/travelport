<?php

namespace FilippoToso\Travelport\GDSQueue;

class GdsQueueListReq extends BaseReq
{

    /**
     * @var NextResultReference $NextResultReference
     */
    protected $NextResultReference = null;

    /**
     * @var QueueSelectorType $GdsQueueSelector
     */
    protected $GdsQueueSelector = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var boolean $RetrieveAll
     */
    protected $RetrieveAll = null;

    /**
     * @var string $QueueSessionToken
     */
    protected $QueueSessionToken = null;

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
     * @param NextResultReference $NextResultReference
     * @param QueueSelectorType $GdsQueueSelector
     * @param typeProviderCode $ProviderCode
     * @param typePCC $PseudoCityCode
     * @param boolean $RetrieveAll
     * @param string $QueueSessionToken
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null, $GdsQueueSelector = null, $ProviderCode = null, $PseudoCityCode = null, $RetrieveAll = null, $QueueSessionToken = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->NextResultReference = $NextResultReference;
      $this->GdsQueueSelector = $GdsQueueSelector;
      $this->ProviderCode = $ProviderCode;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->RetrieveAll = $RetrieveAll;
      $this->QueueSessionToken = $QueueSessionToken;
    }

    /**
     * @return NextResultReference
     */
    public function getNextResultReference()
    {
      return $this->NextResultReference;
    }

    /**
     * @param NextResultReference $NextResultReference
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListReq
     */
    public function setNextResultReference($NextResultReference)
    {
      $this->NextResultReference = $NextResultReference;
      return $this;
    }

    /**
     * @return QueueSelectorType
     */
    public function getGdsQueueSelector()
    {
      return $this->GdsQueueSelector;
    }

    /**
     * @param QueueSelectorType $GdsQueueSelector
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListReq
     */
    public function setGdsQueueSelector($GdsQueueSelector)
    {
      $this->GdsQueueSelector = $GdsQueueSelector;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListReq
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRetrieveAll()
    {
      return $this->RetrieveAll;
    }

    /**
     * @param boolean $RetrieveAll
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListReq
     */
    public function setRetrieveAll($RetrieveAll)
    {
      $this->RetrieveAll = $RetrieveAll;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListReq
     */
    public function setQueueSessionToken($QueueSessionToken)
    {
      $this->QueueSessionToken = $QueueSessionToken;
      return $this;
    }

}
