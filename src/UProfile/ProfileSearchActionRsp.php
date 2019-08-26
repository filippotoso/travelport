<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSearchActionRsp extends BaseRsp
{

    /**
     * @var ActionSummary $ActionSummary
     */
    protected $ActionSummary = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ActionSummary $ActionSummary
     */
    public function __construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $ActionSummary)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ActionSummary = $ActionSummary;
    }

    /**
     * @return ActionSummary
     */
    public function getActionSummary()
    {
      return $this->ActionSummary;
    }

    /**
     * @param ActionSummary $ActionSummary
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchActionRsp
     */
    public function setActionSummary($ActionSummary)
    {
      $this->ActionSummary = $ActionSummary;
      return $this;
    }

}
