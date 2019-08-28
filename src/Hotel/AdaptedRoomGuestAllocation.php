<?php

namespace FilippoToso\Travelport\Hotel;

class AdaptedRoomGuestAllocation
{

    /**
     * @var typeAdaptedRoomGuestAllocation[] $Room
     */
    protected $Room = null;

    /**
     * @param typeAdaptedRoomGuestAllocation[] $Room
     */
    public function __construct(array $Room = null)
    {
      $this->Room = $Room;
    }

    /**
     * @return typeAdaptedRoomGuestAllocation[]
     */
    public function getRoom()
    {
      return $this->Room;
    }

    /**
     * @param typeAdaptedRoomGuestAllocation[] $Room
     * @return \FilippoToso\Travelport\Hotel\AdaptedRoomGuestAllocation
     */
    public function setRoom(array $Room)
    {
      $this->Room = $Room;
      return $this;
    }

}
