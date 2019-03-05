<?php

namespace FilippoToso\Travelport\GDSQueue;

class SeatAttribute
{

    /**
     * @var anonymous476 $Value
     */
    protected $Value = null;

    /**
     * @param anonymous476 $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return anonymous476
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous476 $Value
     * @return \FilippoToso\Travelport\GDSQueue\SeatAttribute
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
