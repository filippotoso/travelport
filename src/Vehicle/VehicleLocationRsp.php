<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleLocationRsp extends BaseRsp
{

    /**
     * @var VehicleLocation $VehicleLocation
     */
    protected $VehicleLocation = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param VehicleLocation $VehicleLocation
     */
    public function __construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $VehicleLocation)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->VehicleLocation = $VehicleLocation;
    }

    /**
     * @return VehicleLocation
     */
    public function getVehicleLocation()
    {
      return $this->VehicleLocation;
    }

    /**
     * @param VehicleLocation $VehicleLocation
     * @return \FilippoToso\Travelport\Vehicle\VehicleLocationRsp
     */
    public function setVehicleLocation($VehicleLocation)
    {
      $this->VehicleLocation = $VehicleLocation;
      return $this;
    }

}
