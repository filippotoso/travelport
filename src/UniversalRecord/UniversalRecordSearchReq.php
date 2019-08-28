<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordSearchReq extends BaseReq
{

    /**
     * @var UniversalRecordSearchModifiers $UniversalRecordSearchModifiers
     */
    protected $UniversalRecordSearchModifiers = null;

    /**
     * @var TravelerCriteria $TravelerCriteria
     */
    protected $TravelerCriteria = null;

    /**
     * @var SearchAgent $SearchAgent
     */
    protected $SearchAgent = null;

    /**
     * @var AirReservationCriteria $AirReservationCriteria
     */
    protected $AirReservationCriteria = null;

    /**
     * @var HotelReservationCriteria $HotelReservationCriteria
     */
    protected $HotelReservationCriteria = null;

    /**
     * @var VehicleReservationCriteria $VehicleReservationCriteria
     */
    protected $VehicleReservationCriteria = null;

    /**
     * @var RailReservationCriteria $RailReservationCriteria
     */
    protected $RailReservationCriteria = null;

    /**
     * @var SearchAccount $SearchAccount
     */
    protected $SearchAccount = null;

    /**
     * @var date $ActionDate
     */
    protected $ActionDate = null;

    /**
     * @var typeRecordStatus $RecordStatus
     */
    protected $RecordStatus = null;

    /**
     * @var string $ClientId
     */
    protected $ClientId = null;

    /**
     * @var string $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var string $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @var typeExternalSearchIndex $ExternalSearchIndex
     */
    protected $ExternalSearchIndex = null;

    /**
     * @var UNKNOWN $RestrictToProfileId
     */
    protected $RestrictToProfileId = null;

    /**
     * @var boolean $PassiveOnly
     */
    protected $PassiveOnly = null;

    /**
     * @var URTicketStatus $TicketStatus
     */
    protected $TicketStatus = null;

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
     * @param UniversalRecordSearchModifiers $UniversalRecordSearchModifiers
     * @param TravelerCriteria $TravelerCriteria
     * @param SearchAgent $SearchAgent
     * @param AirReservationCriteria $AirReservationCriteria
     * @param HotelReservationCriteria $HotelReservationCriteria
     * @param VehicleReservationCriteria $VehicleReservationCriteria
     * @param RailReservationCriteria $RailReservationCriteria
     * @param SearchAccount $SearchAccount
     * @param date $ActionDate
     * @param typeRecordStatus $RecordStatus
     * @param string $ClientId
     * @param string $ProviderCode
     * @param string $ProviderLocatorCode
     * @param typeExternalSearchIndex $ExternalSearchIndex
     * @param UNKNOWN $RestrictToProfileId
     * @param boolean $PassiveOnly
     * @param URTicketStatus $TicketStatus
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $UniversalRecordSearchModifiers = null, $TravelerCriteria = null, $SearchAgent = null, $AirReservationCriteria = null, $HotelReservationCriteria = null, $VehicleReservationCriteria = null, $RailReservationCriteria = null, $SearchAccount = null, $ActionDate = null, $RecordStatus = null, $ClientId = null, $ProviderCode = null, $ProviderLocatorCode = null, $ExternalSearchIndex = null, $RestrictToProfileId = null, $PassiveOnly = null, $TicketStatus = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->UniversalRecordSearchModifiers = $UniversalRecordSearchModifiers;
      $this->TravelerCriteria = $TravelerCriteria;
      $this->SearchAgent = $SearchAgent;
      $this->AirReservationCriteria = $AirReservationCriteria;
      $this->HotelReservationCriteria = $HotelReservationCriteria;
      $this->VehicleReservationCriteria = $VehicleReservationCriteria;
      $this->RailReservationCriteria = $RailReservationCriteria;
      $this->SearchAccount = $SearchAccount;
      $this->ActionDate = $ActionDate;
      $this->RecordStatus = $RecordStatus;
      $this->ClientId = $ClientId;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->ExternalSearchIndex = $ExternalSearchIndex;
      $this->RestrictToProfileId = $RestrictToProfileId;
      $this->PassiveOnly = $PassiveOnly;
      $this->TicketStatus = $TicketStatus;
    }

    /**
     * @return UniversalRecordSearchModifiers
     */
    public function getUniversalRecordSearchModifiers()
    {
      return $this->UniversalRecordSearchModifiers;
    }

    /**
     * @param UniversalRecordSearchModifiers $UniversalRecordSearchModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setUniversalRecordSearchModifiers($UniversalRecordSearchModifiers)
    {
      $this->UniversalRecordSearchModifiers = $UniversalRecordSearchModifiers;
      return $this;
    }

    /**
     * @return TravelerCriteria
     */
    public function getTravelerCriteria()
    {
      return $this->TravelerCriteria;
    }

    /**
     * @param TravelerCriteria $TravelerCriteria
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setTravelerCriteria($TravelerCriteria)
    {
      $this->TravelerCriteria = $TravelerCriteria;
      return $this;
    }

    /**
     * @return SearchAgent
     */
    public function getSearchAgent()
    {
      return $this->SearchAgent;
    }

    /**
     * @param SearchAgent $SearchAgent
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setSearchAgent($SearchAgent)
    {
      $this->SearchAgent = $SearchAgent;
      return $this;
    }

    /**
     * @return AirReservationCriteria
     */
    public function getAirReservationCriteria()
    {
      return $this->AirReservationCriteria;
    }

    /**
     * @param AirReservationCriteria $AirReservationCriteria
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setAirReservationCriteria($AirReservationCriteria)
    {
      $this->AirReservationCriteria = $AirReservationCriteria;
      return $this;
    }

    /**
     * @return HotelReservationCriteria
     */
    public function getHotelReservationCriteria()
    {
      return $this->HotelReservationCriteria;
    }

    /**
     * @param HotelReservationCriteria $HotelReservationCriteria
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setHotelReservationCriteria($HotelReservationCriteria)
    {
      $this->HotelReservationCriteria = $HotelReservationCriteria;
      return $this;
    }

    /**
     * @return VehicleReservationCriteria
     */
    public function getVehicleReservationCriteria()
    {
      return $this->VehicleReservationCriteria;
    }

    /**
     * @param VehicleReservationCriteria $VehicleReservationCriteria
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setVehicleReservationCriteria($VehicleReservationCriteria)
    {
      $this->VehicleReservationCriteria = $VehicleReservationCriteria;
      return $this;
    }

    /**
     * @return RailReservationCriteria
     */
    public function getRailReservationCriteria()
    {
      return $this->RailReservationCriteria;
    }

    /**
     * @param RailReservationCriteria $RailReservationCriteria
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setRailReservationCriteria($RailReservationCriteria)
    {
      $this->RailReservationCriteria = $RailReservationCriteria;
      return $this;
    }

    /**
     * @return SearchAccount
     */
    public function getSearchAccount()
    {
      return $this->SearchAccount;
    }

    /**
     * @param SearchAccount $SearchAccount
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setSearchAccount($SearchAccount)
    {
      $this->SearchAccount = $SearchAccount;
      return $this;
    }

    /**
     * @return date
     */
    public function getActionDate()
    {
      return $this->ActionDate;
    }

    /**
     * @param date $ActionDate
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setActionDate($ActionDate)
    {
      $this->ActionDate = $ActionDate;
      return $this;
    }

    /**
     * @return typeRecordStatus
     */
    public function getRecordStatus()
    {
      return $this->RecordStatus;
    }

    /**
     * @param typeRecordStatus $RecordStatus
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setRecordStatus($RecordStatus)
    {
      $this->RecordStatus = $RecordStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
      return $this->ClientId;
    }

    /**
     * @param string $ClientId
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setClientId($ClientId)
    {
      $this->ClientId = $ClientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param string $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param string $ProviderLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return typeExternalSearchIndex
     */
    public function getExternalSearchIndex()
    {
      return $this->ExternalSearchIndex;
    }

    /**
     * @param typeExternalSearchIndex $ExternalSearchIndex
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setExternalSearchIndex($ExternalSearchIndex)
    {
      $this->ExternalSearchIndex = $ExternalSearchIndex;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getRestrictToProfileId()
    {
      return $this->RestrictToProfileId;
    }

    /**
     * @param UNKNOWN $RestrictToProfileId
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setRestrictToProfileId($RestrictToProfileId)
    {
      $this->RestrictToProfileId = $RestrictToProfileId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassiveOnly()
    {
      return $this->PassiveOnly;
    }

    /**
     * @param boolean $PassiveOnly
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setPassiveOnly($PassiveOnly)
    {
      $this->PassiveOnly = $PassiveOnly;
      return $this;
    }

    /**
     * @return URTicketStatus
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param URTicketStatus $TicketStatus
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchReq
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

}
