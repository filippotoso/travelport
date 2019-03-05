<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyBridgeBranchesRsp extends BaseRsp
{

    /**
     * @var BridgeBranch $BridgeBranch
     */
    protected $BridgeBranch = null;

    /**
     * @var typeProfileID $AgentID
     */
    protected $AgentID = null;

    /**
     * @var StringLength1to128 $UserName
     */
    protected $UserName = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param BridgeBranch $BridgeBranch
     * @param typeProfileID $AgentID
     * @param StringLength1to128 $UserName
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $BridgeBranch = null, $AgentID = null, $UserName = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->BridgeBranch = $BridgeBranch;
      $this->AgentID = $AgentID;
      $this->UserName = $UserName;
    }

    /**
     * @return BridgeBranch
     */
    public function getBridgeBranch()
    {
      return $this->BridgeBranch;
    }

    /**
     * @param BridgeBranch $BridgeBranch
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyBridgeBranchesRsp
     */
    public function setBridgeBranch($BridgeBranch)
    {
      $this->BridgeBranch = $BridgeBranch;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyBridgeBranchesRsp
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyBridgeBranchesRsp
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

}
