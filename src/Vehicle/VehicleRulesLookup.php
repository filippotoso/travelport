<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleRulesLookup
{

    /**
     * @var VehicleDateLocation $VehicleDateLocation
     */
    protected $VehicleDateLocation = null;

    /**
     * @var VehicleSearchModifiers $VehicleSearchModifiers
     */
    protected $VehicleSearchModifiers = null;

    /**
     * @param VehicleDateLocation $VehicleDateLocation
     * @param VehicleSearchModifiers $VehicleSearchModifiers
     */
    public function __construct($VehicleDateLocation = null, $VehicleSearchModifiers = null)
    {
      $this->VehicleDateLocation = $VehicleDateLocation;
      $this->VehicleSearchModifiers = $VehicleSearchModifiers;
    }

    /**
     * @return VehicleDateLocation
     */
    public function getVehicleDateLocation()
    {
      return $this->VehicleDateLocation;
    }

    /**
     * @param VehicleDateLocation $VehicleDateLocation
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesLookup
     */
    public function setVehicleDateLocation($VehicleDateLocation)
    {
      $this->VehicleDateLocation = $VehicleDateLocation;
      return $this;
    }

    /**
     * @return VehicleSearchModifiers
     */
    public function getVehicleSearchModifiers()
    {
      return $this->VehicleSearchModifiers;
    }

    /**
     * @param VehicleSearchModifiers $VehicleSearchModifiers
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesLookup
     */
    public function setVehicleSearchModifiers($VehicleSearchModifiers)
    {
      $this->VehicleSearchModifiers = $VehicleSearchModifiers;
      return $this;
    }

}
