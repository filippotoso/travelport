<?php

namespace FilippoToso\Travelport\Hotel;

class RetrieveHotelSearchAvailabilityReq extends BaseReq
{

    /**
     * @var string $SearchId
     */
    protected $SearchId = null;

    /**
     * @var typeProviderCode $ProviderCode
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
     * @param string $SearchId
     * @param typeProviderCode $ProviderCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $SearchId = null, $ProviderCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->SearchId = $SearchId;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return string
     */
    public function getSearchId()
    {
      return $this->SearchId;
    }

    /**
     * @param string $SearchId
     * @return \FilippoToso\Travelport\Hotel\RetrieveHotelSearchAvailabilityReq
     */
    public function setSearchId($SearchId)
    {
      $this->SearchId = $SearchId;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Hotel\RetrieveHotelSearchAvailabilityReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
