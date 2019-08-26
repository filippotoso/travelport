<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyTemplateReq extends BaseReq
{

    /**
     * @var TemplateModifyCmd $TemplateModifyCmd
     */
    protected $TemplateModifyCmd = null;

    /**
     * @var typeTemplateID $ID
     */
    protected $ID = null;

    /**
     * @var typeVersion $Version
     */
    protected $Version = null;

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
     * @param TemplateModifyCmd $TemplateModifyCmd
     * @param typeTemplateID $ID
     * @param typeVersion $Version
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $TemplateModifyCmd, $ID, $Version)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->TemplateModifyCmd = $TemplateModifyCmd;
      $this->ID = $ID;
      $this->Version = $Version;
    }

    /**
     * @return TemplateModifyCmd
     */
    public function getTemplateModifyCmd()
    {
      return $this->TemplateModifyCmd;
    }

    /**
     * @param TemplateModifyCmd $TemplateModifyCmd
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyTemplateReq
     */
    public function setTemplateModifyCmd($TemplateModifyCmd)
    {
      $this->TemplateModifyCmd = $TemplateModifyCmd;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyTemplateReq
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyTemplateReq
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
