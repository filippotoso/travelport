<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileRetrieveTemplateReq extends BaseReq
{

    /**
     * @var StringLength1to128[] $ConsumingSystem
     */
    protected $ConsumingSystem = null;

    /**
     * @var typeTemplateID $ID
     */
    protected $ID = null;

    /**
     * @var typeVersion $Version
     */
    protected $Version = null;

    /**
     * @var boolean $ReturnOverrideFieldsOnly
     */
    protected $ReturnOverrideFieldsOnly = null;

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
     * @param typeTemplateID $ID
     * @param typeVersion $Version
     * @param boolean $ReturnOverrideFieldsOnly
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ID = null, $Version = null, $ReturnOverrideFieldsOnly = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ID = $ID;
      $this->Version = $Version;
      $this->ReturnOverrideFieldsOnly = $ReturnOverrideFieldsOnly;
    }

    /**
     * @return StringLength1to128[]
     */
    public function getConsumingSystem()
    {
      return $this->ConsumingSystem;
    }

    /**
     * @param StringLength1to128[] $ConsumingSystem
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveTemplateReq
     */
    public function setConsumingSystem(array $ConsumingSystem = null)
    {
      $this->ConsumingSystem = $ConsumingSystem;
      return $this;
    }

    /**
     * @return typeTemplateID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeTemplateID $ID
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveTemplateReq
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return typeVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeVersion $Version
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveTemplateReq
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnOverrideFieldsOnly()
    {
      return $this->ReturnOverrideFieldsOnly;
    }

    /**
     * @param boolean $ReturnOverrideFieldsOnly
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveTemplateReq
     */
    public function setReturnOverrideFieldsOnly($ReturnOverrideFieldsOnly)
    {
      $this->ReturnOverrideFieldsOnly = $ReturnOverrideFieldsOnly;
      return $this;
    }

}
