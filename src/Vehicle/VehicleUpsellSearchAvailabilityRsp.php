<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleUpsellSearchAvailabilityRsp extends BaseVehicleSearchAvailabilityRsp
{

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
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference, $VehicleDateLocation, $Vehicle);
    }

}
