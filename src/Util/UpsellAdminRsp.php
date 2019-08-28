<?php

namespace FilippoToso\Travelport\Util;

class UpsellAdminRsp extends BaseRsp
{

    /**
     * @var AirUpsellRule $AirUpsellRule
     */
    protected $AirUpsellRule = null;

    /**
     * @var VehicleUpsellRule $VehicleUpsellRule
     */
    protected $VehicleUpsellRule = null;

    /**
     * @var HotelUpsellRule $HotelUpsellRule
     */
    protected $HotelUpsellRule = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param AirUpsellRule $AirUpsellRule
     * @param VehicleUpsellRule $VehicleUpsellRule
     * @param HotelUpsellRule $HotelUpsellRule
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirUpsellRule = null, $VehicleUpsellRule = null, $HotelUpsellRule = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->AirUpsellRule = $AirUpsellRule;
      $this->VehicleUpsellRule = $VehicleUpsellRule;
      $this->HotelUpsellRule = $HotelUpsellRule;
    }

    /**
     * @return AirUpsellRule
     */
    public function getAirUpsellRule()
    {
      return $this->AirUpsellRule;
    }

    /**
     * @param AirUpsellRule $AirUpsellRule
     * @return \FilippoToso\Travelport\Util\UpsellAdminRsp
     */
    public function setAirUpsellRule($AirUpsellRule)
    {
      $this->AirUpsellRule = $AirUpsellRule;
      return $this;
    }

    /**
     * @return VehicleUpsellRule
     */
    public function getVehicleUpsellRule()
    {
      return $this->VehicleUpsellRule;
    }

    /**
     * @param VehicleUpsellRule $VehicleUpsellRule
     * @return \FilippoToso\Travelport\Util\UpsellAdminRsp
     */
    public function setVehicleUpsellRule($VehicleUpsellRule)
    {
      $this->VehicleUpsellRule = $VehicleUpsellRule;
      return $this;
    }

    /**
     * @return HotelUpsellRule
     */
    public function getHotelUpsellRule()
    {
      return $this->HotelUpsellRule;
    }

    /**
     * @param HotelUpsellRule $HotelUpsellRule
     * @return \FilippoToso\Travelport\Util\UpsellAdminRsp
     */
    public function setHotelUpsellRule($HotelUpsellRule)
    {
      $this->HotelUpsellRule = $HotelUpsellRule;
      return $this;
    }

}
