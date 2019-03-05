<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleLocationReq extends BaseReq
{

    /**
     * @var Vendor $Vendor
     */
    protected $Vendor = null;

    /**
     * @var typePickupDateLocation $PickupDateLocation
     */
    protected $PickupDateLocation = null;

    /**
     * @var typeReferencePoint $ReferencePoint
     */
    protected $ReferencePoint = null;

    /**
     * @var typeVehicleSearchDistance $SearchDistance
     */
    protected $SearchDistance = null;

    /**
     * @var typePolicyReference $PolicyReference
     */
    protected $PolicyReference = null;

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
     * @param Vendor $Vendor
     * @param typePickupDateLocation $PickupDateLocation
     * @param typeReferencePoint $ReferencePoint
     * @param typePolicyReference $PolicyReference
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $Vendor = null, $PickupDateLocation = null, $ReferencePoint = null, $PolicyReference = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->Vendor = $Vendor;
      $this->PickupDateLocation = $PickupDateLocation;
      $this->ReferencePoint = $ReferencePoint;
      $this->PolicyReference = $PolicyReference;
    }

    /**
     * @return Vendor
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param Vendor $Vendor
     * @return \FilippoToso\Travelport\Vehicle\VehicleLocationReq
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
      return $this;
    }

    /**
     * @return typePickupDateLocation
     */
    public function getPickupDateLocation()
    {
      return $this->PickupDateLocation;
    }

    /**
     * @param typePickupDateLocation $PickupDateLocation
     * @return \FilippoToso\Travelport\Vehicle\VehicleLocationReq
     */
    public function setPickupDateLocation($PickupDateLocation)
    {
      $this->PickupDateLocation = $PickupDateLocation;
      return $this;
    }

    /**
     * @return typeReferencePoint
     */
    public function getReferencePoint()
    {
      return $this->ReferencePoint;
    }

    /**
     * @param typeReferencePoint $ReferencePoint
     * @return \FilippoToso\Travelport\Vehicle\VehicleLocationReq
     */
    public function setReferencePoint($ReferencePoint)
    {
      $this->ReferencePoint = $ReferencePoint;
      return $this;
    }

    /**
     * @return typeVehicleSearchDistance
     */
    public function getSearchDistance()
    {
      return $this->SearchDistance;
    }

    /**
     * @param typeVehicleSearchDistance $SearchDistance
     * @return \FilippoToso\Travelport\Vehicle\VehicleLocationReq
     */
    public function setSearchDistance($SearchDistance)
    {
      $this->SearchDistance = $SearchDistance;
      return $this;
    }

    /**
     * @return typePolicyReference
     */
    public function getPolicyReference()
    {
      return $this->PolicyReference;
    }

    /**
     * @param typePolicyReference $PolicyReference
     * @return \FilippoToso\Travelport\Vehicle\VehicleLocationReq
     */
    public function setPolicyReference($PolicyReference)
    {
      $this->PolicyReference = $PolicyReference;
      return $this;
    }

}
