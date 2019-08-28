<?php

namespace FilippoToso\Travelport\Air;

class Penalty
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var string $PenaltyType
     */
    protected $PenaltyType = null;

    /**
     * @param typeMoney $Amount
     * @param string $PenaltyType
     */
    public function __construct($Amount = null, $PenaltyType = null)
    {
      $this->Amount = $Amount;
      $this->PenaltyType = $PenaltyType;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Air\Penalty
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPenaltyType()
    {
      return $this->PenaltyType;
    }

    /**
     * @param string $PenaltyType
     * @return \FilippoToso\Travelport\Air\Penalty
     */
    public function setPenaltyType($PenaltyType)
    {
      $this->PenaltyType = $PenaltyType;
      return $this;
    }

}
