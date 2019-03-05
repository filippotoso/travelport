<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirAdd
{

    /**
     * @var AccountingRemark $AccountingRemark
     */
    protected $AccountingRemark = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    protected $SupplierLocator = null;

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var AirPricingInfo $AirPricingInfo
     */
    protected $AirPricingInfo = null;

    /**
     * @var CreditCardAuth $CreditCardAuth
     */
    protected $CreditCardAuth = null;

    /**
     * @var DeliveryInfo $DeliveryInfo
     */
    protected $DeliveryInfo = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var SSR $SSR
     */
    protected $SSR = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var AutoSeatAssignment $AutoSeatAssignment
     */
    protected $AutoSeatAssignment = null;

    /**
     * @var SpecificSeatAssignment $SpecificSeatAssignment
     */
    protected $SpecificSeatAssignment = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    protected $GeneralRemark = null;

    /**
     * @var typeFeeInfo $FeeInfo
     */
    protected $FeeInfo = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var AirPricingTicketingModifiers $AirPricingTicketingModifiers
     */
    protected $AirPricingTicketingModifiers = null;

    /**
     * @var OptionalServicesInfo $OptionalServicesInfo
     */
    protected $OptionalServicesInfo = null;

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
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    protected $ThirdPartyInformation = null;

    /**
     * @var AirSegmentPricingModifiers $AirSegmentPricingModifiers
     */
    protected $AirSegmentPricingModifiers = null;

    /**
     * @var TravelComplianceData $TravelComplianceData
     */
    protected $TravelComplianceData = null;

    /**
     * @var BrandInfo $BrandInfo
     */
    protected $BrandInfo = null;

    /**
     * @var InvoluntaryChange $InvoluntaryChange
     */
    protected $InvoluntaryChange = null;

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
     * @param SupplierLocator $SupplierLocator
     * @param typeBaseAirSegment $AirSegment
     * @param AirPricingInfo $AirPricingInfo
     * @param CreditCardAuth $CreditCardAuth
     * @param DeliveryInfo $DeliveryInfo
     * @param Payment $Payment
     * @param SSR $SSR
     * @param LoyaltyCard $LoyaltyCard
     * @param AutoSeatAssignment $AutoSeatAssignment
     * @param SpecificSeatAssignment $SpecificSeatAssignment
     * @param GeneralRemark $GeneralRemark
     * @param typeFeeInfo $FeeInfo
     * @param HostToken $HostToken
     * @param AirPricingTicketingModifiers $AirPricingTicketingModifiers
     * @param OptionalServicesInfo $OptionalServicesInfo
     * @param AirPricingPayment $AirPricingPayment
     * @param AssociatedRemark $AssociatedRemark
     * @param PocketItineraryRemark $PocketItineraryRemark
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @param TravelComplianceData $TravelComplianceData
     * @param BrandInfo $BrandInfo
     * @param InvoluntaryChange $InvoluntaryChange
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeRef $BookingTravelerRef
     * @param boolean $RestrictWaitlist
     */
    public function __construct($AccountingRemark = null, $SupplierLocator = null, $AirSegment = null, $AirPricingInfo = null, $CreditCardAuth = null, $DeliveryInfo = null, $Payment = null, $SSR = null, $LoyaltyCard = null, $AutoSeatAssignment = null, $SpecificSeatAssignment = null, $GeneralRemark = null, $FeeInfo = null, $HostToken = null, $AirPricingTicketingModifiers = null, $OptionalServicesInfo = null, $AirPricingPayment = null, $AssociatedRemark = null, $PocketItineraryRemark = null, $ThirdPartyInformation = null, $AirSegmentPricingModifiers = null, $TravelComplianceData = null, $BrandInfo = null, $InvoluntaryChange = null, $ReservationLocatorCode = null, $BookingTravelerRef = null, $RestrictWaitlist = null)
    {
      $this->AccountingRemark = $AccountingRemark;
      $this->SupplierLocator = $SupplierLocator;
      $this->AirSegment = $AirSegment;
      $this->AirPricingInfo = $AirPricingInfo;
      $this->CreditCardAuth = $CreditCardAuth;
      $this->DeliveryInfo = $DeliveryInfo;
      $this->Payment = $Payment;
      $this->SSR = $SSR;
      $this->LoyaltyCard = $LoyaltyCard;
      $this->AutoSeatAssignment = $AutoSeatAssignment;
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
      $this->GeneralRemark = $GeneralRemark;
      $this->FeeInfo = $FeeInfo;
      $this->HostToken = $HostToken;
      $this->AirPricingTicketingModifiers = $AirPricingTicketingModifiers;
      $this->OptionalServicesInfo = $OptionalServicesInfo;
      $this->AirPricingPayment = $AirPricingPayment;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->PocketItineraryRemark = $PocketItineraryRemark;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      $this->TravelComplianceData = $TravelComplianceData;
      $this->BrandInfo = $BrandInfo;
      $this->InvoluntaryChange = $InvoluntaryChange;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
      return $this;
    }

    /**
     * @return SupplierLocator
     */
    public function getSupplierLocator()
    {
      return $this->SupplierLocator;
    }

    /**
     * @param SupplierLocator $SupplierLocator
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return AirPricingInfo
     */
    public function getAirPricingInfo()
    {
      return $this->AirPricingInfo;
    }

    /**
     * @param AirPricingInfo $AirPricingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setAirPricingInfo($AirPricingInfo)
    {
      $this->AirPricingInfo = $AirPricingInfo;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setCreditCardAuth($CreditCardAuth)
    {
      $this->CreditCardAuth = $CreditCardAuth;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setDeliveryInfo($DeliveryInfo)
    {
      $this->DeliveryInfo = $DeliveryInfo;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setSpecificSeatAssignment($SpecificSeatAssignment)
    {
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return typeFeeInfo
     */
    public function getFeeInfo()
    {
      return $this->FeeInfo;
    }

    /**
     * @param typeFeeInfo $FeeInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setFeeInfo($FeeInfo)
    {
      $this->FeeInfo = $FeeInfo;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setAirPricingTicketingModifiers($AirPricingTicketingModifiers)
    {
      $this->AirPricingTicketingModifiers = $AirPricingTicketingModifiers;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setOptionalServicesInfo($OptionalServicesInfo)
    {
      $this->OptionalServicesInfo = $OptionalServicesInfo;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setPocketItineraryRemark($PocketItineraryRemark)
    {
      $this->PocketItineraryRemark = $PocketItineraryRemark;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return AirSegmentPricingModifiers
     */
    public function getAirSegmentPricingModifiers()
    {
      return $this->AirSegmentPricingModifiers;
    }

    /**
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setAirSegmentPricingModifiers($AirSegmentPricingModifiers)
    {
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setTravelComplianceData($TravelComplianceData)
    {
      $this->TravelComplianceData = $TravelComplianceData;
      return $this;
    }

    /**
     * @return BrandInfo
     */
    public function getBrandInfo()
    {
      return $this->BrandInfo;
    }

    /**
     * @param BrandInfo $BrandInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setBrandInfo($BrandInfo)
    {
      $this->BrandInfo = $BrandInfo;
      return $this;
    }

    /**
     * @return InvoluntaryChange
     */
    public function getInvoluntaryChange()
    {
      return $this->InvoluntaryChange;
    }

    /**
     * @param InvoluntaryChange $InvoluntaryChange
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setInvoluntaryChange($InvoluntaryChange)
    {
      $this->InvoluntaryChange = $InvoluntaryChange;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAdd
     */
    public function setRestrictWaitlist($RestrictWaitlist)
    {
      $this->RestrictWaitlist = $RestrictWaitlist;
      return $this;
    }

}
