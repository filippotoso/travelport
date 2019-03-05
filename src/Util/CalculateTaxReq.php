<?php

namespace FilippoToso\Travelport\Util;

class CalculateTaxReq extends BaseReq
{

    /**
     * @var TaxCalcInfo $TaxCalcInfo
     */
    protected $TaxCalcInfo = null;

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
     * @param TaxCalcInfo $TaxCalcInfo
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $TaxCalcInfo = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->TaxCalcInfo = $TaxCalcInfo;
    }

    /**
     * @return TaxCalcInfo
     */
    public function getTaxCalcInfo()
    {
      return $this->TaxCalcInfo;
    }

    /**
     * @param TaxCalcInfo $TaxCalcInfo
     * @return \FilippoToso\Travelport\Util\CalculateTaxReq
     */
    public function setTaxCalcInfo($TaxCalcInfo)
    {
      $this->TaxCalcInfo = $TaxCalcInfo;
      return $this;
    }

}
