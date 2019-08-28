<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleMediaLinksRsp extends BaseRsp
{

    /**
     * @var VehicleWithMediaItems $VehicleWithMediaItems
     */
    protected $VehicleWithMediaItems = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param VehicleWithMediaItems $VehicleWithMediaItems
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $VehicleWithMediaItems = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->VehicleWithMediaItems = $VehicleWithMediaItems;
    }

    /**
     * @return VehicleWithMediaItems
     */
    public function getVehicleWithMediaItems()
    {
      return $this->VehicleWithMediaItems;
    }

    /**
     * @param VehicleWithMediaItems $VehicleWithMediaItems
     * @return \FilippoToso\Travelport\Vehicle\VehicleMediaLinksRsp
     */
    public function setVehicleWithMediaItems($VehicleWithMediaItems)
    {
      $this->VehicleWithMediaItems = $VehicleWithMediaItems;
      return $this;
    }

}
