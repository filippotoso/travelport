<?php

namespace FilippoToso\Travelport\Rail;

class AirReservation extends typeBaseAirReservation
{

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param Restriction $Restriction
     * @param PassiveInfo $PassiveInfo
     * @param typeLocatorCode $LocatorCode
     * @param string $CreateDate
     * @param string $ModifiedDate
     * @param string $CustomerNumber
     * @param OptionalServices $OptionalServices
     * @param SupplierLocator $SupplierLocator
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param DocumentInfo $DocumentInfo
     * @param BookingTravelerRef $BookingTravelerRef
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeBaseAirSegment $AirSegment
     * @param SvcSegment $SvcSegment
     * @param AirPricingInfo $AirPricingInfo
     * @param Payment $Payment
     * @param CreditCardAuth $CreditCardAuth
     * @param FareNote $FareNote
     * @param typeFeeInfo $FeeInfo
     * @param TicketingModifiers $TicketingModifiers
     * @param AssociatedRemark $AssociatedRemark
     * @param PocketItineraryRemark $PocketItineraryRemark
     * @param AirExchangeBundleTotal $AirExchangeBundleTotal
     * @param AirExchangeBundle $AirExchangeBundle
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $Restriction = null, $PassiveInfo = null, $LocatorCode = null, $CreateDate = null, $ModifiedDate = null, $CustomerNumber = null, $OptionalServices = null, $SupplierLocator = null, $ThirdPartyInformation = null, $DocumentInfo = null, $BookingTravelerRef = null, $ProviderReservationInfoRef = null, $AirSegment = null, $SvcSegment = null, $AirPricingInfo = null, $Payment = null, $CreditCardAuth = null, $FareNote = null, $FeeInfo = null, $TicketingModifiers = null, $AssociatedRemark = null, $PocketItineraryRemark = null, $AirExchangeBundleTotal = null, $AirExchangeBundle = null)
    {
      parent::__construct($AccountingRemark, $GeneralRemark, $Restriction, $PassiveInfo, $LocatorCode, $CreateDate, $ModifiedDate, $CustomerNumber, $OptionalServices, $SupplierLocator, $ThirdPartyInformation, $DocumentInfo, $BookingTravelerRef, $ProviderReservationInfoRef, $AirSegment, $SvcSegment, $AirPricingInfo, $Payment, $CreditCardAuth, $FareNote, $FeeInfo, $TicketingModifiers, $AssociatedRemark, $PocketItineraryRemark, $AirExchangeBundleTotal, $AirExchangeBundle);
    }

}
