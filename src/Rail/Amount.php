<?php

namespace FilippoToso\Travelport\Rail;

class Amount
{

    /**
     * @var anonymous1268 $Type
     */
    protected $Type = null;

    /**
     * @var typeMoney $AmountDuePaid
     */
    protected $AmountDuePaid = null;

    /**
     * @param anonymous1268 $Type
     * @param typeMoney $AmountDuePaid
     */
    public function __construct($Type = null, $AmountDuePaid = null)
    {
      $this->Type = $Type;
      $this->AmountDuePaid = $AmountDuePaid;
    }

    /**
     * @return anonymous1268
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1268 $Type
     * @return \FilippoToso\Travelport\Rail\Amount
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
     * @return \FilippoToso\Travelport\Rail\Amount
     */
    public function setAmountDuePaid($AmountDuePaid)
    {
      $this->AmountDuePaid = $AmountDuePaid;
      return $this;
    }

}
