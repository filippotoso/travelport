<?php

namespace FilippoToso\Travelport\Util;

class McoVoidReq extends BaseReq
{

    /**
     * @var GeneralRemark $GeneralRemark
     */
    protected $GeneralRemark = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var boolean $ReturnMCO
     */
    protected $ReturnMCO = null;

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
     * @param GeneralRemark $GeneralRemark
     * @param string $Number
     * @param boolean $ReturnMCO
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $GeneralRemark = null, $Number = null, $ReturnMCO = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->GeneralRemark = $GeneralRemark;
      $this->Number = $Number;
      $this->ReturnMCO = $ReturnMCO;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\Util\McoVoidReq
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\Util\McoVoidReq
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnMCO()
    {
      return $this->ReturnMCO;
    }

    /**
     * @param boolean $ReturnMCO
     * @return \FilippoToso\Travelport\Util\McoVoidReq
     */
    public function setReturnMCO($ReturnMCO)
    {
      $this->ReturnMCO = $ReturnMCO;
      return $this;
    }

}
