<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleSearchAvailabilityReq extends BaseVehicleSearchAvailabilityReq
{

    /**
     * @var boolean $ReturnMediaLinks
     */
    protected $ReturnMediaLinks = null;

    /**
     * @var boolean $ReturnAllRates
     */
    protected $ReturnAllRates = null;

    /**
     * @var boolean $ReturnApproximateTotal
     */
    protected $ReturnApproximateTotal = null;

    /**
     * @var boolean $ReturnExtraRateInfo
     */
    protected $ReturnExtraRateInfo = null;

    /**
     * @var typePolicyReference $PolicyReference
     */
    protected $PolicyReference = null;

    /**
     * @var boolean $ReturnInclusionDetails
     */
    protected $ReturnInclusionDetails = null;

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
     * @param boolean $ReturnMediaLinks
     * @param boolean $ReturnAllRates
     * @param boolean $ReturnApproximateTotal
     * @param boolean $ReturnExtraRateInfo
     * @param typePolicyReference $PolicyReference
     * @param boolean $ReturnInclusionDetails
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null, $VehicleDateLocation = null, $VehicleSearchModifiers = null, $PointOfSale = null, $ReturnMediaLinks = null, $ReturnAllRates = null, $ReturnApproximateTotal = null, $ReturnExtraRateInfo = null, $PolicyReference = null, $ReturnInclusionDetails = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference, $VehicleDateLocation, $VehicleSearchModifiers, $PointOfSale);
      $this->ReturnMediaLinks = $ReturnMediaLinks;
      $this->ReturnAllRates = $ReturnAllRates;
      $this->ReturnApproximateTotal = $ReturnApproximateTotal;
      $this->ReturnExtraRateInfo = $ReturnExtraRateInfo;
      $this->PolicyReference = $PolicyReference;
      $this->ReturnInclusionDetails = $ReturnInclusionDetails;
    }

    /**
     * @return boolean
     */
    public function getReturnMediaLinks()
    {
      return $this->ReturnMediaLinks;
    }

    /**
     * @param boolean $ReturnMediaLinks
     * @return \FilippoToso\Travelport\Vehicle\VehicleSearchAvailabilityReq
     */
    public function setReturnMediaLinks($ReturnMediaLinks)
    {
      $this->ReturnMediaLinks = $ReturnMediaLinks;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnAllRates()
    {
      return $this->ReturnAllRates;
    }

    /**
     * @param boolean $ReturnAllRates
     * @return \FilippoToso\Travelport\Vehicle\VehicleSearchAvailabilityReq
     */
    public function setReturnAllRates($ReturnAllRates)
    {
      $this->ReturnAllRates = $ReturnAllRates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnApproximateTotal()
    {
      return $this->ReturnApproximateTotal;
    }

    /**
     * @param boolean $ReturnApproximateTotal
     * @return \FilippoToso\Travelport\Vehicle\VehicleSearchAvailabilityReq
     */
    public function setReturnApproximateTotal($ReturnApproximateTotal)
    {
      $this->ReturnApproximateTotal = $ReturnApproximateTotal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnExtraRateInfo()
    {
      return $this->ReturnExtraRateInfo;
    }

    /**
     * @param boolean $ReturnExtraRateInfo
     * @return \FilippoToso\Travelport\Vehicle\VehicleSearchAvailabilityReq
     */
    public function setReturnExtraRateInfo($ReturnExtraRateInfo)
    {
      $this->ReturnExtraRateInfo = $ReturnExtraRateInfo;
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
     * @return \FilippoToso\Travelport\Vehicle\VehicleSearchAvailabilityReq
     */
    public function setPolicyReference($PolicyReference)
    {
      $this->PolicyReference = $PolicyReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnInclusionDetails()
    {
      return $this->ReturnInclusionDetails;
    }

    /**
     * @param boolean $ReturnInclusionDetails
     * @return \FilippoToso\Travelport\Vehicle\VehicleSearchAvailabilityReq
     */
    public function setReturnInclusionDetails($ReturnInclusionDetails)
    {
      $this->ReturnInclusionDetails = $ReturnInclusionDetails;
      return $this;
    }

}
