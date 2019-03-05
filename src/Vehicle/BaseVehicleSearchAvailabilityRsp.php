<?php

namespace FilippoToso\Travelport\Vehicle;

class BaseVehicleSearchAvailabilityRsp extends BaseSearchRsp
{

    /**
     * @var VehicleDateLocation $VehicleDateLocation
     */
    protected $VehicleDateLocation = null;

    /**
     * @var Vehicle $Vehicle
     */
    protected $Vehicle = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     * @param VehicleDateLocation $VehicleDateLocation
     * @param Vehicle $Vehicle
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $VehicleDateLocation = null, $Vehicle = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference);
      $this->VehicleDateLocation = $VehicleDateLocation;
      $this->Vehicle = $Vehicle;
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
     * @return \FilippoToso\Travelport\Vehicle\BaseVehicleSearchAvailabilityRsp
     */
    public function setVehicleDateLocation($VehicleDateLocation)
    {
      $this->VehicleDateLocation = $VehicleDateLocation;
      return $this;
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
      return $this->Vehicle;
    }

    /**
     * @param Vehicle $Vehicle
     * @return \FilippoToso\Travelport\Vehicle\BaseVehicleSearchAvailabilityRsp
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
      return $this;
    }

}
