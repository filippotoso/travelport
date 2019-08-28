<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleRulesReq extends BaseSearchReq
{

    /**
     * @var typeLocatorCode $VehicleReservationLocatorCode
     */
    protected $VehicleReservationLocatorCode = null;

    /**
     * @var VehicleRulesLookup $VehicleRulesLookup
     */
    protected $VehicleRulesLookup = null;

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
     * @param typeLocatorCode $VehicleReservationLocatorCode
     * @param VehicleRulesLookup $VehicleRulesLookup
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null, $VehicleReservationLocatorCode = null, $VehicleRulesLookup = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference);
      $this->VehicleReservationLocatorCode = $VehicleReservationLocatorCode;
      $this->VehicleRulesLookup = $VehicleRulesLookup;
    }

    /**
     * @return typeLocatorCode
     */
    public function getVehicleReservationLocatorCode()
    {
      return $this->VehicleReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $VehicleReservationLocatorCode
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesReq
     */
    public function setVehicleReservationLocatorCode($VehicleReservationLocatorCode)
    {
      $this->VehicleReservationLocatorCode = $VehicleReservationLocatorCode;
      return $this;
    }

    /**
     * @return VehicleRulesLookup
     */
    public function getVehicleRulesLookup()
    {
      return $this->VehicleRulesLookup;
    }

    /**
     * @param VehicleRulesLookup $VehicleRulesLookup
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesReq
     */
    public function setVehicleRulesLookup($VehicleRulesLookup)
    {
      $this->VehicleRulesLookup = $VehicleRulesLookup;
      return $this;
    }

}
