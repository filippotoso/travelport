<?php

namespace FilippoToso\Travelport\Hotel;

class BaseHotelSearchReq extends BaseSearchReq
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
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

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
     * @param NextResultReference $NextResultReference
     * @param HotelSearchLocation $HotelSearchLocation
     * @param HotelSearchModifiers $HotelSearchModifiers
     * @param HotelStay $HotelStay
     * @param PointOfSale $PointOfSale
     * @param typePolicyReference $PolicyReference
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null, $HotelSearchLocation = null, $HotelSearchModifiers = null, $HotelStay = null, $PointOfSale = null, $PolicyReference = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference);
      $this->HotelSearchLocation = $HotelSearchLocation;
      $this->HotelSearchModifiers = $HotelSearchModifiers;
      $this->HotelStay = $HotelStay;
      $this->PointOfSale = $PointOfSale;
      $this->PolicyReference = $PolicyReference;
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
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchReq
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
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchReq
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
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchReq
     */
    public function setHotelStay($HotelStay)
    {
      $this->HotelStay = $HotelStay;
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
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchReq
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
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
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchReq
     */
    public function setPolicyReference($PolicyReference)
    {
      $this->PolicyReference = $PolicyReference;
      return $this;
    }

}
