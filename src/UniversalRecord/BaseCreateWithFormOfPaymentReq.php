<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BaseCreateWithFormOfPaymentReq extends BaseCreateReservationReq
{

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

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
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LinkedUniversalRecord = null, $BookingTraveler = null, $OSI = null, $AccountingRemark = null, $GeneralRemark = null, $XMLRemark = null, $UnassociatedRemark = null, $Postscript = null, $PassiveInfo = null, $ContinuityCheckOverride = null, $AgencyContactInfo = null, $CustomerID = null, $FileFinishingInfo = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $SSR = null, $EmailNotification = null, $QueuePlace = null, $RuleName = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null, $CustomerNumber = null, $Version = null, $FormOfPayment = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $LinkedUniversalRecord, $BookingTraveler, $OSI, $AccountingRemark, $GeneralRemark, $XMLRemark, $UnassociatedRemark, $Postscript, $PassiveInfo, $ContinuityCheckOverride, $AgencyContactInfo, $CustomerID, $FileFinishingInfo, $CommissionRemark, $ConsolidatorRemark, $InvoiceRemark, $SSR, $EmailNotification, $QueuePlace, $RuleName, $UniversalRecordLocatorCode, $ProviderLocatorCode, $ProviderCode, $CustomerNumber, $Version);
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
     * @return \FilippoToso\Travelport\UniversalRecord\BaseCreateWithFormOfPaymentReq
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

}
