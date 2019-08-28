<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BookingGuestInformation
{

    /**
     * @var typeGuestRoomInformation[] $Room
     */
    protected $Room = null;

    /**
     * @param typeGuestRoomInformation[] $Room
     */
    public function __construct(array $Room = null)
    {
      $this->Room = $Room;
    }

    /**
     * @return typeGuestRoomInformation[]
     */
    public function getRoom()
    {
      return $this->Room;
    }

    /**
     * @param typeGuestRoomInformation[] $Room
     * @return \FilippoToso\Travelport\UniversalRecord\BookingGuestInformation
     */
    public function setRoom(array $Room)
    {
      $this->Room = $Room;
      return $this;
    }

}
