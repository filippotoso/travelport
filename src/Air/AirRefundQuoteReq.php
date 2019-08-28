<?php

namespace FilippoToso\Travelport\Air;

class AirRefundQuoteReq extends BaseReq
{

    /**
     * @var StringLength1to13 $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var typeTCRNumber[] $TCRNumber
     */
    protected $TCRNumber = null;

    /**
     * @var AirRefundModifiers $AirRefundModifiers
     */
    protected $AirRefundModifiers = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var ProviderReservationInfo[] $ProviderReservationInfo
     */
    protected $ProviderReservationInfo = null;

    /**
     * @var boolean $Ignore
     */
    protected $Ignore = null;

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
     * @param StringLength1to13 $TicketNumber
     * @param AirRefundModifiers $AirRefundModifiers
     * @param HostToken $HostToken
     * @param boolean $Ignore
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $TicketNumber = null, $AirRefundModifiers = null, $HostToken = null, $Ignore = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->TicketNumber = $TicketNumber;
      $this->AirRefundModifiers = $AirRefundModifiers;
      $this->HostToken = $HostToken;
      $this->Ignore = $Ignore;
    }

    /**
     * @return StringLength1to13
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param StringLength1to13 $TicketNumber
     * @return \FilippoToso\Travelport\Air\AirRefundQuoteReq
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return typeTCRNumber[]
     */
    public function getTCRNumber()
    {
      return $this->TCRNumber;
    }

    /**
     * @param typeTCRNumber[] $TCRNumber
     * @return \FilippoToso\Travelport\Air\AirRefundQuoteReq
     */
    public function setTCRNumber(array $TCRNumber = null)
    {
      $this->TCRNumber = $TCRNumber;
      return $this;
    }

    /**
     * @return AirRefundModifiers
     */
    public function getAirRefundModifiers()
    {
      return $this->AirRefundModifiers;
    }

    /**
     * @param AirRefundModifiers $AirRefundModifiers
     * @return \FilippoToso\Travelport\Air\AirRefundQuoteReq
     */
    public function setAirRefundModifiers($AirRefundModifiers)
    {
      $this->AirRefundModifiers = $AirRefundModifiers;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\AirRefundQuoteReq
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return ProviderReservationInfo[]
     */
    public function getProviderReservationInfo()
    {
      return $this->ProviderReservationInfo;
    }

    /**
     * @param ProviderReservationInfo[] $ProviderReservationInfo
     * @return \FilippoToso\Travelport\Air\AirRefundQuoteReq
     */
    public function setProviderReservationInfo(array $ProviderReservationInfo = null)
    {
      $this->ProviderReservationInfo = $ProviderReservationInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnore()
    {
      return $this->Ignore;
    }

    /**
     * @param boolean $Ignore
     * @return \FilippoToso\Travelport\Air\AirRefundQuoteReq
     */
    public function setIgnore($Ignore)
    {
      $this->Ignore = $Ignore;
      return $this;
    }

}
