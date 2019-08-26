<?php

namespace FilippoToso\Travelport\Hotel;

class BaseHotelDetailsReq extends BaseReq
{

    /**
     * @var HotelProperty $HotelProperty
     */
    protected $HotelProperty = null;

    /**
     * @var HotelDetailsModifiers $HotelDetailsModifiers
     */
    protected $HotelDetailsModifiers = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

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
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $HotelProperty, $HotelDetailsModifiers, $PointOfSale)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->HotelProperty = $HotelProperty;
      $this->HotelDetailsModifiers = $HotelDetailsModifiers;
      $this->PointOfSale = $PointOfSale;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \FilippoToso\Travelport\Hotel\BaseHotelDetailsReq
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return HotelDetailsModifiers
     */
    public function getHotelDetailsModifiers()
    {
      return $this->HotelDetailsModifiers;
    }

    /**
     * @param HotelDetailsModifiers $HotelDetailsModifiers
     * @return \FilippoToso\Travelport\Hotel\BaseHotelDetailsReq
     */
    public function setHotelDetailsModifiers($HotelDetailsModifiers)
    {
      $this->HotelDetailsModifiers = $HotelDetailsModifiers;
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
     * @return \FilippoToso\Travelport\Hotel\BaseHotelDetailsReq
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

}
