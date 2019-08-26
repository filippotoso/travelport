<?php

namespace FilippoToso\Travelport\Util;

class MirReportRetrieveReq extends BaseReq
{

    /**
     * @var anonymous1089 $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var anonymous1090 $ReportFormat
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
     * @param anonymous1089 $LocatorCode
     * @param anonymous1090 $ReportFormat
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $LocatorCode, $ReportFormat)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->LocatorCode = $LocatorCode;
      $this->ReportFormat = $ReportFormat;
    }

    /**
     * @return anonymous1089
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param anonymous1089 $LocatorCode
     * @return \FilippoToso\Travelport\Util\MirReportRetrieveReq
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return anonymous1090
     */
    public function getReportFormat()
    {
      return $this->ReportFormat;
    }

    /**
     * @param anonymous1090 $ReportFormat
     * @return \FilippoToso\Travelport\Util\MirReportRetrieveReq
     */
    public function setReportFormat($ReportFormat)
    {
      $this->ReportFormat = $ReportFormat;
      return $this;
    }

}
