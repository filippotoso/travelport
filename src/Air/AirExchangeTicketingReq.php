<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeTicketingReq extends BaseReq
{

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    protected $AirReservationLocatorCode = null;

    /**
     * @var StringLength1to13 $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var typeTicketingModifiersRef[] $TicketingModifiersRef
     */
    protected $TicketingModifiersRef = null;

    /**
     * @var WaiverCode $WaiverCode
     */
    protected $WaiverCode = null;

    /**
     * @var DetailedBillingInformation $DetailedBillingInformation
     */
    protected $DetailedBillingInformation = null;

    /**
     * @var AirTicketingModifiers $AirTicketingModifiers
     */
    protected $AirTicketingModifiers = null;

    /**
     * @var boolean $BulkTicket
     */
    protected $BulkTicket = null;

    /**
     * @var boolean $ChangeFeeOnTicket
     */
    protected $ChangeFeeOnTicket = null;

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
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param StringLength1to13 $TicketNumber
     * @param WaiverCode $WaiverCode
     * @param DetailedBillingInformation $DetailedBillingInformation
     * @param AirTicketingModifiers $AirTicketingModifiers
     * @param boolean $BulkTicket
     * @param boolean $ChangeFeeOnTicket
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirReservationLocatorCode = null, $TicketNumber = null, $WaiverCode = null, $DetailedBillingInformation = null, $AirTicketingModifiers = null, $BulkTicket = null, $ChangeFeeOnTicket = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->TicketNumber = $TicketNumber;
      $this->WaiverCode = $WaiverCode;
      $this->DetailedBillingInformation = $DetailedBillingInformation;
      $this->AirTicketingModifiers = $AirTicketingModifiers;
      $this->BulkTicket = $BulkTicket;
      $this->ChangeFeeOnTicket = $ChangeFeeOnTicket;
    }

    /**
     * @return AirReservationLocatorCode
     */
    public function getAirReservationLocatorCode()
    {
      return $this->AirReservationLocatorCode;
    }

    /**
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingReq
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingReq
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return typeTicketingModifiersRef[]
     */
    public function getTicketingModifiersRef()
    {
      return $this->TicketingModifiersRef;
    }

    /**
     * @param typeTicketingModifiersRef[] $TicketingModifiersRef
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingReq
     */
    public function setTicketingModifiersRef(array $TicketingModifiersRef = null)
    {
      $this->TicketingModifiersRef = $TicketingModifiersRef;
      return $this;
    }

    /**
     * @return WaiverCode
     */
    public function getWaiverCode()
    {
      return $this->WaiverCode;
    }

    /**
     * @param WaiverCode $WaiverCode
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingReq
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
      return $this;
    }

    /**
     * @return DetailedBillingInformation
     */
    public function getDetailedBillingInformation()
    {
      return $this->DetailedBillingInformation;
    }

    /**
     * @param DetailedBillingInformation $DetailedBillingInformation
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingReq
     */
    public function setDetailedBillingInformation($DetailedBillingInformation)
    {
      $this->DetailedBillingInformation = $DetailedBillingInformation;
      return $this;
    }

    /**
     * @return AirTicketingModifiers
     */
    public function getAirTicketingModifiers()
    {
      return $this->AirTicketingModifiers;
    }

    /**
     * @param AirTicketingModifiers $AirTicketingModifiers
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingReq
     */
    public function setAirTicketingModifiers($AirTicketingModifiers)
    {
      $this->AirTicketingModifiers = $AirTicketingModifiers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBulkTicket()
    {
      return $this->BulkTicket;
    }

    /**
     * @param boolean $BulkTicket
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingReq
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChangeFeeOnTicket()
    {
      return $this->ChangeFeeOnTicket;
    }

    /**
     * @param boolean $ChangeFeeOnTicket
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingReq
     */
    public function setChangeFeeOnTicket($ChangeFeeOnTicket)
    {
      $this->ChangeFeeOnTicket = $ChangeFeeOnTicket;
      return $this;
    }

}
