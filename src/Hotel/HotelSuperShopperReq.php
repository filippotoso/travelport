<?php

namespace FilippoToso\Travelport\Hotel;

class HotelSuperShopperReq extends BaseSearchReq
{

    /**
     * @var HotelSearchLocation $HotelSearchLocation
     */
    protected $HotelSearchLocation = null;

    /**
     * @var HotelSearchModifiers $HotelSearchModifiers
     */
    protected $HotelSearchModifiers = null;

    /**
     * @var HotelStay $HotelStay
     */
    protected $HotelStay = null;

    /**
     * @var QuickResponse $QuickResponse
     */
    protected $QuickResponse = null;

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
     * @param HotelSearchLocation $HotelSearchLocation
     * @param HotelSearchModifiers $HotelSearchModifiers
     * @param HotelStay $HotelStay
     * @param QuickResponse $QuickResponse
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null, $HotelSearchLocation = null, $HotelSearchModifiers = null, $HotelStay = null, $QuickResponse = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference);
      $this->HotelSearchLocation = $HotelSearchLocation;
      $this->HotelSearchModifiers = $HotelSearchModifiers;
      $this->HotelStay = $HotelStay;
      $this->QuickResponse = $QuickResponse;
    }

    /**
     * @return HotelSearchLocation
     */
    public function getHotelSearchLocation()
    {
      return $this->HotelSearchLocation;
    }

    /**
     * @param HotelSearchLocation $HotelSearchLocation
     * @return \FilippoToso\Travelport\Hotel\HotelSuperShopperReq
     */
    public function setHotelSearchLocation($HotelSearchLocation)
    {
      $this->HotelSearchLocation = $HotelSearchLocation;
      return $this;
    }

    /**
     * @return HotelSearchModifiers
     */
    public function getHotelSearchModifiers()
    {
      return $this->HotelSearchModifiers;
    }

    /**
     * @param HotelSearchModifiers $HotelSearchModifiers
     * @return \FilippoToso\Travelport\Hotel\HotelSuperShopperReq
     */
    public function setHotelSearchModifiers($HotelSearchModifiers)
    {
      $this->HotelSearchModifiers = $HotelSearchModifiers;
      return $this;
    }

    /**
     * @return HotelStay
     */
    public function getHotelStay()
    {
      return $this->HotelStay;
    }

    /**
     * @param HotelStay $HotelStay
     * @return \FilippoToso\Travelport\Hotel\HotelSuperShopperReq
     */
    public function setHotelStay($HotelStay)
    {
      $this->HotelStay = $HotelStay;
      return $this;
    }

    /**
     * @return QuickResponse
     */
    public function getQuickResponse()
    {
      return $this->QuickResponse;
    }

    /**
     * @param QuickResponse $QuickResponse
     * @return \FilippoToso\Travelport\Hotel\HotelSuperShopperReq
     */
    public function setQuickResponse($QuickResponse)
    {
      $this->QuickResponse = $QuickResponse;
      return $this;
    }

}
