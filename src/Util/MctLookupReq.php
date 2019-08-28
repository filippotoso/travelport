<?php

namespace FilippoToso\Travelport\Util;

class MctLookupReq extends BaseReq
{

    /**
     * @var MctSearch $MctSearch
     */
    protected $MctSearch = null;

    /**
     * @var MctQuery $MctQuery
     */
    protected $MctQuery = null;

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
     * @param MctQuery $MctQuery
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $MctSearch = null, $MctQuery = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->MctSearch = $MctSearch;
      $this->MctQuery = $MctQuery;
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
     * @return \FilippoToso\Travelport\Util\MctLookupReq
     */
    public function setMctSearch($MctSearch)
    {
      $this->MctSearch = $MctSearch;
      return $this;
    }

    /**
     * @return MctQuery
     */
    public function getMctQuery()
    {
      return $this->MctQuery;
    }

    /**
     * @param MctQuery $MctQuery
     * @return \FilippoToso\Travelport\Util\MctLookupReq
     */
    public function setMctQuery($MctQuery)
    {
      $this->MctQuery = $MctQuery;
      return $this;
    }

}
