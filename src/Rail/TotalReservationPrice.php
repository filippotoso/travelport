<?php

namespace FilippoToso\Travelport\Rail;

class TotalReservationPrice
{

    /**
     * @var typeHotelRateDescription[] $RoomRateDescription
     */
    protected $RoomRateDescription = null;

    /**
     * @var typeMoney $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var typeMoney $ApproxTotalPrice
     */
    protected $ApproxTotalPrice = null;

    /**
     * @param typeMoney $TotalPrice
     * @param typeMoney $ApproxTotalPrice
     */
    public function __construct($TotalPrice = null, $ApproxTotalPrice = null)
    {
      $this->TotalPrice = $TotalPrice;
      $this->ApproxTotalPrice = $ApproxTotalPrice;
    }

    /**
     * @return typeHotelRateDescription[]
     */
    public function getRoomRateDescription()
    {
      return $this->RoomRateDescription;
    }

    /**
     * @param typeHotelRateDescription[] $RoomRateDescription
     * @return \FilippoToso\Travelport\Rail\TotalReservationPrice
     */
    public function setRoomRateDescription(array $RoomRateDescription = null)
    {
      $this->RoomRateDescription = $RoomRateDescription;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\Rail\TotalReservationPrice
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproxTotalPrice()
    {
      return $this->ApproxTotalPrice;
    }

    /**
     * @param typeMoney $ApproxTotalPrice
     * @return \FilippoToso\Travelport\Rail\TotalReservationPrice
     */
    public function setApproxTotalPrice($ApproxTotalPrice)
    {
      $this->ApproxTotalPrice = $ApproxTotalPrice;
      return $this;
    }

}
