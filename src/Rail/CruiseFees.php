<?php

namespace FilippoToso\Travelport\Rail;

class CruiseFees
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var StringLength1to13 $Description
     */
    protected $Description = null;

    /**
     * @param typeMoney $Amount
     * @param StringLength1to13 $Description
     */
    public function __construct($Amount, $Description)
    {
      $this->Amount = $Amount;
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\Rail\CruiseFees
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return StringLength1to13
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to13 $Description
     * @return \FilippoToso\Travelport\Rail\CruiseFees
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
