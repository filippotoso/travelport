<?php

namespace FilippoToso\Travelport\Air;

class AirPrePayReq extends BaseReq
{

    /**
     * @var ListSearch $ListSearch
     */
    protected $ListSearch = null;

    /**
     * @var PrePayRetrieve $PrePayRetrieve
     */
    protected $PrePayRetrieve = null;

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
     * @param ListSearch $ListSearch
     * @param PrePayRetrieve $PrePayRetrieve
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ListSearch = null, $PrePayRetrieve = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ListSearch = $ListSearch;
      $this->PrePayRetrieve = $PrePayRetrieve;
    }

    /**
     * @return ListSearch
     */
    public function getListSearch()
    {
      return $this->ListSearch;
    }

    /**
     * @param ListSearch $ListSearch
     * @return \FilippoToso\Travelport\Air\AirPrePayReq
     */
    public function setListSearch($ListSearch)
    {
      $this->ListSearch = $ListSearch;
      return $this;
    }

    /**
     * @return PrePayRetrieve
     */
    public function getPrePayRetrieve()
    {
      return $this->PrePayRetrieve;
    }

    /**
     * @param PrePayRetrieve $PrePayRetrieve
     * @return \FilippoToso\Travelport\Air\AirPrePayReq
     */
    public function setPrePayRetrieve($PrePayRetrieve)
    {
      $this->PrePayRetrieve = $PrePayRetrieve;
      return $this;
    }

}
