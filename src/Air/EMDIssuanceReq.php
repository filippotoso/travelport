<?php

namespace FilippoToso\Travelport\Air;

class EMDIssuanceReq extends BaseReq
{

    /**
     * @var typeProviderReservationDetail $ProviderReservationDetail
     */
    protected $ProviderReservationDetail = null;

    /**
     * @var StringLength1to13 $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var IssuanceModifiers $IssuanceModifiers
     */
    protected $IssuanceModifiers = null;

    /**
     * @var SelectionModifiers $SelectionModifiers
     */
    protected $SelectionModifiers = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @var boolean $ShowDetails
     */
    protected $ShowDetails = null;

    /**
     * @var boolean $IssueAllOpenSVC
     */
    protected $IssueAllOpenSVC = null;

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
     * @param typeProviderReservationDetail $ProviderReservationDetail
     * @param StringLength1to13 $TicketNumber
     * @param IssuanceModifiers $IssuanceModifiers
     * @param SelectionModifiers $SelectionModifiers
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param boolean $ShowDetails
     * @param boolean $IssueAllOpenSVC
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProviderReservationDetail = null, $TicketNumber = null, $IssuanceModifiers = null, $SelectionModifiers = null, $UniversalRecordLocatorCode = null, $ShowDetails = null, $IssueAllOpenSVC = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProviderReservationDetail = $ProviderReservationDetail;
      $this->TicketNumber = $TicketNumber;
      $this->IssuanceModifiers = $IssuanceModifiers;
      $this->SelectionModifiers = $SelectionModifiers;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->ShowDetails = $ShowDetails;
      $this->IssueAllOpenSVC = $IssueAllOpenSVC;
    }

    /**
     * @return typeProviderReservationDetail
     */
    public function getProviderReservationDetail()
    {
      return $this->ProviderReservationDetail;
    }

    /**
     * @param typeProviderReservationDetail $ProviderReservationDetail
     * @return \FilippoToso\Travelport\Air\EMDIssuanceReq
     */
    public function setProviderReservationDetail($ProviderReservationDetail)
    {
      $this->ProviderReservationDetail = $ProviderReservationDetail;
      return $this;
    }

    /**
     * @return StringLength1to13
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param StringLength1to13 $TicketNumber
     * @return \FilippoToso\Travelport\Air\EMDIssuanceReq
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return IssuanceModifiers
     */
    public function getIssuanceModifiers()
    {
      return $this->IssuanceModifiers;
    }

    /**
     * @param IssuanceModifiers $IssuanceModifiers
     * @return \FilippoToso\Travelport\Air\EMDIssuanceReq
     */
    public function setIssuanceModifiers($IssuanceModifiers)
    {
      $this->IssuanceModifiers = $IssuanceModifiers;
      return $this;
    }

    /**
     * @return SelectionModifiers
     */
    public function getSelectionModifiers()
    {
      return $this->SelectionModifiers;
    }

    /**
     * @param SelectionModifiers $SelectionModifiers
     * @return \FilippoToso\Travelport\Air\EMDIssuanceReq
     */
    public function setSelectionModifiers($SelectionModifiers)
    {
      $this->SelectionModifiers = $SelectionModifiers;
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
     * @return \FilippoToso\Travelport\Air\EMDIssuanceReq
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowDetails()
    {
      return $this->ShowDetails;
    }

    /**
     * @param boolean $ShowDetails
     * @return \FilippoToso\Travelport\Air\EMDIssuanceReq
     */
    public function setShowDetails($ShowDetails)
    {
      $this->ShowDetails = $ShowDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIssueAllOpenSVC()
    {
      return $this->IssueAllOpenSVC;
    }

    /**
     * @param boolean $IssueAllOpenSVC
     * @return \FilippoToso\Travelport\Air\EMDIssuanceReq
     */
    public function setIssueAllOpenSVC($IssueAllOpenSVC)
    {
      $this->IssueAllOpenSVC = $IssueAllOpenSVC;
      return $this;
    }

}
