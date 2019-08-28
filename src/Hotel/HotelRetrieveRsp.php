<?php

namespace FilippoToso\Travelport\Hotel;

class HotelRetrieveRsp extends BaseRsp
{

    /**
     * @var HotelReservation $HotelReservation
     */
    protected $HotelReservation = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param HotelReservation $HotelReservation
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $HotelReservation = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->HotelReservation = $HotelReservation;
    }

    /**
     * @return HotelReservation
     */
    public function getHotelReservation()
    {
      return $this->HotelReservation;
    }

    /**
     * @param HotelReservation $HotelReservation
     * @return \FilippoToso\Travelport\Hotel\HotelRetrieveRsp
     */
    public function setHotelReservation($HotelReservation)
    {
      $this->HotelReservation = $HotelReservation;
      return $this;
    }

}
