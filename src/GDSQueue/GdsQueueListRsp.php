<?php

namespace FilippoToso\Travelport\GDSQueue;

class GdsQueueListRsp extends BaseRsp
{

    /**
     * @var NextResultReference $NextResultReference
     */
    protected $NextResultReference = null;

    /**
     * @var QueueElement $QueueElement
     */
    protected $QueueElement = null;

    /**
     * @var boolean $MorePNRExists
     */
    protected $MorePNRExists = null;

    /**
     * @var string $QueueSessionToken
     */
    protected $QueueSessionToken = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     * @param QueueElement $QueueElement
     * @param boolean $MorePNRExists
     * @param string $QueueSessionToken
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $QueueElement = null, $MorePNRExists = null, $QueueSessionToken = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->NextResultReference = $NextResultReference;
      $this->QueueElement = $QueueElement;
      $this->MorePNRExists = $MorePNRExists;
      $this->QueueSessionToken = $QueueSessionToken;
    }

    /**
     * @return NextResultReference
     */
    public function getNextResultReference()
    {
      return $this->NextResultReference;
    }

    /**
     * @param NextResultReference $NextResultReference
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListRsp
     */
    public function setNextResultReference($NextResultReference)
    {
      $this->NextResultReference = $NextResultReference;
      return $this;
    }

    /**
     * @return QueueElement
     */
    public function getQueueElement()
    {
      return $this->QueueElement;
    }

    /**
     * @param QueueElement $QueueElement
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListRsp
     */
    public function setQueueElement($QueueElement)
    {
      $this->QueueElement = $QueueElement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMorePNRExists()
    {
      return $this->MorePNRExists;
    }

    /**
     * @param boolean $MorePNRExists
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListRsp
     */
    public function setMorePNRExists($MorePNRExists)
    {
      $this->MorePNRExists = $MorePNRExists;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueSessionToken()
    {
      return $this->QueueSessionToken;
    }

    /**
     * @param string $QueueSessionToken
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueListRsp
     */
    public function setQueueSessionToken($QueueSessionToken)
    {
      $this->QueueSessionToken = $QueueSessionToken;
      return $this;
    }

}
