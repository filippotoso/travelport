<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyBridgeBranchesReq extends BaseReq
{

    /**
     * @var typeProfileID $AgentID
     */
    protected $AgentID = null;

    /**
     * @var StringLength1to128 $UserName
     */
    protected $UserName = null;

    /**
     * @var BridgeBranchCmd $BridgeBranchCmd
     */
    protected $BridgeBranchCmd = null;

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
     * @param typeProfileID $AgentID
     * @param StringLength1to128 $UserName
     * @param BridgeBranchCmd $BridgeBranchCmd
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AgentID = null, $UserName = null, $BridgeBranchCmd = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AgentID = $AgentID;
      $this->UserName = $UserName;
      $this->BridgeBranchCmd = $BridgeBranchCmd;
    }

    /**
     * @return typeProfileID
     */
    public function getAgentID()
    {
      return $this->AgentID;
    }

    /**
     * @param typeProfileID $AgentID
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyBridgeBranchesReq
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param StringLength1to128 $UserName
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyBridgeBranchesReq
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return BridgeBranchCmd
     */
    public function getBridgeBranchCmd()
    {
      return $this->BridgeBranchCmd;
    }

    /**
     * @param BridgeBranchCmd $BridgeBranchCmd
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyBridgeBranchesReq
     */
    public function setBridgeBranchCmd($BridgeBranchCmd)
    {
      $this->BridgeBranchCmd = $BridgeBranchCmd;
      return $this;
    }

}
