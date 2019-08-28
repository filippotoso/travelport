<?php

namespace FilippoToso\Travelport\Hotel;

class HotelSuperShopperRsp extends BaseSearchRsp
{

    /**
     * @var VendorLocation $VendorLocation
     */
    protected $VendorLocation = null;

    /**
     * @var CurrencyRateConversion $CurrencyRateConversion
     */
    protected $CurrencyRateConversion = null;

    /**
     * @var HotelSuperShopperResults $HotelSuperShopperResults
     */
    protected $HotelSuperShopperResults = null;

    /**
     * @var QuickResponse $QuickResponse
     */
    protected $QuickResponse = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     * @param VendorLocation $VendorLocation
     * @param CurrencyRateConversion $CurrencyRateConversion
     * @param HotelSuperShopperResults $HotelSuperShopperResults
     * @param QuickResponse $QuickResponse
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $VendorLocation = null, $CurrencyRateConversion = null, $HotelSuperShopperResults = null, $QuickResponse = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference);
      $this->VendorLocation = $VendorLocation;
      $this->CurrencyRateConversion = $CurrencyRateConversion;
      $this->HotelSuperShopperResults = $HotelSuperShopperResults;
      $this->QuickResponse = $QuickResponse;
    }

    /**
     * @return VendorLocation
     */
    public function getVendorLocation()
    {
      return $this->VendorLocation;
    }

    /**
     * @param VendorLocation $VendorLocation
     * @return \FilippoToso\Travelport\Hotel\HotelSuperShopperRsp
     */
    public function setVendorLocation($VendorLocation)
    {
      $this->VendorLocation = $VendorLocation;
      return $this;
    }

    /**
     * @return CurrencyRateConversion
     */
    public function getCurrencyRateConversion()
    {
      return $this->CurrencyRateConversion;
    }

    /**
     * @param CurrencyRateConversion $CurrencyRateConversion
     * @return \FilippoToso\Travelport\Hotel\HotelSuperShopperRsp
     */
    public function setCurrencyRateConversion($CurrencyRateConversion)
    {
      $this->CurrencyRateConversion = $CurrencyRateConversion;
      return $this;
    }

    /**
     * @return HotelSuperShopperResults
     */
    public function getHotelSuperShopperResults()
    {
      return $this->HotelSuperShopperResults;
    }

    /**
     * @param HotelSuperShopperResults $HotelSuperShopperResults
     * @return \FilippoToso\Travelport\Hotel\HotelSuperShopperRsp
     */
    public function setHotelSuperShopperResults($HotelSuperShopperResults)
    {
      $this->HotelSuperShopperResults = $HotelSuperShopperResults;
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
     * @return \FilippoToso\Travelport\Hotel\HotelSuperShopperRsp
     */
    public function setQuickResponse($QuickResponse)
    {
      $this->QuickResponse = $QuickResponse;
      return $this;
    }

}
