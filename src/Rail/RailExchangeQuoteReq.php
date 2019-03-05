<?php

namespace FilippoToso\Travelport\Rail;

class RailExchangeQuoteReq extends BaseReq
{

    /**
     * @var SearchRailLeg $SearchRailLeg
     */
    protected $SearchRailLeg = null;

    /**
     * @var RailSearchModifiers $RailSearchModifiers
     */
    protected $RailSearchModifiers = null;

    /**
     * @var SearchPassenger $SearchPassenger
     */
    protected $SearchPassenger = null;

    /**
     * @var HostTokenList $HostTokenList
     */
    protected $HostTokenList = null;

    /**
     * @var RailPricingSolution $RailPricingSolution
     */
    protected $RailPricingSolution = null;

    /**
     * @var RailFareNoteList $RailFareNoteList
     */
    protected $RailFareNoteList = null;

    /**
     * @var typeLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

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
     * @param RailSearchModifiers $RailSearchModifiers
     * @param SearchPassenger $SearchPassenger
     * @param HostTokenList $HostTokenList
     * @param RailPricingSolution $RailPricingSolution
     * @param RailFareNoteList $RailFareNoteList
     * @param typeLocatorCode $LocatorCode
     * @param typeResponseType $ResponseType
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $SearchRailLeg = null, $RailSearchModifiers = null, $SearchPassenger = null, $HostTokenList = null, $RailPricingSolution = null, $RailFareNoteList = null, $LocatorCode = null, $ResponseType = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->SearchRailLeg = $SearchRailLeg;
      $this->RailSearchModifiers = $RailSearchModifiers;
      $this->SearchPassenger = $SearchPassenger;
      $this->HostTokenList = $HostTokenList;
      $this->RailPricingSolution = $RailPricingSolution;
      $this->RailFareNoteList = $RailFareNoteList;
      $this->LocatorCode = $LocatorCode;
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeQuoteReq
     */
    public function setSearchRailLeg($SearchRailLeg)
    {
      $this->SearchRailLeg = $SearchRailLeg;
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeQuoteReq
     */
    public function setRailSearchModifiers($RailSearchModifiers)
    {
      $this->RailSearchModifiers = $RailSearchModifiers;
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeQuoteReq
     */
    public function setSearchPassenger($SearchPassenger)
    {
      $this->SearchPassenger = $SearchPassenger;
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeQuoteReq
     */
    public function setHostTokenList($HostTokenList)
    {
      $this->HostTokenList = $HostTokenList;
      return $this;
    }

    /**
     * @return RailPricingSolution
     */
    public function getRailPricingSolution()
    {
      return $this->RailPricingSolution;
    }

    /**
     * @param RailPricingSolution $RailPricingSolution
     * @return \FilippoToso\Travelport\Rail\RailExchangeQuoteReq
     */
    public function setRailPricingSolution($RailPricingSolution)
    {
      $this->RailPricingSolution = $RailPricingSolution;
      return $this;
    }

    /**
     * @return RailFareNoteList
     */
    public function getRailFareNoteList()
    {
      return $this->RailFareNoteList;
    }

    /**
     * @param RailFareNoteList $RailFareNoteList
     * @return \FilippoToso\Travelport\Rail\RailExchangeQuoteReq
     */
    public function setRailFareNoteList($RailFareNoteList)
    {
      $this->RailFareNoteList = $RailFareNoteList;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Rail\RailExchangeQuoteReq
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
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
     * @return \FilippoToso\Travelport\Rail\RailExchangeQuoteReq
     */
    public function setResponseType($ResponseType)
    {
      $this->ResponseType = $ResponseType;
      return $this;
    }

}
