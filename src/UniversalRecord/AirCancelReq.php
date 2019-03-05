<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirCancelReq extends BaseReq
{

    /**
     * @var ContinuityCheckOverride $ContinuityCheckOverride
     */
    protected $ContinuityCheckOverride = null;

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    protected $AirReservationLocatorCode = null;

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var FileFinishingInfo $FileFinishingInfo
     */
    protected $FileFinishingInfo = null;

    /**
     * @var typeURVersion $Version
     */
    protected $Version = null;

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
     * @param ContinuityCheckOverride $ContinuityCheckOverride
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param typeBaseAirSegment $AirSegment
     * @param AirSegmentRef $AirSegmentRef
     * @param FileFinishingInfo $FileFinishingInfo
     * @param typeURVersion $Version
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ContinuityCheckOverride = null, $AirReservationLocatorCode = null, $AirSegment = null, $AirSegmentRef = null, $FileFinishingInfo = null, $Version = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ContinuityCheckOverride = $ContinuityCheckOverride;
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->AirSegment = $AirSegment;
      $this->AirSegmentRef = $AirSegmentRef;
      $this->FileFinishingInfo = $FileFinishingInfo;
      $this->Version = $Version;
    }

    /**
     * @return ContinuityCheckOverride
     */
    public function getContinuityCheckOverride()
    {
      return $this->ContinuityCheckOverride;
    }

    /**
     * @param ContinuityCheckOverride $ContinuityCheckOverride
     * @return \FilippoToso\Travelport\UniversalRecord\AirCancelReq
     */
    public function setContinuityCheckOverride($ContinuityCheckOverride)
    {
      $this->ContinuityCheckOverride = $ContinuityCheckOverride;
      return $this;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCancelReq
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \FilippoToso\Travelport\UniversalRecord\AirCancelReq
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return AirSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @return \FilippoToso\Travelport\UniversalRecord\AirCancelReq
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return FileFinishingInfo
     */
    public function getFileFinishingInfo()
    {
      return $this->FileFinishingInfo;
    }

    /**
     * @param FileFinishingInfo $FileFinishingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirCancelReq
     */
    public function setFileFinishingInfo($FileFinishingInfo)
    {
      $this->FileFinishingInfo = $FileFinishingInfo;
      return $this;
    }

    /**
     * @return typeURVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeURVersion $Version
     * @return \FilippoToso\Travelport\UniversalRecord\AirCancelReq
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
