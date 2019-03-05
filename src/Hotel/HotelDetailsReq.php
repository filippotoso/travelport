<?php

namespace FilippoToso\Travelport\Hotel;

class HotelDetailsReq extends BaseHotelDetailsReq
{

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var NextResultReference $NextResultReference
     */
    protected $NextResultReference = null;

    /**
     * @var boolean $ReturnMediaLinks
     */
    protected $ReturnMediaLinks = null;

    /**
     * @var boolean $ReturnGuestReviews
     */
    protected $ReturnGuestReviews = null;

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
     * @param HotelProperty $HotelProperty
     * @param HotelDetailsModifiers $HotelDetailsModifiers
     * @param PointOfSale $PointOfSale
     * @param HostToken $HostToken
     * @param NextResultReference $NextResultReference
     * @param boolean $ReturnMediaLinks
     * @param boolean $ReturnGuestReviews
     * @param typePolicyReference $PolicyReference
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $HotelProperty = null, $HotelDetailsModifiers = null, $PointOfSale = null, $HostToken = null, $NextResultReference = null, $ReturnMediaLinks = null, $ReturnGuestReviews = null, $PolicyReference = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $HotelProperty, $HotelDetailsModifiers, $PointOfSale);
      $this->HostToken = $HostToken;
      $this->NextResultReference = $NextResultReference;
      $this->ReturnMediaLinks = $ReturnMediaLinks;
      $this->ReturnGuestReviews = $ReturnGuestReviews;
      $this->PolicyReference = $PolicyReference;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsReq
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return NextResultReference
     */
    public function getNextResultReference()
    {
      return $this->NextResultReference;
    }

    /**
     * @param NextResultReference $NextResultReference
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsReq
     */
    public function setNextResultReference($NextResultReference)
    {
      $this->NextResultReference = $NextResultReference;
      return $this;
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
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsReq
     */
    public function setReturnMediaLinks($ReturnMediaLinks)
    {
      $this->ReturnMediaLinks = $ReturnMediaLinks;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnGuestReviews()
    {
      return $this->ReturnGuestReviews;
    }

    /**
     * @param boolean $ReturnGuestReviews
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsReq
     */
    public function setReturnGuestReviews($ReturnGuestReviews)
    {
      $this->ReturnGuestReviews = $ReturnGuestReviews;
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
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsReq
     */
    public function setPolicyReference($PolicyReference)
    {
      $this->PolicyReference = $PolicyReference;
      return $this;
    }

}
