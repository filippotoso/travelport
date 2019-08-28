<?php

namespace FilippoToso\Travelport\UProfile;

class typeCommissionReferenceHistory extends typeKeyElement
{

    /**
     * @var StringLength1to128 $AgentName
     */
    protected $AgentName = null;

    /**
     * @var StringLength1to128 $AgentNumber
     */
    protected $AgentNumber = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @param typeRef $Key
     * @param StringLength1to128 $AgentName
     * @param StringLength1to128 $AgentNumber
     * @param typePriorityOrder $PriorityOrder
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $AgentName = null, $AgentNumber = null, $PriorityOrder = null, $OwnerID = null)
    {
      parent::__construct($Key);
      $this->AgentName = $AgentName;
      $this->AgentNumber = $AgentNumber;
      $this->PriorityOrder = $PriorityOrder;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return StringLength1to128
     */
    public function getAgentName()
    {
      return $this->AgentName;
    }

    /**
     * @param StringLength1to128 $AgentName
     * @return \FilippoToso\Travelport\UProfile\typeCommissionReferenceHistory
     */
    public function setAgentName($AgentName)
    {
      $this->AgentName = $AgentName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getAgentNumber()
    {
      return $this->AgentNumber;
    }

    /**
     * @param StringLength1to128 $AgentNumber
     * @return \FilippoToso\Travelport\UProfile\typeCommissionReferenceHistory
     */
    public function setAgentNumber($AgentNumber)
    {
      $this->AgentNumber = $AgentNumber;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\typeCommissionReferenceHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getOwnerID()
    {
      return $this->OwnerID;
    }

    /**
     * @param typeProfileID $OwnerID
     * @return \FilippoToso\Travelport\UProfile\typeCommissionReferenceHistory
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
