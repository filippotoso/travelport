<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyTagsReq extends BaseReq
{

    /**
     * @var ModifyTag $ModifyTag
     */
    protected $ModifyTag = null;

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
     * @param ModifyTag $ModifyTag
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ModifyTag = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ModifyTag = $ModifyTag;
    }

    /**
     * @return ModifyTag
     */
    public function getModifyTag()
    {
      return $this->ModifyTag;
    }

    /**
     * @param ModifyTag $ModifyTag
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyTagsReq
     */
    public function setModifyTag($ModifyTag)
    {
      $this->ModifyTag = $ModifyTag;
      return $this;
    }

}
