<?php

namespace FilippoToso\Travelport\Air;

class AirUpsellSearchReq extends AirBaseReq
{

    /**
     * @var AirItinerary $AirItinerary
     */
    protected $AirItinerary = null;

    /**
     * @var AirPriceResult $AirPriceResult
     */
    protected $AirPriceResult = null;

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
     * @param AirItinerary $AirItinerary
     * @param AirPriceResult $AirPriceResult
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirItinerary = null, $AirPriceResult = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirItinerary = $AirItinerary;
      $this->AirPriceResult = $AirPriceResult;
    }

    /**
     * @return AirItinerary
     */
    public function getAirItinerary()
    {
      return $this->AirItinerary;
    }

    /**
     * @param AirItinerary $AirItinerary
     * @return \FilippoToso\Travelport\Air\AirUpsellSearchReq
     */
    public function setAirItinerary($AirItinerary)
    {
      $this->AirItinerary = $AirItinerary;
      return $this;
    }

    /**
     * @return AirPriceResult
     */
    public function getAirPriceResult()
    {
      return $this->AirPriceResult;
    }

    /**
     * @param AirPriceResult $AirPriceResult
     * @return \FilippoToso\Travelport\Air\AirUpsellSearchReq
     */
    public function setAirPriceResult($AirPriceResult)
    {
      $this->AirPriceResult = $AirPriceResult;
      return $this;
    }

}
