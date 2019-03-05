<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSearchActionReq extends BaseReq
{

    /**
     * @var StringLength1to128 $ConsumingSystem
     */
    protected $ConsumingSystem = null;

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
     * @param StringLength1to128 $ConsumingSystem
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ConsumingSystem = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ConsumingSystem = $ConsumingSystem;
    }

    /**
     * @return StringLength1to128
     */
    public function getConsumingSystem()
    {
      return $this->ConsumingSystem;
    }

    /**
     * @param StringLength1to128 $ConsumingSystem
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchActionReq
     */
    public function setConsumingSystem($ConsumingSystem)
    {
      $this->ConsumingSystem = $ConsumingSystem;
      return $this;
    }

}
