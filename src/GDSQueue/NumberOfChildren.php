<?php

namespace FilippoToso\Travelport\GDSQueue;

class NumberOfChildren
{

    /**
     * @var int[] $Age
     */
    protected $Age = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @param int $Count
     * @param typeMoney $Amount
     */
    public function __construct($Count = null, $Amount = null)
    {
      $this->Count = $Count;
      $this->Amount = $Amount;
    }

    /**
     * @return int[]
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int[] $Age
     * @return \FilippoToso\Travelport\GDSQueue\NumberOfChildren
     */
    public function setAge(array $Age = null)
    {
      $this->Age = $Age;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \FilippoToso\Travelport\GDSQueue\NumberOfChildren
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
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
     * @return \FilippoToso\Travelport\GDSQueue\NumberOfChildren
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
