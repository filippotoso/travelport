<?php

namespace FilippoToso\Travelport\Air;

class AirTicketingReq extends AirBaseReq
{

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    protected $AirReservationLocatorCode = null;

    /**
     * @var AirPricingInfoRef[] $AirPricingInfoRef
     */
    protected $AirPricingInfoRef = null;

    /**
     * @var typeTicketingModifiersRef[] $TicketingModifiersRef
     */
    protected $TicketingModifiersRef = null;

    /**
     * @var WaiverCode $WaiverCode
     */
    protected $WaiverCode = null;

    /**
     * @var Commission $Commission
     */
    protected $Commission = null;

    /**
     * @var DetailedBillingInformation $DetailedBillingInformation
     */
    protected $DetailedBillingInformation = null;

    /**
     * @var FaxDetailsInformation $FaxDetailsInformation
     */
    protected $FaxDetailsInformation = null;

    /**
     * @var AirTicketingModifiers $AirTicketingModifiers
     */
    protected $AirTicketingModifiers = null;

    /**
     * @var AirSegmentTicketingModifiers $AirSegmentTicketingModifiers
     */
    protected $AirSegmentTicketingModifiers = null;

    /**
     * @var boolean $ReturnInfoOnFail
     */
    protected $ReturnInfoOnFail = null;

    /**
     * @var boolean $BulkTicket
     */
    protected $BulkTicket = null;

    /**
     * @var boolean $ValidateSpanishResidency
     */
    protected $ValidateSpanishResidency = null;

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
     * @param WaiverCode $WaiverCode
     * @param Commission $Commission
     * @param DetailedBillingInformation $DetailedBillingInformation
     * @param FaxDetailsInformation $FaxDetailsInformation
     * @param AirTicketingModifiers $AirTicketingModifiers
     * @param AirSegmentTicketingModifiers $AirSegmentTicketingModifiers
     * @param boolean $ReturnInfoOnFail
     * @param boolean $BulkTicket
     * @param boolean $ValidateSpanishResidency
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirReservationLocatorCode = null, $WaiverCode = null, $Commission = null, $DetailedBillingInformation = null, $FaxDetailsInformation = null, $AirTicketingModifiers = null, $AirSegmentTicketingModifiers = null, $ReturnInfoOnFail = null, $BulkTicket = null, $ValidateSpanishResidency = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->WaiverCode = $WaiverCode;
      $this->Commission = $Commission;
      $this->DetailedBillingInformation = $DetailedBillingInformation;
      $this->FaxDetailsInformation = $FaxDetailsInformation;
      $this->AirTicketingModifiers = $AirTicketingModifiers;
      $this->AirSegmentTicketingModifiers = $AirSegmentTicketingModifiers;
      $this->ReturnInfoOnFail = $ReturnInfoOnFail;
      $this->BulkTicket = $BulkTicket;
      $this->ValidateSpanishResidency = $ValidateSpanishResidency;
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
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
    }

    /**
     * @return AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param AirPricingInfoRef[] $AirPricingInfoRef
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setAirPricingInfoRef(array $AirPricingInfoRef = null)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
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
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
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
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
      return $this;
    }

    /**
     * @return Commission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param Commission $Commission
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
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
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setDetailedBillingInformation($DetailedBillingInformation)
    {
      $this->DetailedBillingInformation = $DetailedBillingInformation;
      return $this;
    }

    /**
     * @return FaxDetailsInformation
     */
    public function getFaxDetailsInformation()
    {
      return $this->FaxDetailsInformation;
    }

    /**
     * @param FaxDetailsInformation $FaxDetailsInformation
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setFaxDetailsInformation($FaxDetailsInformation)
    {
      $this->FaxDetailsInformation = $FaxDetailsInformation;
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
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setAirTicketingModifiers($AirTicketingModifiers)
    {
      $this->AirTicketingModifiers = $AirTicketingModifiers;
      return $this;
    }

    /**
     * @return AirSegmentTicketingModifiers
     */
    public function getAirSegmentTicketingModifiers()
    {
      return $this->AirSegmentTicketingModifiers;
    }

    /**
     * @param AirSegmentTicketingModifiers $AirSegmentTicketingModifiers
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setAirSegmentTicketingModifiers($AirSegmentTicketingModifiers)
    {
      $this->AirSegmentTicketingModifiers = $AirSegmentTicketingModifiers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnInfoOnFail()
    {
      return $this->ReturnInfoOnFail;
    }

    /**
     * @param boolean $ReturnInfoOnFail
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setReturnInfoOnFail($ReturnInfoOnFail)
    {
      $this->ReturnInfoOnFail = $ReturnInfoOnFail;
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
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValidateSpanishResidency()
    {
      return $this->ValidateSpanishResidency;
    }

    /**
     * @param boolean $ValidateSpanishResidency
     * @return \FilippoToso\Travelport\Air\AirTicketingReq
     */
    public function setValidateSpanishResidency($ValidateSpanishResidency)
    {
      $this->ValidateSpanishResidency = $ValidateSpanishResidency;
      return $this;
    }

}
