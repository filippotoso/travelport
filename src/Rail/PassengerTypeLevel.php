<?php

namespace FilippoToso\Travelport\Rail;

class PassengerTypeLevel
{

    /**
     * @var typePTC $TravelerType
     */
    protected $TravelerType = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percentage
     */
    protected $Percentage = null;

    /**
     * @var typeMoney $CommissionCap
     */
    protected $CommissionCap = null;

    /**
     * @param typePTC $TravelerType
     * @param typeMoney $Amount
     * @param typePercentageWithDecimal $Percentage
     * @param typeMoney $CommissionCap
     */
    public function __construct($TravelerType = null, $Amount = null, $Percentage = null, $CommissionCap = null)
    {
      $this->TravelerType = $TravelerType;
      $this->Amount = $Amount;
      $this->Percentage = $Percentage;
      $this->CommissionCap = $CommissionCap;
    }

    /**
     * @return typePTC
     */
    public function getTravelerType()
    {
      return $this->TravelerType;
    }

    /**
     * @param typePTC $TravelerType
     * @return \FilippoToso\Travelport\Rail\PassengerTypeLevel
     */
    public function setTravelerType($TravelerType)
    {
      $this->TravelerType = $TravelerType;
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
     * @return \FilippoToso\Travelport\Rail\PassengerTypeLevel
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param typePercentageWithDecimal $Percentage
     * @return \FilippoToso\Travelport\Rail\PassengerTypeLevel
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCommissionCap()
    {
      return $this->CommissionCap;
    }

    /**
     * @param typeMoney $CommissionCap
     * @return \FilippoToso\Travelport\Rail\PassengerTypeLevel
     */
    public function setCommissionCap($CommissionCap)
    {
      $this->CommissionCap = $CommissionCap;
      return $this;
    }

}
