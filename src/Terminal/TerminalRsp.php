<?php

namespace FilippoToso\Travelport\Terminal;

class TerminalRsp extends BaseRsp
{

    /**
     * @var typeTextBlock $TerminalCommandResponse
     */
    protected $TerminalCommandResponse = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param typeTextBlock $TerminalCommandResponse
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $TerminalCommandResponse = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->TerminalCommandResponse = $TerminalCommandResponse;
    }

    /**
     * @return typeTextBlock
     */
    public function getTerminalCommandResponse()
    {
      return $this->TerminalCommandResponse;
    }

    /**
     * @param typeTextBlock $TerminalCommandResponse
     * @return \FilippoToso\Travelport\Terminal\TerminalRsp
     */
    public function setTerminalCommandResponse($TerminalCommandResponse)
    {
      $this->TerminalCommandResponse = $TerminalCommandResponse;
      return $this;
    }

}
