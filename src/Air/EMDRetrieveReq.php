<?php

namespace FilippoToso\Travelport\Air;

class EMDRetrieveReq extends BaseReq
{

    /**
     * @var ListRetrieve $ListRetrieve
     */
    protected $ListRetrieve = null;

    /**
     * @var DetailRetrieve $DetailRetrieve
     */
    protected $DetailRetrieve = null;

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
     * @param ListRetrieve $ListRetrieve
     * @param DetailRetrieve $DetailRetrieve
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ListRetrieve = null, $DetailRetrieve = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ListRetrieve = $ListRetrieve;
      $this->DetailRetrieve = $DetailRetrieve;
    }

    /**
     * @return ListRetrieve
     */
    public function getListRetrieve()
    {
      return $this->ListRetrieve;
    }

    /**
     * @param ListRetrieve $ListRetrieve
     * @return \FilippoToso\Travelport\Air\EMDRetrieveReq
     */
    public function setListRetrieve($ListRetrieve)
    {
      $this->ListRetrieve = $ListRetrieve;
      return $this;
    }

    /**
     * @return DetailRetrieve
     */
    public function getDetailRetrieve()
    {
      return $this->DetailRetrieve;
    }

    /**
     * @param DetailRetrieve $DetailRetrieve
     * @return \FilippoToso\Travelport\Air\EMDRetrieveReq
     */
    public function setDetailRetrieve($DetailRetrieve)
    {
      $this->DetailRetrieve = $DetailRetrieve;
      return $this;
    }

}
