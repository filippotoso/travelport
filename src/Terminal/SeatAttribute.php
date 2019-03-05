<?php

namespace FilippoToso\Travelport\Terminal;

class SeatAttribute
{

    /**
     * @var anonymous463 $Value
     */
    protected $Value = null;

    /**
     * @param anonymous463 $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return anonymous463
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous463 $Value
     * @return \FilippoToso\Travelport\Terminal\SeatAttribute
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
