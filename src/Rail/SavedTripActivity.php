<?php

namespace FilippoToso\Travelport\Rail;

class SavedTripActivity
{

    /**
     * @var BookingTravelerRef[] $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var SearchPassengerRef[] $SearchPassengerRef
     */
    protected $SearchPassengerRef = null;

    /**
     * @var PointOfSaleRef[] $PointOfSaleRef
     */
    protected $PointOfSaleRef = null;

    /**
     * @var AccountingRemarkRef[] $AccountingRemarkRef
     */
    protected $AccountingRemarkRef = null;

    /**
     * @var GeneralRemarkRef[] $GeneralRemarkRef
     */
    protected $GeneralRemarkRef = null;

    /**
     * @var AirPricingModifierRef[] $AirPricingModifierRef
     */
    protected $AirPricingModifierRef = null;

    /**
     * @var AirPricingSolutionRef[] $AirPricingSolutionRef
     */
    protected $AirPricingSolutionRef = null;

    /**
     * @var VehicleSearchModifiersRef[] $VehicleSearchModifiersRef
     */
    protected $VehicleSearchModifiersRef = null;

    /**
     * @var VehicleDateLocationRef[] $VehicleDateLocationRef
     */
    protected $VehicleDateLocationRef = null;

    /**
     * @var SpecialEquipmentRef[] $SpecialEquipmentRef
     */
    protected $SpecialEquipmentRef = null;

    /**
     * @var VehicleSpecialRequestRef[] $VehicleSpecialRequestRef
     */
    protected $VehicleSpecialRequestRef = null;

    /**
     * @var PaymentInformationRef[] $PaymentInformationRef
     */
    protected $PaymentInformationRef = null;

    /**
     * @var DeliveryAddressRef[] $DeliveryAddressRef
     */
    protected $DeliveryAddressRef = null;

    /**
     * @var CollectionAddressRef[] $CollectionAddressRef
     */
    protected $CollectionAddressRef = null;

    /**
     * @var FlightArrivalInformationRef[] $FlightArrivalInformationRef
     */
    protected $FlightArrivalInformationRef = null;

    /**
     * @var VehicleRef[] $VehicleRef
     */
    protected $VehicleRef = null;

    /**
     * @var VendorLocationRef[] $VendorLocationRef
     */
    protected $VendorLocationRef = null;

    /**
     * @var HotelPropertyRef[] $HotelPropertyRef
     */
    protected $HotelPropertyRef = null;

    /**
     * @var HotelStayRef[] $HotelStayRef
     */
    protected $HotelStayRef = null;

    /**
     * @var HotelRulesModifiersRef[] $HotelRulesModifiersRef
     */
    protected $HotelRulesModifiersRef = null;

    /**
     * @var HotelDetailsModifiersRef[] $HotelDetailsModifiersRef
     */
    protected $HotelDetailsModifiersRef = null;

    /**
     * @var HotelRateDetailRef[] $HotelRateDetailRef
     */
    protected $HotelRateDetailRef = null;

    /**
     * @var PromotionCodeRef[] $PromotionCodeRef
     */
    protected $PromotionCodeRef = null;

    /**
     * @var RailPricingSolutionRef[] $RailPricingSolutionRef
     */
    protected $RailPricingSolutionRef = null;

    /**
     * @var anonymous1445 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous1445 $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return BookingTravelerRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return SearchPassengerRef[]
     */
    public function getSearchPassengerRef()
    {
      return $this->SearchPassengerRef;
    }

    /**
     * @param SearchPassengerRef[] $SearchPassengerRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setSearchPassengerRef(array $SearchPassengerRef = null)
    {
      $this->SearchPassengerRef = $SearchPassengerRef;
      return $this;
    }

    /**
     * @return PointOfSaleRef[]
     */
    public function getPointOfSaleRef()
    {
      return $this->PointOfSaleRef;
    }

    /**
     * @param PointOfSaleRef[] $PointOfSaleRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setPointOfSaleRef(array $PointOfSaleRef = null)
    {
      $this->PointOfSaleRef = $PointOfSaleRef;
      return $this;
    }

    /**
     * @return AccountingRemarkRef[]
     */
    public function getAccountingRemarkRef()
    {
      return $this->AccountingRemarkRef;
    }

    /**
     * @param AccountingRemarkRef[] $AccountingRemarkRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setAccountingRemarkRef(array $AccountingRemarkRef = null)
    {
      $this->AccountingRemarkRef = $AccountingRemarkRef;
      return $this;
    }

    /**
     * @return GeneralRemarkRef[]
     */
    public function getGeneralRemarkRef()
    {
      return $this->GeneralRemarkRef;
    }

    /**
     * @param GeneralRemarkRef[] $GeneralRemarkRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setGeneralRemarkRef(array $GeneralRemarkRef = null)
    {
      $this->GeneralRemarkRef = $GeneralRemarkRef;
      return $this;
    }

    /**
     * @return AirPricingModifierRef[]
     */
    public function getAirPricingModifierRef()
    {
      return $this->AirPricingModifierRef;
    }

    /**
     * @param AirPricingModifierRef[] $AirPricingModifierRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setAirPricingModifierRef(array $AirPricingModifierRef = null)
    {
      $this->AirPricingModifierRef = $AirPricingModifierRef;
      return $this;
    }

    /**
     * @return AirPricingSolutionRef[]
     */
    public function getAirPricingSolutionRef()
    {
      return $this->AirPricingSolutionRef;
    }

    /**
     * @param AirPricingSolutionRef[] $AirPricingSolutionRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setAirPricingSolutionRef(array $AirPricingSolutionRef = null)
    {
      $this->AirPricingSolutionRef = $AirPricingSolutionRef;
      return $this;
    }

    /**
     * @return VehicleSearchModifiersRef[]
     */
    public function getVehicleSearchModifiersRef()
    {
      return $this->VehicleSearchModifiersRef;
    }

    /**
     * @param VehicleSearchModifiersRef[] $VehicleSearchModifiersRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setVehicleSearchModifiersRef(array $VehicleSearchModifiersRef = null)
    {
      $this->VehicleSearchModifiersRef = $VehicleSearchModifiersRef;
      return $this;
    }

    /**
     * @return VehicleDateLocationRef[]
     */
    public function getVehicleDateLocationRef()
    {
      return $this->VehicleDateLocationRef;
    }

    /**
     * @param VehicleDateLocationRef[] $VehicleDateLocationRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setVehicleDateLocationRef(array $VehicleDateLocationRef = null)
    {
      $this->VehicleDateLocationRef = $VehicleDateLocationRef;
      return $this;
    }

    /**
     * @return SpecialEquipmentRef[]
     */
    public function getSpecialEquipmentRef()
    {
      return $this->SpecialEquipmentRef;
    }

    /**
     * @param SpecialEquipmentRef[] $SpecialEquipmentRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setSpecialEquipmentRef(array $SpecialEquipmentRef = null)
    {
      $this->SpecialEquipmentRef = $SpecialEquipmentRef;
      return $this;
    }

    /**
     * @return VehicleSpecialRequestRef[]
     */
    public function getVehicleSpecialRequestRef()
    {
      return $this->VehicleSpecialRequestRef;
    }

    /**
     * @param VehicleSpecialRequestRef[] $VehicleSpecialRequestRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setVehicleSpecialRequestRef(array $VehicleSpecialRequestRef = null)
    {
      $this->VehicleSpecialRequestRef = $VehicleSpecialRequestRef;
      return $this;
    }

    /**
     * @return PaymentInformationRef[]
     */
    public function getPaymentInformationRef()
    {
      return $this->PaymentInformationRef;
    }

    /**
     * @param PaymentInformationRef[] $PaymentInformationRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setPaymentInformationRef(array $PaymentInformationRef = null)
    {
      $this->PaymentInformationRef = $PaymentInformationRef;
      return $this;
    }

    /**
     * @return DeliveryAddressRef[]
     */
    public function getDeliveryAddressRef()
    {
      return $this->DeliveryAddressRef;
    }

    /**
     * @param DeliveryAddressRef[] $DeliveryAddressRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setDeliveryAddressRef(array $DeliveryAddressRef = null)
    {
      $this->DeliveryAddressRef = $DeliveryAddressRef;
      return $this;
    }

    /**
     * @return CollectionAddressRef[]
     */
    public function getCollectionAddressRef()
    {
      return $this->CollectionAddressRef;
    }

    /**
     * @param CollectionAddressRef[] $CollectionAddressRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setCollectionAddressRef(array $CollectionAddressRef = null)
    {
      $this->CollectionAddressRef = $CollectionAddressRef;
      return $this;
    }

    /**
     * @return FlightArrivalInformationRef[]
     */
    public function getFlightArrivalInformationRef()
    {
      return $this->FlightArrivalInformationRef;
    }

    /**
     * @param FlightArrivalInformationRef[] $FlightArrivalInformationRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setFlightArrivalInformationRef(array $FlightArrivalInformationRef = null)
    {
      $this->FlightArrivalInformationRef = $FlightArrivalInformationRef;
      return $this;
    }

    /**
     * @return VehicleRef[]
     */
    public function getVehicleRef()
    {
      return $this->VehicleRef;
    }

    /**
     * @param VehicleRef[] $VehicleRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setVehicleRef(array $VehicleRef = null)
    {
      $this->VehicleRef = $VehicleRef;
      return $this;
    }

    /**
     * @return VendorLocationRef[]
     */
    public function getVendorLocationRef()
    {
      return $this->VendorLocationRef;
    }

    /**
     * @param VendorLocationRef[] $VendorLocationRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setVendorLocationRef(array $VendorLocationRef = null)
    {
      $this->VendorLocationRef = $VendorLocationRef;
      return $this;
    }

    /**
     * @return HotelPropertyRef[]
     */
    public function getHotelPropertyRef()
    {
      return $this->HotelPropertyRef;
    }

    /**
     * @param HotelPropertyRef[] $HotelPropertyRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setHotelPropertyRef(array $HotelPropertyRef = null)
    {
      $this->HotelPropertyRef = $HotelPropertyRef;
      return $this;
    }

    /**
     * @return HotelStayRef[]
     */
    public function getHotelStayRef()
    {
      return $this->HotelStayRef;
    }

    /**
     * @param HotelStayRef[] $HotelStayRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setHotelStayRef(array $HotelStayRef = null)
    {
      $this->HotelStayRef = $HotelStayRef;
      return $this;
    }

    /**
     * @return HotelRulesModifiersRef[]
     */
    public function getHotelRulesModifiersRef()
    {
      return $this->HotelRulesModifiersRef;
    }

    /**
     * @param HotelRulesModifiersRef[] $HotelRulesModifiersRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setHotelRulesModifiersRef(array $HotelRulesModifiersRef = null)
    {
      $this->HotelRulesModifiersRef = $HotelRulesModifiersRef;
      return $this;
    }

    /**
     * @return HotelDetailsModifiersRef[]
     */
    public function getHotelDetailsModifiersRef()
    {
      return $this->HotelDetailsModifiersRef;
    }

    /**
     * @param HotelDetailsModifiersRef[] $HotelDetailsModifiersRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setHotelDetailsModifiersRef(array $HotelDetailsModifiersRef = null)
    {
      $this->HotelDetailsModifiersRef = $HotelDetailsModifiersRef;
      return $this;
    }

    /**
     * @return HotelRateDetailRef[]
     */
    public function getHotelRateDetailRef()
    {
      return $this->HotelRateDetailRef;
    }

    /**
     * @param HotelRateDetailRef[] $HotelRateDetailRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setHotelRateDetailRef(array $HotelRateDetailRef = null)
    {
      $this->HotelRateDetailRef = $HotelRateDetailRef;
      return $this;
    }

    /**
     * @return PromotionCodeRef[]
     */
    public function getPromotionCodeRef()
    {
      return $this->PromotionCodeRef;
    }

    /**
     * @param PromotionCodeRef[] $PromotionCodeRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setPromotionCodeRef(array $PromotionCodeRef = null)
    {
      $this->PromotionCodeRef = $PromotionCodeRef;
      return $this;
    }

    /**
     * @return RailPricingSolutionRef[]
     */
    public function getRailPricingSolutionRef()
    {
      return $this->RailPricingSolutionRef;
    }

    /**
     * @param RailPricingSolutionRef[] $RailPricingSolutionRef
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setRailPricingSolutionRef(array $RailPricingSolutionRef = null)
    {
      $this->RailPricingSolutionRef = $RailPricingSolutionRef;
      return $this;
    }

    /**
     * @return anonymous1445
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1445 $Type
     * @return \FilippoToso\Travelport\Rail\SavedTripActivity
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
