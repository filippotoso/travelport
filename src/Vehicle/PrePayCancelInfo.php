<?php

namespace FilippoToso\Travelport\Vehicle;

class PrePayCancelInfo
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var int $Percent
     */
    protected $Percent = null;

    /**
     * @var int $NumberOfDaysHours
     */
    protected $NumberOfDaysHours = null;

    /**
     * @var int $RentalDays
     */
    protected $RentalDays = null;

    /**
     * @param int $Code
     * @param typeMoney $Amount
     * @param int $Percent
     * @param int $NumberOfDaysHours
     * @param int $RentalDays
     */
    public function __construct($Code = null, $Amount = null, $Percent = null, $NumberOfDaysHours = null, $RentalDays = null)
    {
      $this->Code = $Code;
      $this->Amount = $Amount;
      $this->Percent = $Percent;
      $this->NumberOfDaysHours = $NumberOfDaysHours;
      $this->RentalDays = $RentalDays;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \FilippoToso\Travelport\Vehicle\PrePayCancelInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \FilippoToso\Travelport\Vehicle\PrePayCancelInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param int $Percent
     * @return \FilippoToso\Travelport\Vehicle\PrePayCancelInfo
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfDaysHours()
    {
      return $this->NumberOfDaysHours;
    }

    /**
     * @param int $NumberOfDaysHours
     * @return \FilippoToso\Travelport\Vehicle\PrePayCancelInfo
     */
    public function setNumberOfDaysHours($NumberOfDaysHours)
    {
      $this->NumberOfDaysHours = $NumberOfDaysHours;
      return $this;
    }

    /**
     * @return int
     */
    public function getRentalDays()
    {
      return $this->RentalDays;
    }

    /**
     * @param int $RentalDays
     * @return \FilippoToso\Travelport\Vehicle\PrePayCancelInfo
     */
    public function setRentalDays($RentalDays)
    {
      $this->RentalDays = $RentalDays;
      return $this;
    }

}
