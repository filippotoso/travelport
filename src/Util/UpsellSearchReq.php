<?php

namespace FilippoToso\Travelport\Util;

class UpsellSearchReq extends BaseReq
{

    /**
     * @var AirUpsellSearchCriteria $AirUpsellSearchCriteria
     */
    protected $AirUpsellSearchCriteria = null;

    /**
     * @var HotelUpsellSearchCriteria $HotelUpsellSearchCriteria
     */
    protected $HotelUpsellSearchCriteria = null;

    /**
     * @var VehicleUpsellSearchCriteria $VehicleUpsellSearchCriteria
     */
    protected $VehicleUpsellSearchCriteria = null;

    /**
     * @var UpsellSearchModifier $UpsellSearchModifier
     */
    protected $UpsellSearchModifier = null;

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
     * @param AirUpsellSearchCriteria $AirUpsellSearchCriteria
     * @param HotelUpsellSearchCriteria $HotelUpsellSearchCriteria
     * @param VehicleUpsellSearchCriteria $VehicleUpsellSearchCriteria
     * @param UpsellSearchModifier $UpsellSearchModifier
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirUpsellSearchCriteria = null, $HotelUpsellSearchCriteria = null, $VehicleUpsellSearchCriteria = null, $UpsellSearchModifier = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirUpsellSearchCriteria = $AirUpsellSearchCriteria;
      $this->HotelUpsellSearchCriteria = $HotelUpsellSearchCriteria;
      $this->VehicleUpsellSearchCriteria = $VehicleUpsellSearchCriteria;
      $this->UpsellSearchModifier = $UpsellSearchModifier;
    }

    /**
     * @return AirUpsellSearchCriteria
     */
    public function getAirUpsellSearchCriteria()
    {
      return $this->AirUpsellSearchCriteria;
    }

    /**
     * @param AirUpsellSearchCriteria $AirUpsellSearchCriteria
     * @return \FilippoToso\Travelport\Util\UpsellSearchReq
     */
    public function setAirUpsellSearchCriteria($AirUpsellSearchCriteria)
    {
      $this->AirUpsellSearchCriteria = $AirUpsellSearchCriteria;
      return $this;
    }

    /**
     * @return HotelUpsellSearchCriteria
     */
    public function getHotelUpsellSearchCriteria()
    {
      return $this->HotelUpsellSearchCriteria;
    }

    /**
     * @param HotelUpsellSearchCriteria $HotelUpsellSearchCriteria
     * @return \FilippoToso\Travelport\Util\UpsellSearchReq
     */
    public function setHotelUpsellSearchCriteria($HotelUpsellSearchCriteria)
    {
      $this->HotelUpsellSearchCriteria = $HotelUpsellSearchCriteria;
      return $this;
    }

    /**
     * @return VehicleUpsellSearchCriteria
     */
    public function getVehicleUpsellSearchCriteria()
    {
      return $this->VehicleUpsellSearchCriteria;
    }

    /**
     * @param VehicleUpsellSearchCriteria $VehicleUpsellSearchCriteria
     * @return \FilippoToso\Travelport\Util\UpsellSearchReq
     */
    public function setVehicleUpsellSearchCriteria($VehicleUpsellSearchCriteria)
    {
      $this->VehicleUpsellSearchCriteria = $VehicleUpsellSearchCriteria;
      return $this;
    }

    /**
     * @return UpsellSearchModifier
     */
    public function getUpsellSearchModifier()
    {
      return $this->UpsellSearchModifier;
    }

    /**
     * @param UpsellSearchModifier $UpsellSearchModifier
     * @return \FilippoToso\Travelport\Util\UpsellSearchReq
     */
    public function setUpsellSearchModifier($UpsellSearchModifier)
    {
      $this->UpsellSearchModifier = $UpsellSearchModifier;
      return $this;
    }

}
