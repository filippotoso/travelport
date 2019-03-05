<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelCreateReservationReq extends BaseCreateWithFormOfPaymentReq
{

    /**
     * @var HotelRateDetail $HotelRateDetail
     */
    protected $HotelRateDetail = null;

    /**
     * @var HotelProperty $HotelProperty
     */
    protected $HotelProperty = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    protected $ThirdPartyInformation = null;

    /**
     * @var HotelStay $HotelStay
     */
    protected $HotelStay = null;

    /**
     * @var Guarantee $Guarantee
     */
    protected $Guarantee = null;

    /**
     * @var typeGeneralText $HotelSpecialRequest
     */
    protected $HotelSpecialRequest = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @var PromotionCode $PromotionCode
     */
    protected $PromotionCode = null;

    /**
     * @var BookingSource $BookingSource
     */
    protected $BookingSource = null;

    /**
     * @var HotelBedding $HotelBedding
     */
    protected $HotelBedding = null;

    /**
     * @var GuestInformation $GuestInformation
     */
    protected $GuestInformation = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    protected $AssociatedRemark = null;

    /**
     * @var ReservationName $ReservationName
     */
    protected $ReservationName = null;

    /**
     * @var ActionStatus $ActionStatus
     */
    protected $ActionStatus = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var ReviewBooking $ReviewBooking
     */
    protected $ReviewBooking = null;

    /**
     * @var string $HotelCommission
     */
    protected $HotelCommission = null;

    /**
     * @var BookingGuestInformation $BookingGuestInformation
     */
    protected $BookingGuestInformation = null;

    /**
     * @var boolean $UserAcceptance
     */
    protected $UserAcceptance = null;

    /**
     * @var boolean $MandatoryRateMatch
     */
    protected $MandatoryRateMatch = null;

    /**
     * @var typeStatusCode $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var typeHotelConfirmationNumber $BookingConfirmation
     */
    protected $BookingConfirmation = null;

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
     * @param HotelRateDetail $HotelRateDetail
     * @param HotelProperty $HotelProperty
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param HotelStay $HotelStay
     * @param Guarantee $Guarantee
     * @param typeGeneralText $HotelSpecialRequest
     * @param PointOfSale $PointOfSale
     * @param PromotionCode $PromotionCode
     * @param BookingSource $BookingSource
     * @param HotelBedding $HotelBedding
     * @param GuestInformation $GuestInformation
     * @param AssociatedRemark $AssociatedRemark
     * @param ReservationName $ReservationName
     * @param ActionStatus $ActionStatus
     * @param HostToken $HostToken
     * @param ReviewBooking $ReviewBooking
     * @param string $HotelCommission
     * @param BookingGuestInformation $BookingGuestInformation
     * @param boolean $UserAcceptance
     * @param boolean $MandatoryRateMatch
     * @param typeStatusCode $StatusCode
     * @param typeHotelConfirmationNumber $BookingConfirmation
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LinkedUniversalRecord = null, $BookingTraveler = null, $OSI = null, $AccountingRemark = null, $GeneralRemark = null, $XMLRemark = null, $UnassociatedRemark = null, $Postscript = null, $PassiveInfo = null, $ContinuityCheckOverride = null, $AgencyContactInfo = null, $CustomerID = null, $FileFinishingInfo = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $SSR = null, $EmailNotification = null, $QueuePlace = null, $RuleName = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null, $CustomerNumber = null, $Version = null, $FormOfPayment = null, $HotelRateDetail = null, $HotelProperty = null, $ThirdPartyInformation = null, $HotelStay = null, $Guarantee = null, $HotelSpecialRequest = null, $PointOfSale = null, $PromotionCode = null, $BookingSource = null, $HotelBedding = null, $GuestInformation = null, $AssociatedRemark = null, $ReservationName = null, $ActionStatus = null, $HostToken = null, $ReviewBooking = null, $HotelCommission = null, $BookingGuestInformation = null, $UserAcceptance = null, $MandatoryRateMatch = null, $StatusCode = null, $BookingConfirmation = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $LinkedUniversalRecord, $BookingTraveler, $OSI, $AccountingRemark, $GeneralRemark, $XMLRemark, $UnassociatedRemark, $Postscript, $PassiveInfo, $ContinuityCheckOverride, $AgencyContactInfo, $CustomerID, $FileFinishingInfo, $CommissionRemark, $ConsolidatorRemark, $InvoiceRemark, $SSR, $EmailNotification, $QueuePlace, $RuleName, $UniversalRecordLocatorCode, $ProviderLocatorCode, $ProviderCode, $CustomerNumber, $Version, $FormOfPayment);
      $this->HotelRateDetail = $HotelRateDetail;
      $this->HotelProperty = $HotelProperty;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->HotelStay = $HotelStay;
      $this->Guarantee = $Guarantee;
      $this->HotelSpecialRequest = $HotelSpecialRequest;
      $this->PointOfSale = $PointOfSale;
      $this->PromotionCode = $PromotionCode;
      $this->BookingSource = $BookingSource;
      $this->HotelBedding = $HotelBedding;
      $this->GuestInformation = $GuestInformation;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->ReservationName = $ReservationName;
      $this->ActionStatus = $ActionStatus;
      $this->HostToken = $HostToken;
      $this->ReviewBooking = $ReviewBooking;
      $this->HotelCommission = $HotelCommission;
      $this->BookingGuestInformation = $BookingGuestInformation;
      $this->UserAcceptance = $UserAcceptance;
      $this->MandatoryRateMatch = $MandatoryRateMatch;
      $this->StatusCode = $StatusCode;
      $this->BookingConfirmation = $BookingConfirmation;
    }

    /**
     * @return HotelRateDetail
     */
    public function getHotelRateDetail()
    {
      return $this->HotelRateDetail;
    }

    /**
     * @param HotelRateDetail $HotelRateDetail
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setHotelRateDetail($HotelRateDetail)
    {
      $this->HotelRateDetail = $HotelRateDetail;
      return $this;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return HotelStay
     */
    public function getHotelStay()
    {
      return $this->HotelStay;
    }

    /**
     * @param HotelStay $HotelStay
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setHotelStay($HotelStay)
    {
      $this->HotelStay = $HotelStay;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
      return $this;
    }

    /**
     * @return typeGeneralText
     */
    public function getHotelSpecialRequest()
    {
      return $this->HotelSpecialRequest;
    }

    /**
     * @param typeGeneralText $HotelSpecialRequest
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setHotelSpecialRequest($HotelSpecialRequest)
    {
      $this->HotelSpecialRequest = $HotelSpecialRequest;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

    /**
     * @return PromotionCode
     */
    public function getPromotionCode()
    {
      return $this->PromotionCode;
    }

    /**
     * @param PromotionCode $PromotionCode
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setPromotionCode($PromotionCode)
    {
      $this->PromotionCode = $PromotionCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setBookingSource($BookingSource)
    {
      $this->BookingSource = $BookingSource;
      return $this;
    }

    /**
     * @return HotelBedding
     */
    public function getHotelBedding()
    {
      return $this->HotelBedding;
    }

    /**
     * @param HotelBedding $HotelBedding
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setHotelBedding($HotelBedding)
    {
      $this->HotelBedding = $HotelBedding;
      return $this;
    }

    /**
     * @return GuestInformation
     */
    public function getGuestInformation()
    {
      return $this->GuestInformation;
    }

    /**
     * @param GuestInformation $GuestInformation
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setGuestInformation($GuestInformation)
    {
      $this->GuestInformation = $GuestInformation;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setReservationName($ReservationName)
    {
      $this->ReservationName = $ReservationName;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setActionStatus($ActionStatus)
    {
      $this->ActionStatus = $ActionStatus;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setReviewBooking($ReviewBooking)
    {
      $this->ReviewBooking = $ReviewBooking;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCommission()
    {
      return $this->HotelCommission;
    }

    /**
     * @param string $HotelCommission
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setHotelCommission($HotelCommission)
    {
      $this->HotelCommission = $HotelCommission;
      return $this;
    }

    /**
     * @return BookingGuestInformation
     */
    public function getBookingGuestInformation()
    {
      return $this->BookingGuestInformation;
    }

    /**
     * @param BookingGuestInformation $BookingGuestInformation
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setBookingGuestInformation($BookingGuestInformation)
    {
      $this->BookingGuestInformation = $BookingGuestInformation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUserAcceptance()
    {
      return $this->UserAcceptance;
    }

    /**
     * @param boolean $UserAcceptance
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setUserAcceptance($UserAcceptance)
    {
      $this->UserAcceptance = $UserAcceptance;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setMandatoryRateMatch($MandatoryRateMatch)
    {
      $this->MandatoryRateMatch = $MandatoryRateMatch;
      return $this;
    }

    /**
     * @return typeStatusCode
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param typeStatusCode $StatusCode
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return typeHotelConfirmationNumber
     */
    public function getBookingConfirmation()
    {
      return $this->BookingConfirmation;
    }

    /**
     * @param typeHotelConfirmationNumber $BookingConfirmation
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationReq
     */
    public function setBookingConfirmation($BookingConfirmation)
    {
      $this->BookingConfirmation = $BookingConfirmation;
      return $this;
    }

}
