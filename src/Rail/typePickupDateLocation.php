<?php

namespace FilippoToso\Travelport\Rail;

class typePickupDateLocation
{

    /**
     * @var date $Date
     */
    protected $Date = null;

    /**
     * @var typeIATACode $Location
     */
    protected $Location = null;

    /**
     * @var typeVehicleLocation $LocationType
     */
    protected $LocationType = null;

    /**
     * @var string $PickupLocationNumber
     */
    protected $PickupLocationNumber = null;

    /**
     * @param date $Date
     * @param typeIATACode $Location
     * @param typeVehicleLocation $LocationType
     * @param string $PickupLocationNumber
     */
    public function __construct($Date, $Location, $LocationType, $PickupLocationNumber)
    {
      $this->Date = $Date;
      $this->Location = $Location;
      $this->LocationType = $LocationType;
      $this->PickupLocationNumber = $PickupLocationNumber;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param date $Date
     * @return \FilippoToso\Travelport\Rail\typePickupDateLocation
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param typeIATACode $Location
     * @return \FilippoToso\Travelport\Rail\typePickupDateLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return typeVehicleLocation
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param typeVehicleLocation $LocationType
     * @return \FilippoToso\Travelport\Rail\typePickupDateLocation
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocationNumber()
    {
      return $this->PickupLocationNumber;
    }

    /**
     * @param string $PickupLocationNumber
     * @return \FilippoToso\Travelport\Rail\typePickupDateLocation
     */
    public function setPickupLocationNumber($PickupLocationNumber)
    {
      $this->PickupLocationNumber = $PickupLocationNumber;
      return $this;
    }

}
