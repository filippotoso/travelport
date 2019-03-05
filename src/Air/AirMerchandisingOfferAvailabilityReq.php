<?php

namespace FilippoToso\Travelport\Air;

class AirMerchandisingOfferAvailabilityReq extends BaseReq
{

    /**
     * @var AgencySellInfo $AgencySellInfo
     */
    protected $AgencySellInfo = null;

    /**
     * @var AirSolution $AirSolution
     */
    protected $AirSolution = null;

    /**
     * @var HostReservation $HostReservation
     */
    protected $HostReservation = null;

    /**
     * @var OfferAvailabilityModifiers $OfferAvailabilityModifiers
     */
    protected $OfferAvailabilityModifiers = null;

    /**
     * @var MerchandisingPricingModifiers $MerchandisingPricingModifiers
     */
    protected $MerchandisingPricingModifiers = null;

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
     * @param AirSolution $AirSolution
     * @param HostReservation $HostReservation
     * @param OfferAvailabilityModifiers $OfferAvailabilityModifiers
     * @param MerchandisingPricingModifiers $MerchandisingPricingModifiers
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AgencySellInfo = null, $AirSolution = null, $HostReservation = null, $OfferAvailabilityModifiers = null, $MerchandisingPricingModifiers = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AgencySellInfo = $AgencySellInfo;
      $this->AirSolution = $AirSolution;
      $this->HostReservation = $HostReservation;
      $this->OfferAvailabilityModifiers = $OfferAvailabilityModifiers;
      $this->MerchandisingPricingModifiers = $MerchandisingPricingModifiers;
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
     * @return \FilippoToso\Travelport\Air\AirMerchandisingOfferAvailabilityReq
     */
    public function setAgencySellInfo($AgencySellInfo)
    {
      $this->AgencySellInfo = $AgencySellInfo;
      return $this;
    }

    /**
     * @return AirSolution
     */
    public function getAirSolution()
    {
      return $this->AirSolution;
    }

    /**
     * @param AirSolution $AirSolution
     * @return \FilippoToso\Travelport\Air\AirMerchandisingOfferAvailabilityReq
     */
    public function setAirSolution($AirSolution)
    {
      $this->AirSolution = $AirSolution;
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
     * @return \FilippoToso\Travelport\Air\AirMerchandisingOfferAvailabilityReq
     */
    public function setHostReservation($HostReservation)
    {
      $this->HostReservation = $HostReservation;
      return $this;
    }

    /**
     * @return OfferAvailabilityModifiers
     */
    public function getOfferAvailabilityModifiers()
    {
      return $this->OfferAvailabilityModifiers;
    }

    /**
     * @param OfferAvailabilityModifiers $OfferAvailabilityModifiers
     * @return \FilippoToso\Travelport\Air\AirMerchandisingOfferAvailabilityReq
     */
    public function setOfferAvailabilityModifiers($OfferAvailabilityModifiers)
    {
      $this->OfferAvailabilityModifiers = $OfferAvailabilityModifiers;
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
     * @return \FilippoToso\Travelport\Air\AirMerchandisingOfferAvailabilityReq
     */
    public function setMerchandisingPricingModifiers($MerchandisingPricingModifiers)
    {
      $this->MerchandisingPricingModifiers = $MerchandisingPricingModifiers;
      return $this;
    }

}
