<?php

namespace FilippoToso\Travelport\Air;

class FareDisplay
{

    /**
     * @var FareDisplayRule $FareDisplayRule
     */
    protected $FareDisplayRule = null;

    /**
     * @var FarePricing $FarePricing
     */
    protected $FarePricing = null;

    /**
     * @var FareRestriction $FareRestriction
     */
    protected $FareRestriction = null;

    /**
     * @var string $FareRoutingInformation
     */
    protected $FareRoutingInformation = null;

    /**
     * @var string $FareMileageInformation
     */
    protected $FareMileageInformation = null;

    /**
     * @var AirFareDisplayRuleKey $AirFareDisplayRuleKey
     */
    protected $AirFareDisplayRuleKey = null;

    /**
     * @var BookingCode $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @var AccountCode $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var AddlBookingCodeInformation $AddlBookingCodeInformation
     */
    protected $AddlBookingCodeInformation = null;

    /**
     * @var FareRuleFailureInfo $FareRuleFailureInfo
     */
    protected $FareRuleFailureInfo = null;

    /**
     * @var PriceChangeType[] $PriceChange
     */
    protected $PriceChange = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typeFareTripType $TripType
     */
    protected $TripType = null;

    /**
     * @var typeFareTypeCode $FareTypeCode
     */
    protected $FareTypeCode = null;

    /**
     * @var boolean $SpecialFare
     */
    protected $SpecialFare = null;

    /**
     * @var boolean $InstantPurchase
     */
    protected $InstantPurchase = null;

    /**
     * @var boolean $EligibilityRestricted
     */
    protected $EligibilityRestricted = null;

    /**
     * @var boolean $FlightRestricted
     */
    protected $FlightRestricted = null;

    /**
     * @var boolean $StopoversRestricted
     */
    protected $StopoversRestricted = null;

    /**
     * @var boolean $TransfersRestricted
     */
    protected $TransfersRestricted = null;

    /**
     * @var boolean $BlackoutsExist
     */
    protected $BlackoutsExist = null;

    /**
     * @var boolean $AccompaniedTravel
     */
    protected $AccompaniedTravel = null;

    /**
     * @var typeMileOrRouteBasedFare $MileOrRouteBasedFare
     */
    protected $MileOrRouteBasedFare = null;

    /**
     * @var typeATPCOGlobalIndicator $GlobalIndicator
     */
    protected $GlobalIndicator = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var string $FareTicketingCode
     */
    protected $FareTicketingCode = null;

    /**
     * @var typeTicketDesignator $FareTicketingDesignator
     */
    protected $FareTicketingDesignator = null;

    /**
     * @param FareDisplayRule $FareDisplayRule
     * @param FarePricing $FarePricing
     * @param FareRestriction $FareRestriction
     * @param string $FareRoutingInformation
     * @param string $FareMileageInformation
     * @param AirFareDisplayRuleKey $AirFareDisplayRuleKey
     * @param BookingCode $BookingCode
     * @param AccountCode $AccountCode
     * @param AddlBookingCodeInformation $AddlBookingCodeInformation
     * @param FareRuleFailureInfo $FareRuleFailureInfo
     * @param typeCarrier $Carrier
     * @param string $FareBasis
     * @param typeMoney $Amount
     * @param typeFareTripType $TripType
     * @param typeFareTypeCode $FareTypeCode
     * @param boolean $SpecialFare
     * @param boolean $InstantPurchase
     * @param boolean $EligibilityRestricted
     * @param boolean $FlightRestricted
     * @param boolean $StopoversRestricted
     * @param boolean $TransfersRestricted
     * @param boolean $BlackoutsExist
     * @param boolean $AccompaniedTravel
     * @param typeMileOrRouteBasedFare $MileOrRouteBasedFare
     * @param typeATPCOGlobalIndicator $GlobalIndicator
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $FareTicketingCode
     * @param typeTicketDesignator $FareTicketingDesignator
     */
    public function __construct($FareDisplayRule = null, $FarePricing = null, $FareRestriction = null, $FareRoutingInformation = null, $FareMileageInformation = null, $AirFareDisplayRuleKey = null, $BookingCode = null, $AccountCode = null, $AddlBookingCodeInformation = null, $FareRuleFailureInfo = null, $Carrier = null, $FareBasis = null, $Amount = null, $TripType = null, $FareTypeCode = null, $SpecialFare = null, $InstantPurchase = null, $EligibilityRestricted = null, $FlightRestricted = null, $StopoversRestricted = null, $TransfersRestricted = null, $BlackoutsExist = null, $AccompaniedTravel = null, $MileOrRouteBasedFare = null, $GlobalIndicator = null, $Origin = null, $Destination = null, $FareTicketingCode = null, $FareTicketingDesignator = null)
    {
      $this->FareDisplayRule = $FareDisplayRule;
      $this->FarePricing = $FarePricing;
      $this->FareRestriction = $FareRestriction;
      $this->FareRoutingInformation = $FareRoutingInformation;
      $this->FareMileageInformation = $FareMileageInformation;
      $this->AirFareDisplayRuleKey = $AirFareDisplayRuleKey;
      $this->BookingCode = $BookingCode;
      $this->AccountCode = $AccountCode;
      $this->AddlBookingCodeInformation = $AddlBookingCodeInformation;
      $this->FareRuleFailureInfo = $FareRuleFailureInfo;
      $this->Carrier = $Carrier;
      $this->FareBasis = $FareBasis;
      $this->Amount = $Amount;
      $this->TripType = $TripType;
      $this->FareTypeCode = $FareTypeCode;
      $this->SpecialFare = $SpecialFare;
      $this->InstantPurchase = $InstantPurchase;
      $this->EligibilityRestricted = $EligibilityRestricted;
      $this->FlightRestricted = $FlightRestricted;
      $this->StopoversRestricted = $StopoversRestricted;
      $this->TransfersRestricted = $TransfersRestricted;
      $this->BlackoutsExist = $BlackoutsExist;
      $this->AccompaniedTravel = $AccompaniedTravel;
      $this->MileOrRouteBasedFare = $MileOrRouteBasedFare;
      $this->GlobalIndicator = $GlobalIndicator;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->FareTicketingCode = $FareTicketingCode;
      $this->FareTicketingDesignator = $FareTicketingDesignator;
    }

    /**
     * @return FareDisplayRule
     */
    public function getFareDisplayRule()
    {
      return $this->FareDisplayRule;
    }

    /**
     * @param FareDisplayRule $FareDisplayRule
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFareDisplayRule($FareDisplayRule)
    {
      $this->FareDisplayRule = $FareDisplayRule;
      return $this;
    }

    /**
     * @return FarePricing
     */
    public function getFarePricing()
    {
      return $this->FarePricing;
    }

    /**
     * @param FarePricing $FarePricing
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFarePricing($FarePricing)
    {
      $this->FarePricing = $FarePricing;
      return $this;
    }

    /**
     * @return FareRestriction
     */
    public function getFareRestriction()
    {
      return $this->FareRestriction;
    }

    /**
     * @param FareRestriction $FareRestriction
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFareRestriction($FareRestriction)
    {
      $this->FareRestriction = $FareRestriction;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareRoutingInformation()
    {
      return $this->FareRoutingInformation;
    }

    /**
     * @param string $FareRoutingInformation
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFareRoutingInformation($FareRoutingInformation)
    {
      $this->FareRoutingInformation = $FareRoutingInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareMileageInformation()
    {
      return $this->FareMileageInformation;
    }

    /**
     * @param string $FareMileageInformation
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFareMileageInformation($FareMileageInformation)
    {
      $this->FareMileageInformation = $FareMileageInformation;
      return $this;
    }

    /**
     * @return AirFareDisplayRuleKey
     */
    public function getAirFareDisplayRuleKey()
    {
      return $this->AirFareDisplayRuleKey;
    }

    /**
     * @param AirFareDisplayRuleKey $AirFareDisplayRuleKey
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setAirFareDisplayRuleKey($AirFareDisplayRuleKey)
    {
      $this->AirFareDisplayRuleKey = $AirFareDisplayRuleKey;
      return $this;
    }

    /**
     * @return BookingCode
     */
    public function getBookingCode()
    {
      return $this->BookingCode;
    }

    /**
     * @param BookingCode $BookingCode
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return AddlBookingCodeInformation
     */
    public function getAddlBookingCodeInformation()
    {
      return $this->AddlBookingCodeInformation;
    }

    /**
     * @param AddlBookingCodeInformation $AddlBookingCodeInformation
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setAddlBookingCodeInformation($AddlBookingCodeInformation)
    {
      $this->AddlBookingCodeInformation = $AddlBookingCodeInformation;
      return $this;
    }

    /**
     * @return FareRuleFailureInfo
     */
    public function getFareRuleFailureInfo()
    {
      return $this->FareRuleFailureInfo;
    }

    /**
     * @param FareRuleFailureInfo $FareRuleFailureInfo
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFareRuleFailureInfo($FareRuleFailureInfo)
    {
      $this->FareRuleFailureInfo = $FareRuleFailureInfo;
      return $this;
    }

    /**
     * @return PriceChangeType[]
     */
    public function getPriceChange()
    {
      return $this->PriceChange;
    }

    /**
     * @param PriceChangeType[] $PriceChange
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setPriceChange(array $PriceChange = null)
    {
      $this->PriceChange = $PriceChange;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typeFareTripType
     */
    public function getTripType()
    {
      return $this->TripType;
    }

    /**
     * @param typeFareTripType $TripType
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setTripType($TripType)
    {
      $this->TripType = $TripType;
      return $this;
    }

    /**
     * @return typeFareTypeCode
     */
    public function getFareTypeCode()
    {
      return $this->FareTypeCode;
    }

    /**
     * @param typeFareTypeCode $FareTypeCode
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFareTypeCode($FareTypeCode)
    {
      $this->FareTypeCode = $FareTypeCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSpecialFare()
    {
      return $this->SpecialFare;
    }

    /**
     * @param boolean $SpecialFare
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setSpecialFare($SpecialFare)
    {
      $this->SpecialFare = $SpecialFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInstantPurchase()
    {
      return $this->InstantPurchase;
    }

    /**
     * @param boolean $InstantPurchase
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setInstantPurchase($InstantPurchase)
    {
      $this->InstantPurchase = $InstantPurchase;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEligibilityRestricted()
    {
      return $this->EligibilityRestricted;
    }

    /**
     * @param boolean $EligibilityRestricted
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setEligibilityRestricted($EligibilityRestricted)
    {
      $this->EligibilityRestricted = $EligibilityRestricted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlightRestricted()
    {
      return $this->FlightRestricted;
    }

    /**
     * @param boolean $FlightRestricted
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFlightRestricted($FlightRestricted)
    {
      $this->FlightRestricted = $FlightRestricted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStopoversRestricted()
    {
      return $this->StopoversRestricted;
    }

    /**
     * @param boolean $StopoversRestricted
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setStopoversRestricted($StopoversRestricted)
    {
      $this->StopoversRestricted = $StopoversRestricted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTransfersRestricted()
    {
      return $this->TransfersRestricted;
    }

    /**
     * @param boolean $TransfersRestricted
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setTransfersRestricted($TransfersRestricted)
    {
      $this->TransfersRestricted = $TransfersRestricted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBlackoutsExist()
    {
      return $this->BlackoutsExist;
    }

    /**
     * @param boolean $BlackoutsExist
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setBlackoutsExist($BlackoutsExist)
    {
      $this->BlackoutsExist = $BlackoutsExist;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccompaniedTravel()
    {
      return $this->AccompaniedTravel;
    }

    /**
     * @param boolean $AccompaniedTravel
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setAccompaniedTravel($AccompaniedTravel)
    {
      $this->AccompaniedTravel = $AccompaniedTravel;
      return $this;
    }

    /**
     * @return typeMileOrRouteBasedFare
     */
    public function getMileOrRouteBasedFare()
    {
      return $this->MileOrRouteBasedFare;
    }

    /**
     * @param typeMileOrRouteBasedFare $MileOrRouteBasedFare
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setMileOrRouteBasedFare($MileOrRouteBasedFare)
    {
      $this->MileOrRouteBasedFare = $MileOrRouteBasedFare;
      return $this;
    }

    /**
     * @return typeATPCOGlobalIndicator
     */
    public function getGlobalIndicator()
    {
      return $this->GlobalIndicator;
    }

    /**
     * @param typeATPCOGlobalIndicator $GlobalIndicator
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setGlobalIndicator($GlobalIndicator)
    {
      $this->GlobalIndicator = $GlobalIndicator;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareTicketingCode()
    {
      return $this->FareTicketingCode;
    }

    /**
     * @param string $FareTicketingCode
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFareTicketingCode($FareTicketingCode)
    {
      $this->FareTicketingCode = $FareTicketingCode;
      return $this;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getFareTicketingDesignator()
    {
      return $this->FareTicketingDesignator;
    }

    /**
     * @param typeTicketDesignator $FareTicketingDesignator
     * @return \FilippoToso\Travelport\Air\FareDisplay
     */
    public function setFareTicketingDesignator($FareTicketingDesignator)
    {
      $this->FareTicketingDesignator = $FareTicketingDesignator;
      return $this;
    }

}
