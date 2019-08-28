<?php

namespace FilippoToso\Travelport\UniversalRecord;

class DepositAmount
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typeMoney $ApproximateAmount
     */
    protected $ApproximateAmount = null;

    /**
     * @param typeMoney $Amount
     * @param typeMoney $ApproximateAmount
     */
    public function __construct($Amount = null, $ApproximateAmount = null)
    {
      $this->Amount = $Amount;
      $this->ApproximateAmount = $ApproximateAmount;
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
     * @return \FilippoToso\Travelport\UniversalRecord\DepositAmount
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateAmount()
    {
      return $this->ApproximateAmount;
    }

    /**
     * @param typeMoney $ApproximateAmount
     * @return \FilippoToso\Travelport\UniversalRecord\DepositAmount
     */
    public function setApproximateAmount($ApproximateAmount)
    {
      $this->ApproximateAmount = $ApproximateAmount;
      return $this;
    }

}
