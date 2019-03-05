<?php

namespace FilippoToso\Travelport\Air;

class AvailabilitySearchReq extends AirSearchReq
{

    /**
     * @var SearchPassenger $SearchPassenger
     */
    protected $SearchPassenger = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @var boolean $ReturnBrandIndicator
     */
    protected $ReturnBrandIndicator = null;

    /**
     * @var anonymous1191 $ChannelId
     */
    protected $ChannelId = null;

    /**
     * @var anonymous1192 $NSCC
     */
    protected $NSCC = null;

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
     * @param PointOfCommencement $PointOfCommencement
     * @param SearchAirLeg $SearchAirLeg
     * @param SearchSpecificAirSegment $SearchSpecificAirSegment
     * @param AirSearchModifiers $AirSearchModifiers
     * @param JourneyData $JourneyData
     * @param SearchPassenger $SearchPassenger
     * @param PointOfSale $PointOfSale
     * @param boolean $ReturnBrandIndicator
     * @param anonymous1191 $ChannelId
     * @param anonymous1192 $NSCC
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null, $PointOfCommencement = null, $SearchAirLeg = null, $SearchSpecificAirSegment = null, $AirSearchModifiers = null, $JourneyData = null, $SearchPassenger = null, $PointOfSale = null, $ReturnBrandIndicator = null, $ChannelId = null, $NSCC = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference, $PointOfCommencement, $SearchAirLeg, $SearchSpecificAirSegment, $AirSearchModifiers, $JourneyData);
      $this->SearchPassenger = $SearchPassenger;
      $this->PointOfSale = $PointOfSale;
      $this->ReturnBrandIndicator = $ReturnBrandIndicator;
      $this->ChannelId = $ChannelId;
      $this->NSCC = $NSCC;
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
     * @return \FilippoToso\Travelport\Air\AvailabilitySearchReq
     */
    public function setSearchPassenger($SearchPassenger)
    {
      $this->SearchPassenger = $SearchPassenger;
      return $this;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\Air\AvailabilitySearchReq
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnBrandIndicator()
    {
      return $this->ReturnBrandIndicator;
    }

    /**
     * @param boolean $ReturnBrandIndicator
     * @return \FilippoToso\Travelport\Air\AvailabilitySearchReq
     */
    public function setReturnBrandIndicator($ReturnBrandIndicator)
    {
      $this->ReturnBrandIndicator = $ReturnBrandIndicator;
      return $this;
    }

    /**
     * @return anonymous1191
     */
    public function getChannelId()
    {
      return $this->ChannelId;
    }

    /**
     * @param anonymous1191 $ChannelId
     * @return \FilippoToso\Travelport\Air\AvailabilitySearchReq
     */
    public function setChannelId($ChannelId)
    {
      $this->ChannelId = $ChannelId;
      return $this;
    }

    /**
     * @return anonymous1192
     */
    public function getNSCC()
    {
      return $this->NSCC;
    }

    /**
     * @param anonymous1192 $NSCC
     * @return \FilippoToso\Travelport\Air\AvailabilitySearchReq
     */
    public function setNSCC($NSCC)
    {
      $this->NSCC = $NSCC;
      return $this;
    }

}
