<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirUpdate
{

    /**
     * @var AccountingRemark $AccountingRemark
     */
    protected $AccountingRemark = null;

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var CreditCardAuth $CreditCardAuth
     */
    protected $CreditCardAuth = null;

    /**
     * @var AirPricingAdjustment $AirPricingAdjustment
     */
    protected $AirPricingAdjustment = null;

    /**
     * @var AirPricingTicketingModifiers $AirPricingTicketingModifiers
     */
    protected $AirPricingTicketingModifiers = null;

    /**
     * @var DeliveryInfo $DeliveryInfo
     */
    protected $DeliveryInfo = null;

    /**
     * @var AirSegmentSpecialUpdate $AirSegmentSpecialUpdate
     */
    protected $AirSegmentSpecialUpdate = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var SSR $SSR
     */
    protected $SSR = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    protected $GeneralRemark = null;

    /**
     * @var AutoSeatAssignment $AutoSeatAssignment
     */
    protected $AutoSeatAssignment = null;

    /**
     * @var SpecificSeatAssignment $SpecificSeatAssignment
     */
    protected $SpecificSeatAssignment = null;

    /**
     * @var AirPricingPayment $AirPricingPayment
     */
    protected $AirPricingPayment = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    protected $AssociatedRemark = null;

    /**
     * @var PocketItineraryRemark $PocketItineraryRemark
     */
    protected $PocketItineraryRemark = null;

    /**
     * @var OptionalServicesInfo $OptionalServicesInfo
     */
    protected $OptionalServicesInfo = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    protected $ThirdPartyInformation = null;

    /**
     * @var TravelComplianceData $TravelComplianceData
     */
    protected $TravelComplianceData = null;

    /**
     * @var typeLocatorCode $ReservationLocatorCode
     */
    protected $ReservationLocatorCode = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var boolean $RestrictWaitlist
     */
    protected $RestrictWaitlist = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param typeBaseAirSegment $AirSegment
     * @param CreditCardAuth $CreditCardAuth
     * @param AirPricingAdjustment $AirPricingAdjustment
     * @param AirPricingTicketingModifiers $AirPricingTicketingModifiers
     * @param DeliveryInfo $DeliveryInfo
     * @param AirSegmentSpecialUpdate $AirSegmentSpecialUpdate
     * @param LoyaltyCard $LoyaltyCard
     * @param SSR $SSR
     * @param GeneralRemark $GeneralRemark
     * @param AutoSeatAssignment $AutoSeatAssignment
     * @param SpecificSeatAssignment $SpecificSeatAssignment
     * @param AirPricingPayment $AirPricingPayment
     * @param AssociatedRemark $AssociatedRemark
     * @param PocketItineraryRemark $PocketItineraryRemark
     * @param OptionalServicesInfo $OptionalServicesInfo
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param TravelComplianceData $TravelComplianceData
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeRef $BookingTravelerRef
     * @param boolean $RestrictWaitlist
     */
    public function __construct($AccountingRemark = null, $AirSegment = null, $CreditCardAuth = null, $AirPricingAdjustment = null, $AirPricingTicketingModifiers = null, $DeliveryInfo = null, $AirSegmentSpecialUpdate = null, $LoyaltyCard = null, $SSR = null, $GeneralRemark = null, $AutoSeatAssignment = null, $SpecificSeatAssignment = null, $AirPricingPayment = null, $AssociatedRemark = null, $PocketItineraryRemark = null, $OptionalServicesInfo = null, $ThirdPartyInformation = null, $TravelComplianceData = null, $ReservationLocatorCode = null, $BookingTravelerRef = null, $RestrictWaitlist = null)
    {
      $this->AccountingRemark = $AccountingRemark;
      $this->AirSegment = $AirSegment;
      $this->CreditCardAuth = $CreditCardAuth;
      $this->AirPricingAdjustment = $AirPricingAdjustment;
      $this->AirPricingTicketingModifiers = $AirPricingTicketingModifiers;
      $this->DeliveryInfo = $DeliveryInfo;
      $this->AirSegmentSpecialUpdate = $AirSegmentSpecialUpdate;
      $this->LoyaltyCard = $LoyaltyCard;
      $this->SSR = $SSR;
      $this->GeneralRemark = $GeneralRemark;
      $this->AutoSeatAssignment = $AutoSeatAssignment;
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
      $this->AirPricingPayment = $AirPricingPayment;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->PocketItineraryRemark = $PocketItineraryRemark;
      $this->OptionalServicesInfo = $OptionalServicesInfo;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->TravelComplianceData = $TravelComplianceData;
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->RestrictWaitlist = $RestrictWaitlist;
    }

    /**
     * @return AccountingRemark
     */
    public function getAccountingRemark()
    {
      return $this->AccountingRemark;
    }

    /**
     * @param AccountingRemark $AccountingRemark
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
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
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return CreditCardAuth
     */
    public function getCreditCardAuth()
    {
      return $this->CreditCardAuth;
    }

    /**
     * @param CreditCardAuth $CreditCardAuth
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setCreditCardAuth($CreditCardAuth)
    {
      $this->CreditCardAuth = $CreditCardAuth;
      return $this;
    }

    /**
     * @return AirPricingAdjustment
     */
    public function getAirPricingAdjustment()
    {
      return $this->AirPricingAdjustment;
    }

    /**
     * @param AirPricingAdjustment $AirPricingAdjustment
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setAirPricingAdjustment($AirPricingAdjustment)
    {
      $this->AirPricingAdjustment = $AirPricingAdjustment;
      return $this;
    }

    /**
     * @return AirPricingTicketingModifiers
     */
    public function getAirPricingTicketingModifiers()
    {
      return $this->AirPricingTicketingModifiers;
    }

    /**
     * @param AirPricingTicketingModifiers $AirPricingTicketingModifiers
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setAirPricingTicketingModifiers($AirPricingTicketingModifiers)
    {
      $this->AirPricingTicketingModifiers = $AirPricingTicketingModifiers;
      return $this;
    }

    /**
     * @return DeliveryInfo
     */
    public function getDeliveryInfo()
    {
      return $this->DeliveryInfo;
    }

    /**
     * @param DeliveryInfo $DeliveryInfo
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setDeliveryInfo($DeliveryInfo)
    {
      $this->DeliveryInfo = $DeliveryInfo;
      return $this;
    }

    /**
     * @return AirSegmentSpecialUpdate
     */
    public function getAirSegmentSpecialUpdate()
    {
      return $this->AirSegmentSpecialUpdate;
    }

    /**
     * @param AirSegmentSpecialUpdate $AirSegmentSpecialUpdate
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setAirSegmentSpecialUpdate($AirSegmentSpecialUpdate)
    {
      $this->AirSegmentSpecialUpdate = $AirSegmentSpecialUpdate;
      return $this;
    }

    /**
     * @return LoyaltyCard
     */
    public function getLoyaltyCard()
    {
      return $this->LoyaltyCard;
    }

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

    /**
     * @return SSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param SSR $SSR
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return AutoSeatAssignment
     */
    public function getAutoSeatAssignment()
    {
      return $this->AutoSeatAssignment;
    }

    /**
     * @param AutoSeatAssignment $AutoSeatAssignment
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setAutoSeatAssignment($AutoSeatAssignment)
    {
      $this->AutoSeatAssignment = $AutoSeatAssignment;
      return $this;
    }

    /**
     * @return SpecificSeatAssignment
     */
    public function getSpecificSeatAssignment()
    {
      return $this->SpecificSeatAssignment;
    }

    /**
     * @param SpecificSeatAssignment $SpecificSeatAssignment
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setSpecificSeatAssignment($SpecificSeatAssignment)
    {
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
      return $this;
    }

    /**
     * @return AirPricingPayment
     */
    public function getAirPricingPayment()
    {
      return $this->AirPricingPayment;
    }

    /**
     * @param AirPricingPayment $AirPricingPayment
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setAirPricingPayment($AirPricingPayment)
    {
      $this->AirPricingPayment = $AirPricingPayment;
      return $this;
    }

    /**
     * @return AssociatedRemark
     */
    public function getAssociatedRemark()
    {
      return $this->AssociatedRemark;
    }

    /**
     * @param AssociatedRemark $AssociatedRemark
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
      return $this;
    }

    /**
     * @return PocketItineraryRemark
     */
    public function getPocketItineraryRemark()
    {
      return $this->PocketItineraryRemark;
    }

    /**
     * @param PocketItineraryRemark $PocketItineraryRemark
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setPocketItineraryRemark($PocketItineraryRemark)
    {
      $this->PocketItineraryRemark = $PocketItineraryRemark;
      return $this;
    }

    /**
     * @return OptionalServicesInfo
     */
    public function getOptionalServicesInfo()
    {
      return $this->OptionalServicesInfo;
    }

    /**
     * @param OptionalServicesInfo $OptionalServicesInfo
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setOptionalServicesInfo($OptionalServicesInfo)
    {
      $this->OptionalServicesInfo = $OptionalServicesInfo;
      return $this;
    }

    /**
     * @return ThirdPartyInformation
     */
    public function getThirdPartyInformation()
    {
      return $this->ThirdPartyInformation;
    }

    /**
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return TravelComplianceData
     */
    public function getTravelComplianceData()
    {
      return $this->TravelComplianceData;
    }

    /**
     * @param TravelComplianceData $TravelComplianceData
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setTravelComplianceData($TravelComplianceData)
    {
      $this->TravelComplianceData = $TravelComplianceData;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getReservationLocatorCode()
    {
      return $this->ReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setReservationLocatorCode($ReservationLocatorCode)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictWaitlist()
    {
      return $this->RestrictWaitlist;
    }

    /**
     * @param boolean $RestrictWaitlist
     * @return \FilippoToso\Travelport\GDSQueue\AirUpdate
     */
    public function setRestrictWaitlist($RestrictWaitlist)
    {
      $this->RestrictWaitlist = $RestrictWaitlist;
      return $this;
    }

}
