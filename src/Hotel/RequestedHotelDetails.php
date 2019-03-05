<?php

namespace FilippoToso\Travelport\Hotel;

class RequestedHotelDetails extends typeHotelDetails
{

    /**
     * @var HotelType $HotelType
     */
    protected $HotelType = null;

    /**
     * @param HotelProperty $HotelProperty
     * @param HotelDetailItem $HotelDetailItem
     * @param HotelRateDetail $HotelRateDetail
     * @param MediaItem $MediaItem
     * @param HotelType $HotelType
     */
    public function __construct($HotelProperty = null, $HotelDetailItem = null, $HotelRateDetail = null, $MediaItem = null, $HotelType = null)
    {
      parent::__construct($HotelProperty, $HotelDetailItem, $HotelRateDetail, $MediaItem);
      $this->HotelType = $HotelType;
    }

    /**
     * @return HotelType
     */
    public function getHotelType()
    {
      return $this->HotelType;
    }

    /**
     * @param HotelType $HotelType
     * @return \FilippoToso\Travelport\Hotel\RequestedHotelDetails
     */
    public function setHotelType($HotelType)
    {
      $this->HotelType = $HotelType;
      return $this;
    }

}
