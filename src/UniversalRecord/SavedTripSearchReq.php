<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SavedTripSearchReq extends BaseReq
{

    /**
     * @var SavedTripSearchModifiers $SavedTripSearchModifiers
     */
    protected $SavedTripSearchModifiers = null;

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
     * @var typeSavedTripRecordStatus $RecordStatus
     */
    protected $RecordStatus = null;

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
     * @param SavedTripSearchModifiers $SavedTripSearchModifiers
     * @param TravelerCriteria $TravelerCriteria
     * @param SearchAgent $SearchAgent
     * @param AirReservationCriteria $AirReservationCriteria
     * @param HotelReservationCriteria $HotelReservationCriteria
     * @param VehicleReservationCriteria $VehicleReservationCriteria
     * @param RailReservationCriteria $RailReservationCriteria
     * @param typeSavedTripRecordStatus $RecordStatus
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $SavedTripSearchModifiers = null, $TravelerCriteria = null, $SearchAgent = null, $AirReservationCriteria = null, $HotelReservationCriteria = null, $VehicleReservationCriteria = null, $RailReservationCriteria = null, $RecordStatus = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->SavedTripSearchModifiers = $SavedTripSearchModifiers;
      $this->TravelerCriteria = $TravelerCriteria;
      $this->SearchAgent = $SearchAgent;
      $this->AirReservationCriteria = $AirReservationCriteria;
      $this->HotelReservationCriteria = $HotelReservationCriteria;
      $this->VehicleReservationCriteria = $VehicleReservationCriteria;
      $this->RailReservationCriteria = $RailReservationCriteria;
      $this->RecordStatus = $RecordStatus;
    }

    /**
     * @return SavedTripSearchModifiers
     */
    public function getSavedTripSearchModifiers()
    {
      return $this->SavedTripSearchModifiers;
    }

    /**
     * @param SavedTripSearchModifiers $SavedTripSearchModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripSearchReq
     */
    public function setSavedTripSearchModifiers($SavedTripSearchModifiers)
    {
      $this->SavedTripSearchModifiers = $SavedTripSearchModifiers;
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
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripSearchReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripSearchReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripSearchReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripSearchReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripSearchReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripSearchReq
     */
    public function setRailReservationCriteria($RailReservationCriteria)
    {
      $this->RailReservationCriteria = $RailReservationCriteria;
      return $this;
    }

    /**
     * @return typeSavedTripRecordStatus
     */
    public function getRecordStatus()
    {
      return $this->RecordStatus;
    }

    /**
     * @param typeSavedTripRecordStatus $RecordStatus
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripSearchReq
     */
    public function setRecordStatus($RecordStatus)
    {
      $this->RecordStatus = $RecordStatus;
      return $this;
    }

}
