<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailCreateReservationReq extends BaseCreateWithFormOfPaymentReq
{

    /**
     * @var RailPricingSolution $RailPricingSolution
     */
    protected $RailPricingSolution = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var RailFareNoteList $RailFareNoteList
     */
    protected $RailFareNoteList = null;

    /**
     * @var HostTokenList $HostTokenList
     */
    protected $HostTokenList = null;

    /**
     * @var RailAutoSeatAssignment $RailAutoSeatAssignment
     */
    protected $RailAutoSeatAssignment = null;

    /**
     * @var RailSpecificSeatAssignment $RailSpecificSeatAssignment
     */
    protected $RailSpecificSeatAssignment = null;

    /**
     * @var string $BookingActionType
     */
    protected $BookingActionType = null;

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
     * @param RailPricingSolution $RailPricingSolution
     * @param Payment $Payment
     * @param RailFareNoteList $RailFareNoteList
     * @param HostTokenList $HostTokenList
     * @param RailAutoSeatAssignment $RailAutoSeatAssignment
     * @param RailSpecificSeatAssignment $RailSpecificSeatAssignment
     * @param string $BookingActionType
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LinkedUniversalRecord = null, $BookingTraveler = null, $OSI = null, $AccountingRemark = null, $GeneralRemark = null, $XMLRemark = null, $UnassociatedRemark = null, $Postscript = null, $PassiveInfo = null, $ContinuityCheckOverride = null, $AgencyContactInfo = null, $CustomerID = null, $FileFinishingInfo = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $SSR = null, $EmailNotification = null, $QueuePlace = null, $RuleName = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null, $CustomerNumber = null, $Version = null, $FormOfPayment = null, $RailPricingSolution = null, $Payment = null, $RailFareNoteList = null, $HostTokenList = null, $RailAutoSeatAssignment = null, $RailSpecificSeatAssignment = null, $BookingActionType = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $LinkedUniversalRecord, $BookingTraveler, $OSI, $AccountingRemark, $GeneralRemark, $XMLRemark, $UnassociatedRemark, $Postscript, $PassiveInfo, $ContinuityCheckOverride, $AgencyContactInfo, $CustomerID, $FileFinishingInfo, $CommissionRemark, $ConsolidatorRemark, $InvoiceRemark, $SSR, $EmailNotification, $QueuePlace, $RuleName, $UniversalRecordLocatorCode, $ProviderLocatorCode, $ProviderCode, $CustomerNumber, $Version, $FormOfPayment);
      $this->RailPricingSolution = $RailPricingSolution;
      $this->Payment = $Payment;
      $this->RailFareNoteList = $RailFareNoteList;
      $this->HostTokenList = $HostTokenList;
      $this->RailAutoSeatAssignment = $RailAutoSeatAssignment;
      $this->RailSpecificSeatAssignment = $RailSpecificSeatAssignment;
      $this->BookingActionType = $BookingActionType;
    }

    /**
     * @return RailPricingSolution
     */
    public function getRailPricingSolution()
    {
      return $this->RailPricingSolution;
    }

    /**
     * @param RailPricingSolution $RailPricingSolution
     * @return \FilippoToso\Travelport\UniversalRecord\RailCreateReservationReq
     */
    public function setRailPricingSolution($RailPricingSolution)
    {
      $this->RailPricingSolution = $RailPricingSolution;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailCreateReservationReq
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return RailFareNoteList
     */
    public function getRailFareNoteList()
    {
      return $this->RailFareNoteList;
    }

    /**
     * @param RailFareNoteList $RailFareNoteList
     * @return \FilippoToso\Travelport\UniversalRecord\RailCreateReservationReq
     */
    public function setRailFareNoteList($RailFareNoteList)
    {
      $this->RailFareNoteList = $RailFareNoteList;
      return $this;
    }

    /**
     * @return HostTokenList
     */
    public function getHostTokenList()
    {
      return $this->HostTokenList;
    }

    /**
     * @param HostTokenList $HostTokenList
     * @return \FilippoToso\Travelport\UniversalRecord\RailCreateReservationReq
     */
    public function setHostTokenList($HostTokenList)
    {
      $this->HostTokenList = $HostTokenList;
      return $this;
    }

    /**
     * @return RailAutoSeatAssignment
     */
    public function getRailAutoSeatAssignment()
    {
      return $this->RailAutoSeatAssignment;
    }

    /**
     * @param RailAutoSeatAssignment $RailAutoSeatAssignment
     * @return \FilippoToso\Travelport\UniversalRecord\RailCreateReservationReq
     */
    public function setRailAutoSeatAssignment($RailAutoSeatAssignment)
    {
      $this->RailAutoSeatAssignment = $RailAutoSeatAssignment;
      return $this;
    }

    /**
     * @return RailSpecificSeatAssignment
     */
    public function getRailSpecificSeatAssignment()
    {
      return $this->RailSpecificSeatAssignment;
    }

    /**
     * @param RailSpecificSeatAssignment $RailSpecificSeatAssignment
     * @return \FilippoToso\Travelport\UniversalRecord\RailCreateReservationReq
     */
    public function setRailSpecificSeatAssignment($RailSpecificSeatAssignment)
    {
      $this->RailSpecificSeatAssignment = $RailSpecificSeatAssignment;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingActionType()
    {
      return $this->BookingActionType;
    }

    /**
     * @param string $BookingActionType
     * @return \FilippoToso\Travelport\UniversalRecord\RailCreateReservationReq
     */
    public function setBookingActionType($BookingActionType)
    {
      $this->BookingActionType = $BookingActionType;
      return $this;
    }

}
