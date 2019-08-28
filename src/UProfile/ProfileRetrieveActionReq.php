<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileRetrieveActionReq extends BaseReq
{

    /**
     * @var typeActionRef[] $ActionInfo
     */
    protected $ActionInfo = null;

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
     * @param typeActionRef[] $ActionInfo
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, array $ActionInfo = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ActionInfo = $ActionInfo;
    }

    /**
     * @return typeActionRef[]
     */
    public function getActionInfo()
    {
      return $this->ActionInfo;
    }

    /**
     * @param typeActionRef[] $ActionInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveActionReq
     */
    public function setActionInfo(array $ActionInfo)
    {
      $this->ActionInfo = $ActionInfo;
      return $this;
    }

}
