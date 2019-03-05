<?php

namespace FilippoToso\Travelport\Vehicle;

class BaseCreateReservationReq extends BaseReq
{

    /**
     * @var LinkedUniversalRecord $LinkedUniversalRecord
     */
    protected $LinkedUniversalRecord = null;

    /**
     * @var BookingTraveler $BookingTraveler
     */
    protected $BookingTraveler = null;

    /**
     * @var OSI $OSI
     */
    protected $OSI = null;

    /**
     * @var AccountingRemark $AccountingRemark
     */
    protected $AccountingRemark = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    protected $GeneralRemark = null;

    /**
     * @var XMLRemark $XMLRemark
     */
    protected $XMLRemark = null;

    /**
     * @var UnassociatedRemark $UnassociatedRemark
     */
    protected $UnassociatedRemark = null;

    /**
     * @var Postscript $Postscript
     */
    protected $Postscript = null;

    /**
     * @var PassiveInfo $PassiveInfo
     */
    protected $PassiveInfo = null;

    /**
     * @var ContinuityCheckOverride $ContinuityCheckOverride
     */
    protected $ContinuityCheckOverride = null;

    /**
     * @var AgencyContactInfo $AgencyContactInfo
     */
    protected $AgencyContactInfo = null;

    /**
     * @var CustomerID $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var FileFinishingInfo $FileFinishingInfo
     */
    protected $FileFinishingInfo = null;

    /**
     * @var CommissionRemark $CommissionRemark
     */
    protected $CommissionRemark = null;

    /**
     * @var ConsolidatorRemark $ConsolidatorRemark
     */
    protected $ConsolidatorRemark = null;

    /**
     * @var InvoiceRemark $InvoiceRemark
     */
    protected $InvoiceRemark = null;

    /**
     * @var SSR $SSR
     */
    protected $SSR = null;

    /**
     * @var EmailNotification $EmailNotification
     */
    protected $EmailNotification = null;

    /**
     * @var QueuePlace $QueuePlace
     */
    protected $QueuePlace = null;

    /**
     * @var anonymous536 $RuleName
     */
    protected $RuleName = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @var typeLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @var string $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var int $Version
     */
    protected $Version = null;

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
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LinkedUniversalRecord = null, $BookingTraveler = null, $OSI = null, $AccountingRemark = null, $GeneralRemark = null, $XMLRemark = null, $UnassociatedRemark = null, $Postscript = null, $PassiveInfo = null, $ContinuityCheckOverride = null, $AgencyContactInfo = null, $CustomerID = null, $FileFinishingInfo = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $SSR = null, $EmailNotification = null, $QueuePlace = null, $RuleName = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null, $CustomerNumber = null, $Version = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->LinkedUniversalRecord = $LinkedUniversalRecord;
      $this->BookingTraveler = $BookingTraveler;
      $this->OSI = $OSI;
      $this->AccountingRemark = $AccountingRemark;
      $this->GeneralRemark = $GeneralRemark;
      $this->XMLRemark = $XMLRemark;
      $this->UnassociatedRemark = $UnassociatedRemark;
      $this->Postscript = $Postscript;
      $this->PassiveInfo = $PassiveInfo;
      $this->ContinuityCheckOverride = $ContinuityCheckOverride;
      $this->AgencyContactInfo = $AgencyContactInfo;
      $this->CustomerID = $CustomerID;
      $this->FileFinishingInfo = $FileFinishingInfo;
      $this->CommissionRemark = $CommissionRemark;
      $this->ConsolidatorRemark = $ConsolidatorRemark;
      $this->InvoiceRemark = $InvoiceRemark;
      $this->SSR = $SSR;
      $this->EmailNotification = $EmailNotification;
      $this->QueuePlace = $QueuePlace;
      $this->RuleName = $RuleName;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->ProviderCode = $ProviderCode;
      $this->CustomerNumber = $CustomerNumber;
      $this->Version = $Version;
    }

    /**
     * @return LinkedUniversalRecord
     */
    public function getLinkedUniversalRecord()
    {
      return $this->LinkedUniversalRecord;
    }

    /**
     * @param LinkedUniversalRecord $LinkedUniversalRecord
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setLinkedUniversalRecord($LinkedUniversalRecord)
    {
      $this->LinkedUniversalRecord = $LinkedUniversalRecord;
      return $this;
    }

    /**
     * @return BookingTraveler
     */
    public function getBookingTraveler()
    {
      return $this->BookingTraveler;
    }

    /**
     * @param BookingTraveler $BookingTraveler
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setBookingTraveler($BookingTraveler)
    {
      $this->BookingTraveler = $BookingTraveler;
      return $this;
    }

    /**
     * @return OSI
     */
    public function getOSI()
    {
      return $this->OSI;
    }

    /**
     * @param OSI $OSI
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setOSI($OSI)
    {
      $this->OSI = $OSI;
      return $this;
    }

    /**
     * @return AccountingRemark
     */
    public function getAccountingRemark()
    {
      return $this->AccountingRemark;
    }

    /**
     * @param AccountingRemark $AccountingRemark
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return XMLRemark
     */
    public function getXMLRemark()
    {
      return $this->XMLRemark;
    }

    /**
     * @param XMLRemark $XMLRemark
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setXMLRemark($XMLRemark)
    {
      $this->XMLRemark = $XMLRemark;
      return $this;
    }

    /**
     * @return UnassociatedRemark
     */
    public function getUnassociatedRemark()
    {
      return $this->UnassociatedRemark;
    }

    /**
     * @param UnassociatedRemark $UnassociatedRemark
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setUnassociatedRemark($UnassociatedRemark)
    {
      $this->UnassociatedRemark = $UnassociatedRemark;
      return $this;
    }

    /**
     * @return Postscript
     */
    public function getPostscript()
    {
      return $this->Postscript;
    }

    /**
     * @param Postscript $Postscript
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setPostscript($Postscript)
    {
      $this->Postscript = $Postscript;
      return $this;
    }

    /**
     * @return PassiveInfo
     */
    public function getPassiveInfo()
    {
      return $this->PassiveInfo;
    }

    /**
     * @param PassiveInfo $PassiveInfo
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setPassiveInfo($PassiveInfo)
    {
      $this->PassiveInfo = $PassiveInfo;
      return $this;
    }

    /**
     * @return ContinuityCheckOverride
     */
    public function getContinuityCheckOverride()
    {
      return $this->ContinuityCheckOverride;
    }

    /**
     * @param ContinuityCheckOverride $ContinuityCheckOverride
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setContinuityCheckOverride($ContinuityCheckOverride)
    {
      $this->ContinuityCheckOverride = $ContinuityCheckOverride;
      return $this;
    }

    /**
     * @return AgencyContactInfo
     */
    public function getAgencyContactInfo()
    {
      return $this->AgencyContactInfo;
    }

    /**
     * @param AgencyContactInfo $AgencyContactInfo
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setAgencyContactInfo($AgencyContactInfo)
    {
      $this->AgencyContactInfo = $AgencyContactInfo;
      return $this;
    }

    /**
     * @return CustomerID
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param CustomerID $CustomerID
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return FileFinishingInfo
     */
    public function getFileFinishingInfo()
    {
      return $this->FileFinishingInfo;
    }

    /**
     * @param FileFinishingInfo $FileFinishingInfo
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setFileFinishingInfo($FileFinishingInfo)
    {
      $this->FileFinishingInfo = $FileFinishingInfo;
      return $this;
    }

    /**
     * @return CommissionRemark
     */
    public function getCommissionRemark()
    {
      return $this->CommissionRemark;
    }

    /**
     * @param CommissionRemark $CommissionRemark
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setCommissionRemark($CommissionRemark)
    {
      $this->CommissionRemark = $CommissionRemark;
      return $this;
    }

    /**
     * @return ConsolidatorRemark
     */
    public function getConsolidatorRemark()
    {
      return $this->ConsolidatorRemark;
    }

    /**
     * @param ConsolidatorRemark $ConsolidatorRemark
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setConsolidatorRemark($ConsolidatorRemark)
    {
      $this->ConsolidatorRemark = $ConsolidatorRemark;
      return $this;
    }

    /**
     * @return InvoiceRemark
     */
    public function getInvoiceRemark()
    {
      return $this->InvoiceRemark;
    }

    /**
     * @param InvoiceRemark $InvoiceRemark
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setInvoiceRemark($InvoiceRemark)
    {
      $this->InvoiceRemark = $InvoiceRemark;
      return $this;
    }

    /**
     * @return SSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param SSR $SSR
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return EmailNotification
     */
    public function getEmailNotification()
    {
      return $this->EmailNotification;
    }

    /**
     * @param EmailNotification $EmailNotification
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setEmailNotification($EmailNotification)
    {
      $this->EmailNotification = $EmailNotification;
      return $this;
    }

    /**
     * @return QueuePlace
     */
    public function getQueuePlace()
    {
      return $this->QueuePlace;
    }

    /**
     * @param QueuePlace $QueuePlace
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setQueuePlace($QueuePlace)
    {
      $this->QueuePlace = $QueuePlace;
      return $this;
    }

    /**
     * @return anonymous536
     */
    public function getRuleName()
    {
      return $this->RuleName;
    }

    /**
     * @param anonymous536 $RuleName
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setRuleName($RuleName)
    {
      $this->RuleName = $RuleName;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalRecordLocatorCode()
    {
      return $this->UniversalRecordLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param string $ProviderCode
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return \FilippoToso\Travelport\Vehicle\BaseCreateReservationReq
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
