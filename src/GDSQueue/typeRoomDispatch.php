<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeRoomDispatch
{

    /**
     * @var Room[] $Room
     */
    protected $Room = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Room[]
     */
    public function getRoom()
    {
      return $this->Room;
    }

    /**
     * @param Room[] $Room
     * @return \FilippoToso\Travelport\GDSQueue\typeRoomDispatch
     */
    public function setRoom(array $Room = null)
    {
      $this->Room = $Room;
      return $this;
    }

}
