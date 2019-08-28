<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileCreateTagsReq extends BaseReq
{

    /**
     * @var CreateTag[] $CreateTag
     */
    protected $CreateTag = null;

    /**
     * @var typeProfileID $AgencyID
     */
    protected $AgencyID = null;

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
     * @param CreateTag[] $CreateTag
     * @param typeProfileID $AgencyID
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, array $CreateTag = null, $AgencyID = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->CreateTag = $CreateTag;
      $this->AgencyID = $AgencyID;
    }

    /**
     * @return CreateTag[]
     */
    public function getCreateTag()
    {
      return $this->CreateTag;
    }

    /**
     * @param CreateTag[] $CreateTag
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateTagsReq
     */
    public function setCreateTag(array $CreateTag)
    {
      $this->CreateTag = $CreateTag;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getAgencyID()
    {
      return $this->AgencyID;
    }

    /**
     * @param typeProfileID $AgencyID
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateTagsReq
     */
    public function setAgencyID($AgencyID)
    {
      $this->AgencyID = $AgencyID;
      return $this;
    }

}
