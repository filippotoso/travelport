<?php

namespace FilippoToso\Travelport\Air;

class BaseReq extends BaseCoreReq
{

    /**
     * @var OverridePCC $OverridePCC
     */
    protected $OverridePCC = null;

    /**
     * @var boolean $RetrieveProviderReservationDetails
     */
    protected $RetrieveProviderReservationDetails = null;

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
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode);
      $this->OverridePCC = $OverridePCC;
      $this->RetrieveProviderReservationDetails = $RetrieveProviderReservationDetails;
    }

    /**
     * @return OverridePCC
     */
    public function getOverridePCC()
    {
      return $this->OverridePCC;
    }

    /**
     * @param OverridePCC $OverridePCC
     * @return \FilippoToso\Travelport\Air\BaseReq
     */
    public function setOverridePCC($OverridePCC)
    {
      $this->OverridePCC = $OverridePCC;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRetrieveProviderReservationDetails()
    {
      return $this->RetrieveProviderReservationDetails;
    }

    /**
     * @param boolean $RetrieveProviderReservationDetails
     * @return \FilippoToso\Travelport\Air\BaseReq
     */
    public function setRetrieveProviderReservationDetails($RetrieveProviderReservationDetails)
    {
      $this->RetrieveProviderReservationDetails = $RetrieveProviderReservationDetails;
      return $this;
    }

}
