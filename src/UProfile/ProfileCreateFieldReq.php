<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileCreateFieldReq extends BaseReq
{

    /**
     * @var CreateField $CreateField
     */
    protected $CreateField = null;

    /**
     * @var CreateFieldGroup $CreateFieldGroup
     */
    protected $CreateFieldGroup = null;

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

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
     * @param CreateField $CreateField
     * @param CreateFieldGroup $CreateFieldGroup
     * @param typeProfileID $ProfileID
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $CreateField = null, $CreateFieldGroup = null, $ProfileID = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->CreateField = $CreateField;
      $this->CreateFieldGroup = $CreateFieldGroup;
      $this->ProfileID = $ProfileID;
    }

    /**
     * @return CreateField
     */
    public function getCreateField()
    {
      return $this->CreateField;
    }

    /**
     * @param CreateField $CreateField
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateFieldReq
     */
    public function setCreateField($CreateField)
    {
      $this->CreateField = $CreateField;
      return $this;
    }

    /**
     * @return CreateFieldGroup
     */
    public function getCreateFieldGroup()
    {
      return $this->CreateFieldGroup;
    }

    /**
     * @param CreateFieldGroup $CreateFieldGroup
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateFieldReq
     */
    public function setCreateFieldGroup($CreateFieldGroup)
    {
      $this->CreateFieldGroup = $CreateFieldGroup;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \FilippoToso\Travelport\UProfile\ProfileCreateFieldReq
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

}
