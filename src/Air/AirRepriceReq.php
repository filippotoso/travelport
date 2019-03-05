<?php

namespace FilippoToso\Travelport\Air;

class AirRepriceReq extends AirBaseReq
{

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    protected $AirReservationLocatorCode = null;

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var typeFareRuleType $FareRuleType
     */
    protected $FareRuleType = null;

    /**
     * @var boolean $IgnoreAvailability
     */
    protected $IgnoreAvailability = null;

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
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param AirPricingSolution $AirPricingSolution
     * @param typeFareRuleType $FareRuleType
     * @param boolean $IgnoreAvailability
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirReservationLocatorCode = null, $AirPricingSolution = null, $FareRuleType = null, $IgnoreAvailability = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->AirPricingSolution = $AirPricingSolution;
      $this->FareRuleType = $FareRuleType;
      $this->IgnoreAvailability = $IgnoreAvailability;
    }

    /**
     * @return AirReservationLocatorCode
     */
    public function getAirReservationLocatorCode()
    {
      return $this->AirReservationLocatorCode;
    }

    /**
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @return \FilippoToso\Travelport\Air\AirRepriceReq
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \FilippoToso\Travelport\Air\AirRepriceReq
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return typeFareRuleType
     */
    public function getFareRuleType()
    {
      return $this->FareRuleType;
    }

    /**
     * @param typeFareRuleType $FareRuleType
     * @return \FilippoToso\Travelport\Air\AirRepriceReq
     */
    public function setFareRuleType($FareRuleType)
    {
      $this->FareRuleType = $FareRuleType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreAvailability()
    {
      return $this->IgnoreAvailability;
    }

    /**
     * @param boolean $IgnoreAvailability
     * @return \FilippoToso\Travelport\Air\AirRepriceReq
     */
    public function setIgnoreAvailability($IgnoreAvailability)
    {
      $this->IgnoreAvailability = $IgnoreAvailability;
      return $this;
    }

}
