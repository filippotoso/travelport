<?php

namespace FilippoToso\Travelport\UniversalRecord;

class IncludedInBase
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @param typeMoney $Amount
     */
    public function __construct($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \FilippoToso\Travelport\UniversalRecord\IncludedInBase
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
