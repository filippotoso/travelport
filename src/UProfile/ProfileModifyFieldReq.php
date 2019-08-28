<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyFieldReq extends BaseReq
{

    /**
     * @var ModifyField $ModifyField
     */
    protected $ModifyField = null;

    /**
     * @var ModifyFieldGroup $ModifyFieldGroup
     */
    protected $ModifyFieldGroup = null;

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
     * @param ModifyField $ModifyField
     * @param ModifyFieldGroup $ModifyFieldGroup
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ModifyField = null, $ModifyFieldGroup = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ModifyField = $ModifyField;
      $this->ModifyFieldGroup = $ModifyFieldGroup;
    }

    /**
     * @return ModifyField
     */
    public function getModifyField()
    {
      return $this->ModifyField;
    }

    /**
     * @param ModifyField $ModifyField
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyFieldReq
     */
    public function setModifyField($ModifyField)
    {
      $this->ModifyField = $ModifyField;
      return $this;
    }

    /**
     * @return ModifyFieldGroup
     */
    public function getModifyFieldGroup()
    {
      return $this->ModifyFieldGroup;
    }

    /**
     * @param ModifyFieldGroup $ModifyFieldGroup
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyFieldReq
     */
    public function setModifyFieldGroup($ModifyFieldGroup)
    {
      $this->ModifyFieldGroup = $ModifyFieldGroup;
      return $this;
    }

}
