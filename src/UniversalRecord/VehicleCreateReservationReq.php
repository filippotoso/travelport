<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VehicleCreateReservationReq extends BaseCreateWithFormOfPaymentReq
{

    /**
     * @var VehicleDateLocation $VehicleDateLocation
     */
    protected $VehicleDateLocation = null;

    /**
     * @var Vehicle $Vehicle
     */
    protected $Vehicle = null;

    /**
     * @var SpecialEquipment $SpecialEquipment
     */
    protected $SpecialEquipment = null;

    /**
     * @var VehicleSpecialRequest $VehicleSpecialRequest
     */
    protected $VehicleSpecialRequest = null;

    /**
     * @var PaymentInformation $PaymentInformation
     */
    protected $PaymentInformation = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @var DeliveryAddress $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var CollectionAddress $CollectionAddress
     */
    protected $CollectionAddress = null;

    /**
     * @var FlightArrivalInformation $FlightArrivalInformation
     */
    protected $FlightArrivalInformation = null;

    /**
     * @var Guarantee $Guarantee
     */
    protected $Guarantee = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    protected $AssociatedRemark = null;

    /**
     * @var BookingSource $BookingSource
     */
    protected $BookingSource = null;

    /**
     * @var ReservationName $ReservationName
     */
    protected $ReservationName = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    protected $ThirdPartyInformation = null;

    /**
     * @var ActionStatus $ActionStatus
     */
    protected $ActionStatus = null;

    /**
     * @var ReviewBooking $ReviewBooking
     */
    protected $ReviewBooking = null;

    /**
     * @var boolean $MandatoryRateMatch
     */
    protected $MandatoryRateMatch = null;

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
     * @param LinkedUniversalRecord $LinkedUniversalRecord
     * @param BookingTraveler $BookingTraveler
     * @param OSI $OSI
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param XMLRemark $XMLRemark
     * @param UnassociatedRemark $UnassociatedRemark
     * @param Postscript $Postscript
     * @param PassiveInfo $PassiveInfo
     * @param ContinuityCheckOverride $ContinuityCheckOverride
     * @param AgencyContactInfo $AgencyContactInfo
     * @param CustomerID $CustomerID
     * @param FileFinishingInfo $FileFinishingInfo
     * @param CommissionRemark $CommissionRemark
     * @param ConsolidatorRemark $ConsolidatorRemark
     * @param InvoiceRemark $InvoiceRemark
     * @param SSR $SSR
     * @param EmailNotification $EmailNotification
     * @param QueuePlace $QueuePlace
     * @param anonymous536 $RuleName
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param typeLocatorCode $ProviderLocatorCode
     * @param string $ProviderCode
     * @param string $CustomerNumber
     * @param int $Version
     * @param FormOfPayment $FormOfPayment
     * @param VehicleDateLocation $VehicleDateLocation
     * @param Vehicle $Vehicle
     * @param SpecialEquipment $SpecialEquipment
     * @param VehicleSpecialRequest $VehicleSpecialRequest
     * @param PaymentInformation $PaymentInformation
     * @param PointOfSale $PointOfSale
     * @param DeliveryAddress $DeliveryAddress
     * @param CollectionAddress $CollectionAddress
     * @param FlightArrivalInformation $FlightArrivalInformation
     * @param Guarantee $Guarantee
     * @param AssociatedRemark $AssociatedRemark
     * @param BookingSource $BookingSource
     * @param ReservationName $ReservationName
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param ActionStatus $ActionStatus
     * @param ReviewBooking $ReviewBooking
     * @param boolean $MandatoryRateMatch
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LinkedUniversalRecord = null, $BookingTraveler = null, $OSI = null, $AccountingRemark = null, $GeneralRemark = null, $XMLRemark = null, $UnassociatedRemark = null, $Postscript = null, $PassiveInfo = null, $ContinuityCheckOverride = null, $AgencyContactInfo = null, $CustomerID = null, $FileFinishingInfo = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $SSR = null, $EmailNotification = null, $QueuePlace = null, $RuleName = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null, $CustomerNumber = null, $Version = null, $FormOfPayment = null, $VehicleDateLocation = null, $Vehicle = null, $SpecialEquipment = null, $VehicleSpecialRequest = null, $PaymentInformation = null, $PointOfSale = null, $DeliveryAddress = null, $CollectionAddress = null, $FlightArrivalInformation = null, $Guarantee = null, $AssociatedRemark = null, $BookingSource = null, $ReservationName = null, $ThirdPartyInformation = null, $ActionStatus = null, $ReviewBooking = null, $MandatoryRateMatch = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $LinkedUniversalRecord, $BookingTraveler, $OSI, $AccountingRemark, $GeneralRemark, $XMLRemark, $UnassociatedRemark, $Postscript, $PassiveInfo, $ContinuityCheckOverride, $AgencyContactInfo, $CustomerID, $FileFinishingInfo, $CommissionRemark, $ConsolidatorRemark, $InvoiceRemark, $SSR, $EmailNotification, $QueuePlace, $RuleName, $UniversalRecordLocatorCode, $ProviderLocatorCode, $ProviderCode, $CustomerNumber, $Version, $FormOfPayment);
      $this->VehicleDateLocation = $VehicleDateLocation;
      $this->Vehicle = $Vehicle;
      $this->SpecialEquipment = $SpecialEquipment;
      $this->VehicleSpecialRequest = $VehicleSpecialRequest;
      $this->PaymentInformation = $PaymentInformation;
      $this->PointOfSale = $PointOfSale;
      $this->DeliveryAddress = $DeliveryAddress;
      $this->CollectionAddress = $CollectionAddress;
      $this->FlightArrivalInformation = $FlightArrivalInformation;
      $this->Guarantee = $Guarantee;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->BookingSource = $BookingSource;
      $this->ReservationName = $ReservationName;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->ActionStatus = $ActionStatus;
      $this->ReviewBooking = $ReviewBooking;
      $this->MandatoryRateMatch = $MandatoryRateMatch;
    }

    /**
     * @return VehicleDateLocation
     */
    public function getVehicleDateLocation()
    {
      return $this->VehicleDateLocation;
    }

    /**
     * @param VehicleDateLocation $VehicleDateLocation
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setVehicleDateLocation($VehicleDateLocation)
    {
      $this->VehicleDateLocation = $VehicleDateLocation;
      return $this;
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
      return $this->Vehicle;
    }

    /**
     * @param Vehicle $Vehicle
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
      return $this;
    }

    /**
     * @return SpecialEquipment
     */
    public function getSpecialEquipment()
    {
      return $this->SpecialEquipment;
    }

    /**
     * @param SpecialEquipment $SpecialEquipment
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setSpecialEquipment($SpecialEquipment)
    {
      $this->SpecialEquipment = $SpecialEquipment;
      return $this;
    }

    /**
     * @return VehicleSpecialRequest
     */
    public function getVehicleSpecialRequest()
    {
      return $this->VehicleSpecialRequest;
    }

    /**
     * @param VehicleSpecialRequest $VehicleSpecialRequest
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setVehicleSpecialRequest($VehicleSpecialRequest)
    {
      $this->VehicleSpecialRequest = $VehicleSpecialRequest;
      return $this;
    }

    /**
     * @return PaymentInformation
     */
    public function getPaymentInformation()
    {
      return $this->PaymentInformation;
    }

    /**
     * @param PaymentInformation $PaymentInformation
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setPaymentInformation($PaymentInformation)
    {
      $this->PaymentInformation = $PaymentInformation;
      return $this;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

    /**
     * @return DeliveryAddress
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param DeliveryAddress $DeliveryAddress
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return CollectionAddress
     */
    public function getCollectionAddress()
    {
      return $this->CollectionAddress;
    }

    /**
     * @param CollectionAddress $CollectionAddress
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setCollectionAddress($CollectionAddress)
    {
      $this->CollectionAddress = $CollectionAddress;
      return $this;
    }

    /**
     * @return FlightArrivalInformation
     */
    public function getFlightArrivalInformation()
    {
      return $this->FlightArrivalInformation;
    }

    /**
     * @param FlightArrivalInformation $FlightArrivalInformation
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setFlightArrivalInformation($FlightArrivalInformation)
    {
      $this->FlightArrivalInformation = $FlightArrivalInformation;
      return $this;
    }

    /**
     * @return Guarantee
     */
    public function getGuarantee()
    {
      return $this->Guarantee;
    }

    /**
     * @param Guarantee $Guarantee
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
      return $this;
    }

    /**
     * @return BookingSource
     */
    public function getBookingSource()
    {
      return $this->BookingSource;
    }

    /**
     * @param BookingSource $BookingSource
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setBookingSource($BookingSource)
    {
      $this->BookingSource = $BookingSource;
      return $this;
    }

    /**
     * @return ReservationName
     */
    public function getReservationName()
    {
      return $this->ReservationName;
    }

    /**
     * @param ReservationName $ReservationName
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setReservationName($ReservationName)
    {
      $this->ReservationName = $ReservationName;
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return ActionStatus
     */
    public function getActionStatus()
    {
      return $this->ActionStatus;
    }

    /**
     * @param ActionStatus $ActionStatus
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setActionStatus($ActionStatus)
    {
      $this->ActionStatus = $ActionStatus;
      return $this;
    }

    /**
     * @return ReviewBooking
     */
    public function getReviewBooking()
    {
      return $this->ReviewBooking;
    }

    /**
     * @param ReviewBooking $ReviewBooking
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setReviewBooking($ReviewBooking)
    {
      $this->ReviewBooking = $ReviewBooking;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMandatoryRateMatch()
    {
      return $this->MandatoryRateMatch;
    }

    /**
     * @param boolean $MandatoryRateMatch
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCreateReservationReq
     */
    public function setMandatoryRateMatch($MandatoryRateMatch)
    {
      $this->MandatoryRateMatch = $MandatoryRateMatch;
      return $this;
    }

}
