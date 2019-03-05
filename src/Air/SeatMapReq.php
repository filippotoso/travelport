<?php

namespace FilippoToso\Travelport\Air;

class SeatMapReq extends BaseReq
{

    /**
     * @var AgencySellInfo $AgencySellInfo
     */
    protected $AgencySellInfo = null;

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var SearchTraveler $SearchTraveler
     */
    protected $SearchTraveler = null;

    /**
     * @var HostReservation $HostReservation
     */
    protected $HostReservation = null;

    /**
     * @var MerchandisingPricingModifiers $MerchandisingPricingModifiers
     */
    protected $MerchandisingPricingModifiers = null;

    /**
     * @var boolean $ReturnSeatPricing
     */
    protected $ReturnSeatPricing = null;

    /**
     * @var boolean $ReturnBrandingInfo
     */
    protected $ReturnBrandingInfo = null;

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
     * @param AgencySellInfo $AgencySellInfo
     * @param typeBaseAirSegment $AirSegment
     * @param HostToken $HostToken
     * @param SearchTraveler $SearchTraveler
     * @param HostReservation $HostReservation
     * @param MerchandisingPricingModifiers $MerchandisingPricingModifiers
     * @param boolean $ReturnSeatPricing
     * @param boolean $ReturnBrandingInfo
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AgencySellInfo = null, $AirSegment = null, $HostToken = null, $SearchTraveler = null, $HostReservation = null, $MerchandisingPricingModifiers = null, $ReturnSeatPricing = null, $ReturnBrandingInfo = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AgencySellInfo = $AgencySellInfo;
      $this->AirSegment = $AirSegment;
      $this->HostToken = $HostToken;
      $this->SearchTraveler = $SearchTraveler;
      $this->HostReservation = $HostReservation;
      $this->MerchandisingPricingModifiers = $MerchandisingPricingModifiers;
      $this->ReturnSeatPricing = $ReturnSeatPricing;
      $this->ReturnBrandingInfo = $ReturnBrandingInfo;
    }

    /**
     * @return AgencySellInfo
     */
    public function getAgencySellInfo()
    {
      return $this->AgencySellInfo;
    }

    /**
     * @param AgencySellInfo $AgencySellInfo
     * @return \FilippoToso\Travelport\Air\SeatMapReq
     */
    public function setAgencySellInfo($AgencySellInfo)
    {
      $this->AgencySellInfo = $AgencySellInfo;
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
     * @return \FilippoToso\Travelport\Air\SeatMapReq
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
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
     * @return \FilippoToso\Travelport\Air\SeatMapReq
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return SearchTraveler
     */
    public function getSearchTraveler()
    {
      return $this->SearchTraveler;
    }

    /**
     * @param SearchTraveler $SearchTraveler
     * @return \FilippoToso\Travelport\Air\SeatMapReq
     */
    public function setSearchTraveler($SearchTraveler)
    {
      $this->SearchTraveler = $SearchTraveler;
      return $this;
    }

    /**
     * @return HostReservation
     */
    public function getHostReservation()
    {
      return $this->HostReservation;
    }

    /**
     * @param HostReservation $HostReservation
     * @return \FilippoToso\Travelport\Air\SeatMapReq
     */
    public function setHostReservation($HostReservation)
    {
      $this->HostReservation = $HostReservation;
      return $this;
    }

    /**
     * @return MerchandisingPricingModifiers
     */
    public function getMerchandisingPricingModifiers()
    {
      return $this->MerchandisingPricingModifiers;
    }

    /**
     * @param MerchandisingPricingModifiers $MerchandisingPricingModifiers
     * @return \FilippoToso\Travelport\Air\SeatMapReq
     */
    public function setMerchandisingPricingModifiers($MerchandisingPricingModifiers)
    {
      $this->MerchandisingPricingModifiers = $MerchandisingPricingModifiers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnSeatPricing()
    {
      return $this->ReturnSeatPricing;
    }

    /**
     * @param boolean $ReturnSeatPricing
     * @return \FilippoToso\Travelport\Air\SeatMapReq
     */
    public function setReturnSeatPricing($ReturnSeatPricing)
    {
      $this->ReturnSeatPricing = $ReturnSeatPricing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnBrandingInfo()
    {
      return $this->ReturnBrandingInfo;
    }

    /**
     * @param boolean $ReturnBrandingInfo
     * @return \FilippoToso\Travelport\Air\SeatMapReq
     */
    public function setReturnBrandingInfo($ReturnBrandingInfo)
    {
      $this->ReturnBrandingInfo = $ReturnBrandingInfo;
      return $this;
    }

}
