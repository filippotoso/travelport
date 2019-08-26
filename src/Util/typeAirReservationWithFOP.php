<?php

namespace FilippoToso\Travelport\Util;

class typeAirReservationWithFOP extends typeBaseAirReservation
{

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

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
     * @param FormOfPayment $FormOfPayment
     */
    public function __construct($AccountingRemark, $GeneralRemark, $Restriction, $PassiveInfo, $LocatorCode, $CreateDate, $ModifiedDate, $CustomerNumber, $OptionalServices, $SupplierLocator, $ThirdPartyInformation, $DocumentInfo, $BookingTravelerRef, $ProviderReservationInfoRef, $AirSegment, $SvcSegment, $AirPricingInfo, $Payment, $CreditCardAuth, $FareNote, $FeeInfo, $TicketingModifiers, $AssociatedRemark, $PocketItineraryRemark, $AirExchangeBundleTotal, $AirExchangeBundle, $FormOfPayment)
    {
      parent::__construct($AccountingRemark, $GeneralRemark, $Restriction, $PassiveInfo, $LocatorCode, $CreateDate, $ModifiedDate, $CustomerNumber, $OptionalServices, $SupplierLocator, $ThirdPartyInformation, $DocumentInfo, $BookingTravelerRef, $ProviderReservationInfoRef, $AirSegment, $SvcSegment, $AirPricingInfo, $Payment, $CreditCardAuth, $FareNote, $FeeInfo, $TicketingModifiers, $AssociatedRemark, $PocketItineraryRemark, $AirExchangeBundleTotal, $AirExchangeBundle);
      $this->FormOfPayment = $FormOfPayment;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\Util\typeAirReservationWithFOP
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

}
