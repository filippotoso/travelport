<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VehicleLocation
{

    /**
     * @var VendorLocation $VendorLocation
     */
    protected $VendorLocation = null;

    /**
     * @var Distance $Distance
     */
    protected $Distance = null;

    /**
     * @var CoordinateLocation $CoordinateLocation
     */
    protected $CoordinateLocation = null;

    /**
     * @var LocationInformation $LocationInformation
     */
    protected $LocationInformation = null;

    /**
     * @param VendorLocation $VendorLocation
     * @param Distance $Distance
     * @param CoordinateLocation $CoordinateLocation
     * @param LocationInformation $LocationInformation
     */
    public function __construct($VendorLocation = null, $Distance = null, $CoordinateLocation = null, $LocationInformation = null)
    {
      $this->VendorLocation = $VendorLocation;
      $this->Distance = $Distance;
      $this->CoordinateLocation = $CoordinateLocation;
      $this->LocationInformation = $LocationInformation;
    }

    /**
     * @return VendorLocation
     */
    public function getVendorLocation()
    {
      return $this->VendorLocation;
    }

    /**
     * @param VendorLocation $VendorLocation
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleLocation
     */
    public function setVendorLocation($VendorLocation)
    {
      $this->VendorLocation = $VendorLocation;
      return $this;
    }

    /**
     * @return Distance
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param Distance $Distance
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleLocation
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return CoordinateLocation
     */
    public function getCoordinateLocation()
    {
      return $this->CoordinateLocation;
    }

    /**
     * @param CoordinateLocation $CoordinateLocation
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleLocation
     */
    public function setCoordinateLocation($CoordinateLocation)
    {
      $this->CoordinateLocation = $CoordinateLocation;
      return $this;
    }

    /**
     * @return LocationInformation
     */
    public function getLocationInformation()
    {
      return $this->LocationInformation;
    }

    /**
     * @param LocationInformation $LocationInformation
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleLocation
     */
    public function setLocationInformation($LocationInformation)
    {
      $this->LocationInformation = $LocationInformation;
      return $this;
    }

}
