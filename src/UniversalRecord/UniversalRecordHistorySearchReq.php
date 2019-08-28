<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordHistorySearchReq extends BaseReq
{

    /**
     * @var UniversalRecordHistorySearchModifiers $UniversalRecordHistorySearchModifiers
     */
    protected $UniversalRecordHistorySearchModifiers = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

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
     * @param UniversalRecordHistorySearchModifiers $UniversalRecordHistorySearchModifiers
     * @param typeLocatorCode $UniversalRecordLocatorCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $UniversalRecordHistorySearchModifiers = null, $UniversalRecordLocatorCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->UniversalRecordHistorySearchModifiers = $UniversalRecordHistorySearchModifiers;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
    }

    /**
     * @return UniversalRecordHistorySearchModifiers
     */
    public function getUniversalRecordHistorySearchModifiers()
    {
      return $this->UniversalRecordHistorySearchModifiers;
    }

    /**
     * @param UniversalRecordHistorySearchModifiers $UniversalRecordHistorySearchModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchReq
     */
    public function setUniversalRecordHistorySearchModifiers($UniversalRecordHistorySearchModifiers)
    {
      $this->UniversalRecordHistorySearchModifiers = $UniversalRecordHistorySearchModifiers;
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchReq
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

}
