<?php

namespace FilippoToso\Travelport\Rail;

class RailExchangeReq extends BaseCreateWithFormOfPaymentReq
{

    /**
     * @var RailExchangeSolution $RailExchangeSolution
     */
    protected $RailExchangeSolution = null;

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
     * @var typeLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var string $BookingActionType
     */
    protected $BookingActionType = null;

    /**
     * @var string $RefundOption
     */
    protected $RefundOption = null;

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
     * @param anonymous533 $RuleName
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param typeLocatorCode $ProviderLocatorCode
     * @param string $ProviderCode
     * @param string $CustomerNumber
     * @param int $Version
     * @param FormOfPayment $FormOfPayment
     * @param RailExchangeSolution $RailExchangeSolution
     * @param Payment $Payment
     * @param RailFareNoteList $RailFareNoteList
     * @param HostTokenList $HostTokenList
     * @param RailAutoSeatAssignment $RailAutoSeatAssignment
     * @param typeLocatorCode $LocatorCode
     * @param string $BookingActionType
     * @param string $RefundOption
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LinkedUniversalRecord = null, $BookingTraveler = null, $OSI = null, $AccountingRemark = null, $GeneralRemark = null, $XMLRemark = null, $UnassociatedRemark = null, $Postscript = null, $PassiveInfo = null, $ContinuityCheckOverride = null, $AgencyContactInfo = null, $CustomerID = null, $FileFinishingInfo = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $SSR = null, $EmailNotification = null, $QueuePlace = null, $RuleName = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null, $CustomerNumber = null, $Version = null, $FormOfPayment = null, $RailExchangeSolution = null, $Payment = null, $RailFareNoteList = null, $HostTokenList = null, $RailAutoSeatAssignment = null, $LocatorCode = null, $BookingActionType = null, $RefundOption = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $LinkedUniversalRecord, $BookingTraveler, $OSI, $AccountingRemark, $GeneralRemark, $XMLRemark, $UnassociatedRemark, $Postscript, $PassiveInfo, $ContinuityCheckOverride, $AgencyContactInfo, $CustomerID, $FileFinishingInfo, $CommissionRemark, $ConsolidatorRemark, $InvoiceRemark, $SSR, $EmailNotification, $QueuePlace, $RuleName, $UniversalRecordLocatorCode, $ProviderLocatorCode, $ProviderCode, $CustomerNumber, $Version, $FormOfPayment);
      $this->RailExchangeSolution = $RailExchangeSolution;
      $this->Payment = $Payment;
      $this->RailFareNoteList = $RailFareNoteList;
      $this->HostTokenList = $HostTokenList;
      $this->RailAutoSeatAssignment = $RailAutoSeatAssignment;
      $this->LocatorCode = $LocatorCode;
      $this->BookingActionType = $BookingActionType;
      $this->RefundOption = $RefundOption;
    }

    /**
     * @return RailExchangeSolution
     */
    public function getRailExchangeSolution()
    {
      return $this->RailExchangeSolution;
    }

    /**
     * @param RailExchangeSolution $RailExchangeSolution
     * @return \FilippoToso\Travelport\Rail\RailExchangeReq
     */
    public function setRailExchangeSolution($RailExchangeSolution)
    {
      $this->RailExchangeSolution = $RailExchangeSolution;
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeReq
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeReq
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeReq
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeReq
     */
    public function setRailAutoSeatAssignment($RailAutoSeatAssignment)
    {
      $this->RailAutoSeatAssignment = $RailAutoSeatAssignment;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Rail\RailExchangeReq
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeReq
     */
    public function setBookingActionType($BookingActionType)
    {
      $this->BookingActionType = $BookingActionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundOption()
    {
      return $this->RefundOption;
    }

    /**
     * @param string $RefundOption
     * @return \FilippoToso\Travelport\Rail\RailExchangeReq
     */
    public function setRefundOption($RefundOption)
    {
      $this->RefundOption = $RefundOption;
      return $this;
    }

}
