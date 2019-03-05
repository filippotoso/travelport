<?php

namespace FilippoToso\Travelport\Rail;

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
     * @return \FilippoToso\Travelport\Rail\typeRoomDispatch
     */
    public function setRoom(array $Room = null)
    {
      $this->Room = $Room;
      return $this;
    }

}
