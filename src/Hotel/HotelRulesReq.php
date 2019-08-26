<?php

namespace FilippoToso\Travelport\Hotel;

class HotelRulesReq extends BaseReq
{

    /**
     * @var typeLocatorCode $HotelReservationLocatorCode
     */
    protected $HotelReservationLocatorCode = null;

    /**
     * @var HotelRulesLookup $HotelRulesLookup
     */
    protected $HotelRulesLookup = null;

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
     * @param typeLocatorCode $HotelReservationLocatorCode
     * @param HotelRulesLookup $HotelRulesLookup
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $HotelReservationLocatorCode, $HotelRulesLookup)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->HotelReservationLocatorCode = $HotelReservationLocatorCode;
      $this->HotelRulesLookup = $HotelRulesLookup;
    }

    /**
     * @return typeLocatorCode
     */
    public function getHotelReservationLocatorCode()
    {
      return $this->HotelReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $HotelReservationLocatorCode
     * @return \FilippoToso\Travelport\Hotel\HotelRulesReq
     */
    public function setHotelReservationLocatorCode($HotelReservationLocatorCode)
    {
      $this->HotelReservationLocatorCode = $HotelReservationLocatorCode;
      return $this;
    }

    /**
     * @return HotelRulesLookup
     */
    public function getHotelRulesLookup()
    {
      return $this->HotelRulesLookup;
    }

    /**
     * @param HotelRulesLookup $HotelRulesLookup
     * @return \FilippoToso\Travelport\Hotel\HotelRulesReq
     */
    public function setHotelRulesLookup($HotelRulesLookup)
    {
      $this->HotelRulesLookup = $HotelRulesLookup;
      return $this;
    }

}
