<?php

namespace FilippoToso\Travelport\GDSQueue;

class Amount
{

    /**
     * @var anonymous1266 $Type
     */
    protected $Type = null;

    /**
     * @var typeMoney $AmountDuePaid
     */
    protected $AmountDuePaid = null;

    /**
     * @param anonymous1266 $Type
     * @param typeMoney $AmountDuePaid
     */
    public function __construct($Type, $AmountDuePaid)
    {
      $this->Type = $Type;
      $this->AmountDuePaid = $AmountDuePaid;
    }

    /**
     * @return anonymous1266
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1266 $Type
     * @return \FilippoToso\Travelport\GDSQueue\Amount
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmountDuePaid()
    {
      return $this->AmountDuePaid;
    }

    /**
     * @param typeMoney $AmountDuePaid
     * @return \FilippoToso\Travelport\GDSQueue\Amount
     */
    public function setAmountDuePaid($AmountDuePaid)
    {
      $this->AmountDuePaid = $AmountDuePaid;
      return $this;
    }

}
