<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VehicleCancelReq extends BaseReq
{

    /**
     * @var VehicleDateLocation $VehicleDateLocation
     */
    protected $VehicleDateLocation = null;

    /**
     * @var Vehicle $Vehicle
     */
    protected $Vehicle = null;

    /**
     * @var FileFinishingInfo $FileFinishingInfo
     */
    protected $FileFinishingInfo = null;

    /**
     * @var string $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var string $SupplierLocatorCode
     */
    protected $SupplierLocatorCode = null;

    /**
     * @var typeURVersion $Version
     */
    protected $Version = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

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
     * @param VehicleDateLocation $VehicleDateLocation
     * @param Vehicle $Vehicle
     * @param FileFinishingInfo $FileFinishingInfo
     * @param string $SupplierCode
     * @param string $SupplierLocatorCode
     * @param typeURVersion $Version
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $VehicleDateLocation, $Vehicle, $FileFinishingInfo, $SupplierCode, $SupplierLocatorCode, $Version, $ProviderCode, $ProviderLocatorCode)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->VehicleDateLocation = $VehicleDateLocation;
      $this->Vehicle = $Vehicle;
      $this->FileFinishingInfo = $FileFinishingInfo;
      $this->SupplierCode = $SupplierCode;
      $this->SupplierLocatorCode = $SupplierLocatorCode;
      $this->Version = $Version;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCancelReq
     */
    public function setVehicleDateLocation($VehicleDateLocation)
    {
      $this->VehicleDateLocation = $VehicleDateLocation;
      return $this;
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
      return $this->Vehicle;
    }

    /**
     * @param Vehicle $Vehicle
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCancelReq
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
      return $this;
    }

    /**
     * @return FileFinishingInfo
     */
    public function getFileFinishingInfo()
    {
      return $this->FileFinishingInfo;
    }

    /**
     * @param FileFinishingInfo $FileFinishingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCancelReq
     */
    public function setFileFinishingInfo($FileFinishingInfo)
    {
      $this->FileFinishingInfo = $FileFinishingInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCancelReq
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierLocatorCode()
    {
      return $this->SupplierLocatorCode;
    }

    /**
     * @param string $SupplierLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCancelReq
     */
    public function setSupplierLocatorCode($SupplierLocatorCode)
    {
      $this->SupplierLocatorCode = $SupplierLocatorCode;
      return $this;
    }

    /**
     * @return typeURVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeURVersion $Version
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCancelReq
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCancelReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleCancelReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
