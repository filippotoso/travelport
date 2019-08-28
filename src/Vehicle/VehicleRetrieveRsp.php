<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleRetrieveRsp extends BaseRsp
{

    /**
     * @var VehicleReservation $VehicleReservation
     */
    protected $VehicleReservation = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param VehicleReservation $VehicleReservation
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $VehicleReservation = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->VehicleReservation = $VehicleReservation;
    }

    /**
     * @return VehicleReservation
     */
    public function getVehicleReservation()
    {
      return $this->VehicleReservation;
    }

    /**
     * @param VehicleReservation $VehicleReservation
     * @return \FilippoToso\Travelport\Vehicle\VehicleRetrieveRsp
     */
    public function setVehicleReservation($VehicleReservation)
    {
      $this->VehicleReservation = $VehicleReservation;
      return $this;
    }

}
