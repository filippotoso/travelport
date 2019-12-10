<?php

namespace FilippoToso\Travelport\Util;

class MirReportRetrieveReq extends BaseReq
{

    /**
     * @var anonymous1091 $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var anonymous1092 $ReportFormat
     */
    protected $ReportFormat = null;

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
     * @param anonymous1091 $LocatorCode
     * @param anonymous1092 $ReportFormat
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LocatorCode = null, $ReportFormat = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->LocatorCode = $LocatorCode;
      $this->ReportFormat = $ReportFormat;
    }

    /**
     * @return anonymous1091
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param anonymous1091 $LocatorCode
     * @return \FilippoToso\Travelport\Util\MirReportRetrieveReq
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return anonymous1092
     */
    public function getReportFormat()
    {
      return $this->ReportFormat;
    }

    /**
     * @param anonymous1092 $ReportFormat
     * @return \FilippoToso\Travelport\Util\MirReportRetrieveReq
     */
    public function setReportFormat($ReportFormat)
    {
      $this->ReportFormat = $ReportFormat;
      return $this;
    }

}
