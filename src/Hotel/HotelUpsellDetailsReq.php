<?php

namespace FilippoToso\Travelport\Hotel;

class HotelUpsellDetailsReq extends BaseReq
{

    /**
     * @var HotelProperty $HotelProperty
     */
    protected $HotelProperty = null;

    /**
     * @var HotelRateDetail $HotelRateDetail
     */
    protected $HotelRateDetail = null;

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
     * @param HotelRateDetail $HotelRateDetail
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $HotelProperty = null, $HotelRateDetail = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->HotelProperty = $HotelProperty;
      $this->HotelRateDetail = $HotelRateDetail;
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
     * @return \FilippoToso\Travelport\Hotel\HotelUpsellDetailsReq
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return HotelRateDetail
     */
    public function getHotelRateDetail()
    {
      return $this->HotelRateDetail;
    }

    /**
     * @param HotelRateDetail $HotelRateDetail
     * @return \FilippoToso\Travelport\Hotel\HotelUpsellDetailsReq
     */
    public function setHotelRateDetail($HotelRateDetail)
    {
      $this->HotelRateDetail = $HotelRateDetail;
      return $this;
    }

}
