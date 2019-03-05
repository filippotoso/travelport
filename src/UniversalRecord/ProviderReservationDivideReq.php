<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProviderReservationDivideReq extends BaseReq
{

    /**
     * @var BookingTravelerRef[] $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @var anonymous1477 $CreateChildUniversalRecord
     */
    protected $CreateChildUniversalRecord = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

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
     * @param BookingTravelerRef[] $BookingTravelerRef
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param anonymous1477 $CreateChildUniversalRecord
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, array $BookingTravelerRef = null, $UniversalRecordLocatorCode = null, $CreateChildUniversalRecord = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->CreateChildUniversalRecord = $CreateChildUniversalRecord;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDivideReq
     */
    public function setBookingTravelerRef(array $BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDivideReq
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return anonymous1477
     */
    public function getCreateChildUniversalRecord()
    {
      return $this->CreateChildUniversalRecord;
    }

    /**
     * @param anonymous1477 $CreateChildUniversalRecord
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDivideReq
     */
    public function setCreateChildUniversalRecord($CreateChildUniversalRecord)
    {
      $this->CreateChildUniversalRecord = $CreateChildUniversalRecord;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDivideReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDivideReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
