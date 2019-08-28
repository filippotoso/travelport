<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleType
{

    /**
     * @var typeVehicleTypes $_
     */
    protected $_ = null;

    /**
     * @param typeVehicleTypes $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typeVehicleTypes
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeVehicleTypes $_
     * @return \FilippoToso\Travelport\Vehicle\VehicleType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
