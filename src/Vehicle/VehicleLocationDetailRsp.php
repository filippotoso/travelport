<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleLocationDetailRsp extends BaseRsp
{

    /**
     * @var VendorInfo $VendorInfo
     */
    protected $VendorInfo = null;

    /**
     * @var LocationInfo $LocationInfo
     */
    protected $LocationInfo = null;

    /**
     * @var VehiclePolicy $VehiclePolicy
     */
    protected $VehiclePolicy = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param VendorInfo $VendorInfo
     * @param LocationInfo $LocationInfo
     * @param VehiclePolicy $VehiclePolicy
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $VendorInfo = null, $LocationInfo = null, $VehiclePolicy = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->VendorInfo = $VendorInfo;
      $this->LocationInfo = $LocationInfo;
      $this->VehiclePolicy = $VehiclePolicy;
    }

    /**
     * @return VendorInfo
     */
    public function getVendorInfo()
    {
      return $this->VendorInfo;
    }

    /**
     * @param VendorInfo $VendorInfo
     * @return \FilippoToso\Travelport\Vehicle\VehicleLocationDetailRsp
     */
    public function setVendorInfo($VendorInfo)
    {
      $this->VendorInfo = $VendorInfo;
      return $this;
    }

    /**
     * @return LocationInfo
     */
    public function getLocationInfo()
    {
      return $this->LocationInfo;
    }

    /**
     * @param LocationInfo $LocationInfo
     * @return \FilippoToso\Travelport\Vehicle\VehicleLocationDetailRsp
     */
    public function setLocationInfo($LocationInfo)
    {
      $this->LocationInfo = $LocationInfo;
      return $this;
    }

    /**
     * @return VehiclePolicy
     */
    public function getVehiclePolicy()
    {
      return $this->VehiclePolicy;
    }

    /**
     * @param VehiclePolicy $VehiclePolicy
     * @return \FilippoToso\Travelport\Vehicle\VehicleLocationDetailRsp
     */
    public function setVehiclePolicy($VehiclePolicy)
    {
      $this->VehiclePolicy = $VehiclePolicy;
      return $this;
    }

}
