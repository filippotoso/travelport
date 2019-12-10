<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirCreateReservationReq extends BaseCreateWithFormOfPaymentReq
{

    /**
     * @var SupplierLocator $SupplierLocator
     */
    protected $SupplierLocator = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    protected $ThirdPartyInformation = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var ActionStatus $ActionStatus
     */
    protected $ActionStatus = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var DeliveryInfo $DeliveryInfo
     */
    protected $DeliveryInfo = null;

    /**
     * @var AutoSeatAssignment $AutoSeatAssignment
     */
    protected $AutoSeatAssignment = null;

    /**
     * @var SpecificSeatAssignment $SpecificSeatAssignment
     */
    protected $SpecificSeatAssignment = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    protected $AssociatedRemark = null;

    /**
     * @var PocketItineraryRemark $PocketItineraryRemark
     */
    protected $PocketItineraryRemark = null;

    /**
     * @var ReviewBooking $ReviewBooking
     */
    protected $ReviewBooking = null;

    /**
     * @var AirPricingTicketingModifiers $AirPricingTicketingModifiers
     */
    protected $AirPricingTicketingModifiers = null;

    /**
     * @var typeRetainReservation $RetainReservation
     */
    protected $RetainReservation = null;

    /**
     * @var anonymous1520 $Source
     */
    protected $Source = null;

    /**
     * @var boolean $OverrideMCT
     */
    protected $OverrideMCT = null;

    /**
     * @var boolean $RestrictWaitlist
     */
    protected $RestrictWaitlist = null;

    /**
     * @var boolean $CreatePassiveForHold
     */
    protected $CreatePassiveForHold = null;

    /**
     * @var anonymous1521 $ChannelId
     */
    protected $ChannelId = null;

    /**
     * @var anonymous1522 $NSCC
     */
    protected $NSCC = null;

    /**
     * @var anonymous1523 $CheckPriceVarianceType
     */
    protected $CheckPriceVarianceType = null;

    /**
     * @var float $CheckPriceVarianceValue
     */
    protected $CheckPriceVarianceValue = null;

    /**
     * @var boolean $SplitReservation
     */
    protected $SplitReservation = null;

    /**
     * @var boolean $PreferCompleteItinerary
     */
    protected $PreferCompleteItinerary = null;

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
     * @param SupplierLocator $SupplierLocator
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param PointOfSale $PointOfSale
     * @param AirPricingSolution $AirPricingSolution
     * @param ActionStatus $ActionStatus
     * @param Payment $Payment
     * @param DeliveryInfo $DeliveryInfo
     * @param AutoSeatAssignment $AutoSeatAssignment
     * @param SpecificSeatAssignment $SpecificSeatAssignment
     * @param AssociatedRemark $AssociatedRemark
     * @param PocketItineraryRemark $PocketItineraryRemark
     * @param ReviewBooking $ReviewBooking
     * @param AirPricingTicketingModifiers $AirPricingTicketingModifiers
     * @param typeRetainReservation $RetainReservation
     * @param anonymous1520 $Source
     * @param boolean $OverrideMCT
     * @param boolean $RestrictWaitlist
     * @param boolean $CreatePassiveForHold
     * @param anonymous1521 $ChannelId
     * @param anonymous1522 $NSCC
     * @param anonymous1523 $CheckPriceVarianceType
     * @param float $CheckPriceVarianceValue
     * @param boolean $SplitReservation
     * @param boolean $PreferCompleteItinerary
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LinkedUniversalRecord = null, $BookingTraveler = null, $OSI = null, $AccountingRemark = null, $GeneralRemark = null, $XMLRemark = null, $UnassociatedRemark = null, $Postscript = null, $PassiveInfo = null, $ContinuityCheckOverride = null, $AgencyContactInfo = null, $CustomerID = null, $FileFinishingInfo = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $SSR = null, $EmailNotification = null, $QueuePlace = null, $RuleName = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null, $CustomerNumber = null, $Version = null, $FormOfPayment = null, $SupplierLocator = null, $ThirdPartyInformation = null, $PointOfSale = null, $AirPricingSolution = null, $ActionStatus = null, $Payment = null, $DeliveryInfo = null, $AutoSeatAssignment = null, $SpecificSeatAssignment = null, $AssociatedRemark = null, $PocketItineraryRemark = null, $ReviewBooking = null, $AirPricingTicketingModifiers = null, $RetainReservation = null, $Source = null, $OverrideMCT = null, $RestrictWaitlist = null, $CreatePassiveForHold = null, $ChannelId = null, $NSCC = null, $CheckPriceVarianceType = null, $CheckPriceVarianceValue = null, $SplitReservation = null, $PreferCompleteItinerary = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $LinkedUniversalRecord, $BookingTraveler, $OSI, $AccountingRemark, $GeneralRemark, $XMLRemark, $UnassociatedRemark, $Postscript, $PassiveInfo, $ContinuityCheckOverride, $AgencyContactInfo, $CustomerID, $FileFinishingInfo, $CommissionRemark, $ConsolidatorRemark, $InvoiceRemark, $SSR, $EmailNotification, $QueuePlace, $RuleName, $UniversalRecordLocatorCode, $ProviderLocatorCode, $ProviderCode, $CustomerNumber, $Version, $FormOfPayment);
      $this->SupplierLocator = $SupplierLocator;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->PointOfSale = $PointOfSale;
      $this->AirPricingSolution = $AirPricingSolution;
      $this->ActionStatus = $ActionStatus;
      $this->Payment = $Payment;
      $this->DeliveryInfo = $DeliveryInfo;
      $this->AutoSeatAssignment = $AutoSeatAssignment;
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->PocketItineraryRemark = $PocketItineraryRemark;
      $this->ReviewBooking = $ReviewBooking;
      $this->AirPricingTicketingModifiers = $AirPricingTicketingModifiers;
      $this->RetainReservation = $RetainReservation;
      $this->Source = $Source;
      $this->OverrideMCT = $OverrideMCT;
      $this->RestrictWaitlist = $RestrictWaitlist;
      $this->CreatePassiveForHold = $CreatePassiveForHold;
      $this->ChannelId = $ChannelId;
      $this->NSCC = $NSCC;
      $this->CheckPriceVarianceType = $CheckPriceVarianceType;
      $this->CheckPriceVarianceValue = $CheckPriceVarianceValue;
      $this->SplitReservation = $SplitReservation;
      $this->PreferCompleteItinerary = $PreferCompleteItinerary;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setActionStatus($ActionStatus)
    {
      $this->ActionStatus = $ActionStatus;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setDeliveryInfo($DeliveryInfo)
    {
      $this->DeliveryInfo = $DeliveryInfo;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setSpecificSeatAssignment($SpecificSeatAssignment)
    {
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setPocketItineraryRemark($PocketItineraryRemark)
    {
      $this->PocketItineraryRemark = $PocketItineraryRemark;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setReviewBooking($ReviewBooking)
    {
      $this->ReviewBooking = $ReviewBooking;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setAirPricingTicketingModifiers($AirPricingTicketingModifiers)
    {
      $this->AirPricingTicketingModifiers = $AirPricingTicketingModifiers;
      return $this;
    }

    /**
     * @return typeRetainReservation
     */
    public function getRetainReservation()
    {
      return $this->RetainReservation;
    }

    /**
     * @param typeRetainReservation $RetainReservation
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setRetainReservation($RetainReservation)
    {
      $this->RetainReservation = $RetainReservation;
      return $this;
    }

    /**
     * @return anonymous1520
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param anonymous1520 $Source
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideMCT()
    {
      return $this->OverrideMCT;
    }

    /**
     * @param boolean $OverrideMCT
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setOverrideMCT($OverrideMCT)
    {
      $this->OverrideMCT = $OverrideMCT;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setRestrictWaitlist($RestrictWaitlist)
    {
      $this->RestrictWaitlist = $RestrictWaitlist;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreatePassiveForHold()
    {
      return $this->CreatePassiveForHold;
    }

    /**
     * @param boolean $CreatePassiveForHold
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setCreatePassiveForHold($CreatePassiveForHold)
    {
      $this->CreatePassiveForHold = $CreatePassiveForHold;
      return $this;
    }

    /**
     * @return anonymous1521
     */
    public function getChannelId()
    {
      return $this->ChannelId;
    }

    /**
     * @param anonymous1521 $ChannelId
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setChannelId($ChannelId)
    {
      $this->ChannelId = $ChannelId;
      return $this;
    }

    /**
     * @return anonymous1522
     */
    public function getNSCC()
    {
      return $this->NSCC;
    }

    /**
     * @param anonymous1522 $NSCC
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setNSCC($NSCC)
    {
      $this->NSCC = $NSCC;
      return $this;
    }

    /**
     * @return anonymous1523
     */
    public function getCheckPriceVarianceType()
    {
      return $this->CheckPriceVarianceType;
    }

    /**
     * @param anonymous1523 $CheckPriceVarianceType
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setCheckPriceVarianceType($CheckPriceVarianceType)
    {
      $this->CheckPriceVarianceType = $CheckPriceVarianceType;
      return $this;
    }

    /**
     * @return float
     */
    public function getCheckPriceVarianceValue()
    {
      return $this->CheckPriceVarianceValue;
    }

    /**
     * @param float $CheckPriceVarianceValue
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setCheckPriceVarianceValue($CheckPriceVarianceValue)
    {
      $this->CheckPriceVarianceValue = $CheckPriceVarianceValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSplitReservation()
    {
      return $this->SplitReservation;
    }

    /**
     * @param boolean $SplitReservation
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setSplitReservation($SplitReservation)
    {
      $this->SplitReservation = $SplitReservation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferCompleteItinerary()
    {
      return $this->PreferCompleteItinerary;
    }

    /**
     * @param boolean $PreferCompleteItinerary
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationReq
     */
    public function setPreferCompleteItinerary($PreferCompleteItinerary)
    {
      $this->PreferCompleteItinerary = $PreferCompleteItinerary;
      return $this;
    }

}
