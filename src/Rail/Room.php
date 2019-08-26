<?php

namespace FilippoToso\Travelport\Rail;

class Room
{

    /**
     * @var int $Capacity
     */
    protected $Capacity = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @param int $Capacity
     * @param int $Quantity
     */
    public function __construct($Capacity, $Quantity)
    {
      $this->Capacity = $Capacity;
      $this->Quantity = $Quantity;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
      return $this->Capacity;
    }

    /**
     * @param int $Capacity
     * @return \FilippoToso\Travelport\Rail\Room
     */
    public function setCapacity($Capacity)
    {
      $this->Capacity = $Capacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \FilippoToso\Travelport\Rail\Room
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
