<?php

namespace FilippoToso\Travelport\Util;

class CurrencyConversionReq extends BaseReq
{

    /**
     * @var CurrencyConversion $CurrencyConversion
     */
    protected $CurrencyConversion = null;

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
     * @param CurrencyConversion $CurrencyConversion
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $CurrencyConversion = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->CurrencyConversion = $CurrencyConversion;
    }

    /**
     * @return CurrencyConversion
     */
    public function getCurrencyConversion()
    {
      return $this->CurrencyConversion;
    }

    /**
     * @param CurrencyConversion $CurrencyConversion
     * @return \FilippoToso\Travelport\Util\CurrencyConversionReq
     */
    public function setCurrencyConversion($CurrencyConversion)
    {
      $this->CurrencyConversion = $CurrencyConversion;
      return $this;
    }

}
