<?php

namespace FilippoToso\Travelport\Util;

class UpsellAdminReq extends BaseReq
{

    /**
     * @var AirUpsellCriteria $AirUpsellCriteria
     */
    protected $AirUpsellCriteria = null;

    /**
     * @var VehicleUpsellCriteria $VehicleUpsellCriteria
     */
    protected $VehicleUpsellCriteria = null;

    /**
     * @var HotelUpsellCriteria $HotelUpsellCriteria
     */
    protected $HotelUpsellCriteria = null;

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param AirUpsellCriteria $AirUpsellCriteria
     * @param VehicleUpsellCriteria $VehicleUpsellCriteria
     * @param HotelUpsellCriteria $HotelUpsellCriteria
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirUpsellCriteria = null, $VehicleUpsellCriteria = null, $HotelUpsellCriteria = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirUpsellCriteria = $AirUpsellCriteria;
      $this->VehicleUpsellCriteria = $VehicleUpsellCriteria;
      $this->HotelUpsellCriteria = $HotelUpsellCriteria;
    }

    /**
     * @return AirUpsellCriteria
     */
    public function getAirUpsellCriteria()
    {
      return $this->AirUpsellCriteria;
    }

    /**
     * @param AirUpsellCriteria $AirUpsellCriteria
     * @return \FilippoToso\Travelport\Util\UpsellAdminReq
     */
    public function setAirUpsellCriteria($AirUpsellCriteria)
    {
      $this->AirUpsellCriteria = $AirUpsellCriteria;
      return $this;
    }

    /**
     * @return VehicleUpsellCriteria
     */
    public function getVehicleUpsellCriteria()
    {
      return $this->VehicleUpsellCriteria;
    }

    /**
     * @param VehicleUpsellCriteria $VehicleUpsellCriteria
     * @return \FilippoToso\Travelport\Util\UpsellAdminReq
     */
    public function setVehicleUpsellCriteria($VehicleUpsellCriteria)
    {
      $this->VehicleUpsellCriteria = $VehicleUpsellCriteria;
      return $this;
    }

    /**
     * @return HotelUpsellCriteria
     */
    public function getHotelUpsellCriteria()
    {
      return $this->HotelUpsellCriteria;
    }

    /**
     * @param HotelUpsellCriteria $HotelUpsellCriteria
     * @return \FilippoToso\Travelport\Util\UpsellAdminReq
     */
    public function setHotelUpsellCriteria($HotelUpsellCriteria)
    {
      $this->HotelUpsellCriteria = $HotelUpsellCriteria;
      return $this;
    }

}
