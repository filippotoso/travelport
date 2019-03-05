<?php

namespace FilippoToso\Travelport\GDSQueue;

class QueuePseudoCitySelector
{

    /**
     * @var QueueSelector $QueueSelector
     */
    protected $QueueSelector = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @param QueueSelector $QueueSelector
     * @param typePCC $PseudoCityCode
     */
    public function __construct($QueueSelector = null, $PseudoCityCode = null)
    {
      $this->QueueSelector = $QueueSelector;
      $this->PseudoCityCode = $PseudoCityCode;
    }

    /**
     * @return QueueSelector
     */
    public function getQueueSelector()
    {
      return $this->QueueSelector;
    }

    /**
     * @param QueueSelector $QueueSelector
     * @return \FilippoToso\Travelport\GDSQueue\QueuePseudoCitySelector
     */
    public function setQueueSelector($QueueSelector)
    {
      $this->QueueSelector = $QueueSelector;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\GDSQueue\QueuePseudoCitySelector
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

}
