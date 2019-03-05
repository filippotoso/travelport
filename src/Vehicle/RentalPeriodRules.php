<?php

namespace FilippoToso\Travelport\Vehicle;

class RentalPeriodRules
{

    /**
     * @var typeRentalPeriod $MaxRental
     */
    protected $MaxRental = null;

    /**
     * @var typeRentalPeriod $MinRental
     */
    protected $MinRental = null;

    /**
     * @var typeRentalPeriod $AbsoluteMax
     */
    protected $AbsoluteMax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeRentalPeriod
     */
    public function getMaxRental()
    {
      return $this->MaxRental;
    }

    /**
     * @param typeRentalPeriod $MaxRental
     * @return \FilippoToso\Travelport\Vehicle\RentalPeriodRules
     */
    public function setMaxRental($MaxRental)
    {
      $this->MaxRental = $MaxRental;
      return $this;
    }

    /**
     * @return typeRentalPeriod
     */
    public function getMinRental()
    {
      return $this->MinRental;
    }

    /**
     * @param typeRentalPeriod $MinRental
     * @return \FilippoToso\Travelport\Vehicle\RentalPeriodRules
     */
    public function setMinRental($MinRental)
    {
      $this->MinRental = $MinRental;
      return $this;
    }

    /**
     * @return typeRentalPeriod
     */
    public function getAbsoluteMax()
    {
      return $this->AbsoluteMax;
    }

    /**
     * @param typeRentalPeriod $AbsoluteMax
     * @return \FilippoToso\Travelport\Vehicle\RentalPeriodRules
     */
    public function setAbsoluteMax($AbsoluteMax)
    {
      $this->AbsoluteMax = $AbsoluteMax;
      return $this;
    }

}
