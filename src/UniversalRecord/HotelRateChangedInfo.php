<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelRateChangedInfo
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
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @param HotelProperty $HotelProperty
     * @param HotelRateDetail $HotelRateDetail
     * @param string $Reason
     */
    public function __construct($HotelProperty = null, $HotelRateDetail = null, $Reason = null)
    {
      $this->HotelProperty = $HotelProperty;
      $this->HotelRateDetail = $HotelRateDetail;
      $this->Reason = $Reason;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateChangedInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateChangedInfo
     */
    public function setHotelRateDetail($HotelRateDetail)
    {
      $this->HotelRateDetail = $HotelRateDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateChangedInfo
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
