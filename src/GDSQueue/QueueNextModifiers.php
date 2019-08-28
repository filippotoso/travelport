<?php

namespace FilippoToso\Travelport\GDSQueue;

class QueueNextModifiers
{

    /**
     * @var boolean $NextOnQueue
     */
    protected $NextOnQueue = null;

    /**
     * @var typeLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @var boolean $ReQueueCurrent
     */
    protected $ReQueueCurrent = null;

    /**
     * @var string $QueueSessionToken
     */
    protected $QueueSessionToken = null;

    /**
     * @param boolean $NextOnQueue
     * @param typeLocatorCode $ProviderLocatorCode
     * @param boolean $ReQueueCurrent
     * @param string $QueueSessionToken
     */
    public function __construct($NextOnQueue = null, $ProviderLocatorCode = null, $ReQueueCurrent = null, $QueueSessionToken = null)
    {
      $this->NextOnQueue = $NextOnQueue;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->ReQueueCurrent = $ReQueueCurrent;
      $this->QueueSessionToken = $QueueSessionToken;
    }

    /**
     * @return boolean
     */
    public function getNextOnQueue()
    {
      return $this->NextOnQueue;
    }

    /**
     * @param boolean $NextOnQueue
     * @return \FilippoToso\Travelport\GDSQueue\QueueNextModifiers
     */
    public function setNextOnQueue($NextOnQueue)
    {
      $this->NextOnQueue = $NextOnQueue;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\QueueNextModifiers
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReQueueCurrent()
    {
      return $this->ReQueueCurrent;
    }

    /**
     * @param boolean $ReQueueCurrent
     * @return \FilippoToso\Travelport\GDSQueue\QueueNextModifiers
     */
    public function setReQueueCurrent($ReQueueCurrent)
    {
      $this->ReQueueCurrent = $ReQueueCurrent;
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
     * @return \FilippoToso\Travelport\GDSQueue\QueueNextModifiers
     */
    public function setQueueSessionToken($QueueSessionToken)
    {
      $this->QueueSessionToken = $QueueSessionToken;
      return $this;
    }

}
