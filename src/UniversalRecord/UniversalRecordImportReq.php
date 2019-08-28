<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordImportReq extends BaseReq
{

    /**
     * @var FileFinishingInfo $FileFinishingInfo
     */
    protected $FileFinishingInfo = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

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
     * @param FileFinishingInfo $FileFinishingInfo
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $FileFinishingInfo = null, $UniversalRecordLocatorCode = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->FileFinishingInfo = $FileFinishingInfo;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordImportReq
     */
    public function setFileFinishingInfo($FileFinishingInfo)
    {
      $this->FileFinishingInfo = $FileFinishingInfo;
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordImportReq
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordImportReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordImportReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
