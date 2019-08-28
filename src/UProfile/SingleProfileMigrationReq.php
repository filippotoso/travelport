<?php

namespace FilippoToso\Travelport\UProfile;

class SingleProfileMigrationReq extends BaseReq
{

    /**
     * @var StringLength1to10 $ExternalSystem
     */
    protected $ExternalSystem = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var typePCC $PCC
     */
    protected $PCC = null;

    /**
     * @var StringLength1to50 $AccountProfileTitle
     */
    protected $AccountProfileTitle = null;

    /**
     * @var StringLength1to50 $TravelerProfileTitle
     */
    protected $TravelerProfileTitle = null;

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
     * @param StringLength1to10 $ExternalSystem
     * @param typeProfileType $ProfileType
     * @param typePCC $PCC
     * @param StringLength1to50 $AccountProfileTitle
     * @param StringLength1to50 $TravelerProfileTitle
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ExternalSystem = null, $ProfileType = null, $PCC = null, $AccountProfileTitle = null, $TravelerProfileTitle = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ExternalSystem = $ExternalSystem;
      $this->ProfileType = $ProfileType;
      $this->PCC = $PCC;
      $this->AccountProfileTitle = $AccountProfileTitle;
      $this->TravelerProfileTitle = $TravelerProfileTitle;
    }

    /**
     * @return StringLength1to10
     */
    public function getExternalSystem()
    {
      return $this->ExternalSystem;
    }

    /**
     * @param StringLength1to10 $ExternalSystem
     * @return \FilippoToso\Travelport\UProfile\SingleProfileMigrationReq
     */
    public function setExternalSystem($ExternalSystem)
    {
      $this->ExternalSystem = $ExternalSystem;
      return $this;
    }

    /**
     * @return typeProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeProfileType $ProfileType
     * @return \FilippoToso\Travelport\UProfile\SingleProfileMigrationReq
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPCC()
    {
      return $this->PCC;
    }

    /**
     * @param typePCC $PCC
     * @return \FilippoToso\Travelport\UProfile\SingleProfileMigrationReq
     */
    public function setPCC($PCC)
    {
      $this->PCC = $PCC;
      return $this;
    }

    /**
     * @return StringLength1to50
     */
    public function getAccountProfileTitle()
    {
      return $this->AccountProfileTitle;
    }

    /**
     * @param StringLength1to50 $AccountProfileTitle
     * @return \FilippoToso\Travelport\UProfile\SingleProfileMigrationReq
     */
    public function setAccountProfileTitle($AccountProfileTitle)
    {
      $this->AccountProfileTitle = $AccountProfileTitle;
      return $this;
    }

    /**
     * @return StringLength1to50
     */
    public function getTravelerProfileTitle()
    {
      return $this->TravelerProfileTitle;
    }

    /**
     * @param StringLength1to50 $TravelerProfileTitle
     * @return \FilippoToso\Travelport\UProfile\SingleProfileMigrationReq
     */
    public function setTravelerProfileTitle($TravelerProfileTitle)
    {
      $this->TravelerProfileTitle = $TravelerProfileTitle;
      return $this;
    }

}
