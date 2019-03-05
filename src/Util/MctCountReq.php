<?php

namespace FilippoToso\Travelport\Util;

class MctCountReq extends BaseReq
{

    /**
     * @var MctSearch $MctSearch
     */
    protected $MctSearch = null;

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
     * @param MctSearch $MctSearch
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $MctSearch = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->MctSearch = $MctSearch;
    }

    /**
     * @return MctSearch
     */
    public function getMctSearch()
    {
      return $this->MctSearch;
    }

    /**
     * @param MctSearch $MctSearch
     * @return \FilippoToso\Travelport\Util\MctCountReq
     */
    public function setMctSearch($MctSearch)
    {
      $this->MctSearch = $MctSearch;
      return $this;
    }

}
