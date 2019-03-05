<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PassiveCreateReservationReq extends BaseCreateReservationReq
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
     * @var PassiveSegment $PassiveSegment
     */
    protected $PassiveSegment = null;

    /**
     * @var PassiveRemark $PassiveRemark
     */
    protected $PassiveRemark = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    protected $AssociatedRemark = null;

    /**
     * @var ActionStatus $ActionStatus
     */
    protected $ActionStatus = null;

    /**
     * @var ReviewBooking $ReviewBooking
     */
    protected $ReviewBooking = null;

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
     * @param SupplierLocator $SupplierLocator
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param PassiveSegment $PassiveSegment
     * @param PassiveRemark $PassiveRemark
     * @param AssociatedRemark $AssociatedRemark
     * @param ActionStatus $ActionStatus
     * @param ReviewBooking $ReviewBooking
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LinkedUniversalRecord = null, $BookingTraveler = null, $OSI = null, $AccountingRemark = null, $GeneralRemark = null, $XMLRemark = null, $UnassociatedRemark = null, $Postscript = null, $PassiveInfo = null, $ContinuityCheckOverride = null, $AgencyContactInfo = null, $CustomerID = null, $FileFinishingInfo = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $SSR = null, $EmailNotification = null, $QueuePlace = null, $RuleName = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null, $CustomerNumber = null, $Version = null, $SupplierLocator = null, $ThirdPartyInformation = null, $PassiveSegment = null, $PassiveRemark = null, $AssociatedRemark = null, $ActionStatus = null, $ReviewBooking = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $LinkedUniversalRecord, $BookingTraveler, $OSI, $AccountingRemark, $GeneralRemark, $XMLRemark, $UnassociatedRemark, $Postscript, $PassiveInfo, $ContinuityCheckOverride, $AgencyContactInfo, $CustomerID, $FileFinishingInfo, $CommissionRemark, $ConsolidatorRemark, $InvoiceRemark, $SSR, $EmailNotification, $QueuePlace, $RuleName, $UniversalRecordLocatorCode, $ProviderLocatorCode, $ProviderCode, $CustomerNumber, $Version);
      $this->SupplierLocator = $SupplierLocator;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->PassiveSegment = $PassiveSegment;
      $this->PassiveRemark = $PassiveRemark;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->ActionStatus = $ActionStatus;
      $this->ReviewBooking = $ReviewBooking;
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
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCreateReservationReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCreateReservationReq
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return PassiveSegment
     */
    public function getPassiveSegment()
    {
      return $this->PassiveSegment;
    }

    /**
     * @param PassiveSegment $PassiveSegment
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCreateReservationReq
     */
    public function setPassiveSegment($PassiveSegment)
    {
      $this->PassiveSegment = $PassiveSegment;
      return $this;
    }

    /**
     * @return PassiveRemark
     */
    public function getPassiveRemark()
    {
      return $this->PassiveRemark;
    }

    /**
     * @param PassiveRemark $PassiveRemark
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCreateReservationReq
     */
    public function setPassiveRemark($PassiveRemark)
    {
      $this->PassiveRemark = $PassiveRemark;
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
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCreateReservationReq
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
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
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCreateReservationReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCreateReservationReq
     */
    public function setReviewBooking($ReviewBooking)
    {
      $this->ReviewBooking = $ReviewBooking;
      return $this;
    }

}
