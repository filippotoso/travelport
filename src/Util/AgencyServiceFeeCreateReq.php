<?php

namespace FilippoToso\Travelport\Util;

class AgencyServiceFeeCreateReq extends BaseReq
{

    /**
     * @var ServiceFeeInfo $ServiceFeeInfo
     */
    protected $ServiceFeeInfo = null;

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
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param typeLocatorCode $ProviderLocatorCode
     * @param string $ProviderCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ServiceFeeInfo = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ServiceFeeInfo = $ServiceFeeInfo;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return ServiceFeeInfo
     */
    public function getServiceFeeInfo()
    {
      return $this->ServiceFeeInfo;
    }

    /**
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @return \FilippoToso\Travelport\Util\AgencyServiceFeeCreateReq
     */
    public function setServiceFeeInfo($ServiceFeeInfo)
    {
      $this->ServiceFeeInfo = $ServiceFeeInfo;
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
     * @return \FilippoToso\Travelport\Util\AgencyServiceFeeCreateReq
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
     * @return \FilippoToso\Travelport\Util\AgencyServiceFeeCreateReq
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
     * @return \FilippoToso\Travelport\Util\AgencyServiceFeeCreateReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
