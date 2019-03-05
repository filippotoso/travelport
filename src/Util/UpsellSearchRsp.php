<?php

namespace FilippoToso\Travelport\Util;

class UpsellSearchRsp extends BaseRsp
{

    /**
     * @var AirUpsellSearchResult $AirUpsellSearchResult
     */
    protected $AirUpsellSearchResult = null;

    /**
     * @var HotelUpsellSearchResult $HotelUpsellSearchResult
     */
    protected $HotelUpsellSearchResult = null;

    /**
     * @var VehicleUpsellSearchResult $VehicleUpsellSearchResult
     */
    protected $VehicleUpsellSearchResult = null;

    /**
     * @var typeMoreResults $MoreResults
     */
    protected $MoreResults = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param AirUpsellSearchResult $AirUpsellSearchResult
     * @param HotelUpsellSearchResult $HotelUpsellSearchResult
     * @param VehicleUpsellSearchResult $VehicleUpsellSearchResult
     * @param typeMoreResults $MoreResults
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirUpsellSearchResult = null, $HotelUpsellSearchResult = null, $VehicleUpsellSearchResult = null, $MoreResults = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->AirUpsellSearchResult = $AirUpsellSearchResult;
      $this->HotelUpsellSearchResult = $HotelUpsellSearchResult;
      $this->VehicleUpsellSearchResult = $VehicleUpsellSearchResult;
      $this->MoreResults = $MoreResults;
    }

    /**
     * @return AirUpsellSearchResult
     */
    public function getAirUpsellSearchResult()
    {
      return $this->AirUpsellSearchResult;
    }

    /**
     * @param AirUpsellSearchResult $AirUpsellSearchResult
     * @return \FilippoToso\Travelport\Util\UpsellSearchRsp
     */
    public function setAirUpsellSearchResult($AirUpsellSearchResult)
    {
      $this->AirUpsellSearchResult = $AirUpsellSearchResult;
      return $this;
    }

    /**
     * @return HotelUpsellSearchResult
     */
    public function getHotelUpsellSearchResult()
    {
      return $this->HotelUpsellSearchResult;
    }

    /**
     * @param HotelUpsellSearchResult $HotelUpsellSearchResult
     * @return \FilippoToso\Travelport\Util\UpsellSearchRsp
     */
    public function setHotelUpsellSearchResult($HotelUpsellSearchResult)
    {
      $this->HotelUpsellSearchResult = $HotelUpsellSearchResult;
      return $this;
    }

    /**
     * @return VehicleUpsellSearchResult
     */
    public function getVehicleUpsellSearchResult()
    {
      return $this->VehicleUpsellSearchResult;
    }

    /**
     * @param VehicleUpsellSearchResult $VehicleUpsellSearchResult
     * @return \FilippoToso\Travelport\Util\UpsellSearchRsp
     */
    public function setVehicleUpsellSearchResult($VehicleUpsellSearchResult)
    {
      $this->VehicleUpsellSearchResult = $VehicleUpsellSearchResult;
      return $this;
    }

    /**
     * @return typeMoreResults
     */
    public function getMoreResults()
    {
      return $this->MoreResults;
    }

    /**
     * @param typeMoreResults $MoreResults
     * @return \FilippoToso\Travelport\Util\UpsellSearchRsp
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

}
