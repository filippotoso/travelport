<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileRetrieveActionRsp extends BaseRsp
{

    /**
     * @var Action $Action
     */
    protected $Action = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param Action $Action
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $Action = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Action = $Action;
    }

    /**
     * @return Action
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param Action $Action
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveActionRsp
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

}
