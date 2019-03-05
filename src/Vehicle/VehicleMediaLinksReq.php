<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleMediaLinksReq extends BaseReq
{

    /**
     * @var VehicleSearchId $VehicleSearchId
     */
    protected $VehicleSearchId = null;

    /**
     * @var VehiclePickupLocation $VehiclePickupLocation
     */
    protected $VehiclePickupLocation = null;

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
     * @param VehicleSearchId $VehicleSearchId
     * @param VehiclePickupLocation $VehiclePickupLocation
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $VehicleSearchId = null, $VehiclePickupLocation = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->VehicleSearchId = $VehicleSearchId;
      $this->VehiclePickupLocation = $VehiclePickupLocation;
    }

    /**
     * @return VehicleSearchId
     */
    public function getVehicleSearchId()
    {
      return $this->VehicleSearchId;
    }

    /**
     * @param VehicleSearchId $VehicleSearchId
     * @return \FilippoToso\Travelport\Vehicle\VehicleMediaLinksReq
     */
    public function setVehicleSearchId($VehicleSearchId)
    {
      $this->VehicleSearchId = $VehicleSearchId;
      return $this;
    }

    /**
     * @return VehiclePickupLocation
     */
    public function getVehiclePickupLocation()
    {
      return $this->VehiclePickupLocation;
    }

    /**
     * @param VehiclePickupLocation $VehiclePickupLocation
     * @return \FilippoToso\Travelport\Vehicle\VehicleMediaLinksReq
     */
    public function setVehiclePickupLocation($VehiclePickupLocation)
    {
      $this->VehiclePickupLocation = $VehiclePickupLocation;
      return $this;
    }

}
