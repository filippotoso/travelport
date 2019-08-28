<?php

namespace FilippoToso\Travelport\Rail;

class RailAvailabilitySearchReq extends BaseReq
{

    /**
     * @var SearchRailLeg $SearchRailLeg
     */
    protected $SearchRailLeg = null;

    /**
     * @var SearchPassenger $SearchPassenger
     */
    protected $SearchPassenger = null;

    /**
     * @var RailSearchModifiers $RailSearchModifiers
     */
    protected $RailSearchModifiers = null;

    /**
     * @var RailPricingModifiers $RailPricingModifiers
     */
    protected $RailPricingModifiers = null;

    /**
     * @var HostTokenList $HostTokenList
     */
    protected $HostTokenList = null;

    /**
     * @var typeResponseType $ResponseType
     */
    protected $ResponseType = null;

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
     * @param SearchRailLeg $SearchRailLeg
     * @param SearchPassenger $SearchPassenger
     * @param RailSearchModifiers $RailSearchModifiers
     * @param RailPricingModifiers $RailPricingModifiers
     * @param HostTokenList $HostTokenList
     * @param typeResponseType $ResponseType
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $SearchRailLeg = null, $SearchPassenger = null, $RailSearchModifiers = null, $RailPricingModifiers = null, $HostTokenList = null, $ResponseType = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->SearchRailLeg = $SearchRailLeg;
      $this->SearchPassenger = $SearchPassenger;
      $this->RailSearchModifiers = $RailSearchModifiers;
      $this->RailPricingModifiers = $RailPricingModifiers;
      $this->HostTokenList = $HostTokenList;
      $this->ResponseType = $ResponseType;
    }

    /**
     * @return SearchRailLeg
     */
    public function getSearchRailLeg()
    {
      return $this->SearchRailLeg;
    }

    /**
     * @param SearchRailLeg $SearchRailLeg
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchReq
     */
    public function setSearchRailLeg($SearchRailLeg)
    {
      $this->SearchRailLeg = $SearchRailLeg;
      return $this;
    }

    /**
     * @return SearchPassenger
     */
    public function getSearchPassenger()
    {
      return $this->SearchPassenger;
    }

    /**
     * @param SearchPassenger $SearchPassenger
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchReq
     */
    public function setSearchPassenger($SearchPassenger)
    {
      $this->SearchPassenger = $SearchPassenger;
      return $this;
    }

    /**
     * @return RailSearchModifiers
     */
    public function getRailSearchModifiers()
    {
      return $this->RailSearchModifiers;
    }

    /**
     * @param RailSearchModifiers $RailSearchModifiers
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchReq
     */
    public function setRailSearchModifiers($RailSearchModifiers)
    {
      $this->RailSearchModifiers = $RailSearchModifiers;
      return $this;
    }

    /**
     * @return RailPricingModifiers
     */
    public function getRailPricingModifiers()
    {
      return $this->RailPricingModifiers;
    }

    /**
     * @param RailPricingModifiers $RailPricingModifiers
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchReq
     */
    public function setRailPricingModifiers($RailPricingModifiers)
    {
      $this->RailPricingModifiers = $RailPricingModifiers;
      return $this;
    }

    /**
     * @return HostTokenList
     */
    public function getHostTokenList()
    {
      return $this->HostTokenList;
    }

    /**
     * @param HostTokenList $HostTokenList
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchReq
     */
    public function setHostTokenList($HostTokenList)
    {
      $this->HostTokenList = $HostTokenList;
      return $this;
    }

    /**
     * @return typeResponseType
     */
    public function getResponseType()
    {
      return $this->ResponseType;
    }

    /**
     * @param typeResponseType $ResponseType
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchReq
     */
    public function setResponseType($ResponseType)
    {
      $this->ResponseType = $ResponseType;
      return $this;
    }

}
