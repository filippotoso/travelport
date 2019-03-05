<?php

namespace FilippoToso\Travelport\Vehicle;

class BaseVehicleSearchAvailabilityReq extends BaseSearchReq
{

    /**
     * @var VehicleDateLocation $VehicleDateLocation
     */
    protected $VehicleDateLocation = null;

    /**
     * @var VehicleSearchModifiers $VehicleSearchModifiers
     */
    protected $VehicleSearchModifiers = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

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
     * @param NextResultReference $NextResultReference
     * @param VehicleDateLocation $VehicleDateLocation
     * @param VehicleSearchModifiers $VehicleSearchModifiers
     * @param PointOfSale $PointOfSale
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null, $VehicleDateLocation = null, $VehicleSearchModifiers = null, $PointOfSale = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference);
      $this->VehicleDateLocation = $VehicleDateLocation;
      $this->VehicleSearchModifiers = $VehicleSearchModifiers;
      $this->PointOfSale = $PointOfSale;
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
     * @return \FilippoToso\Travelport\Vehicle\BaseVehicleSearchAvailabilityReq
     */
    public function setVehicleDateLocation($VehicleDateLocation)
    {
      $this->VehicleDateLocation = $VehicleDateLocation;
      return $this;
    }

    /**
     * @return VehicleSearchModifiers
     */
    public function getVehicleSearchModifiers()
    {
      return $this->VehicleSearchModifiers;
    }

    /**
     * @param VehicleSearchModifiers $VehicleSearchModifiers
     * @return \FilippoToso\Travelport\Vehicle\BaseVehicleSearchAvailabilityReq
     */
    public function setVehicleSearchModifiers($VehicleSearchModifiers)
    {
      $this->VehicleSearchModifiers = $VehicleSearchModifiers;
      return $this;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\Vehicle\BaseVehicleSearchAvailabilityReq
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

}
