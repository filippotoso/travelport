<?php

namespace FilippoToso\Travelport\UProfile;

class SeatAttribute
{

    /**
     * @var anonymous467 $Value
     */
    protected $Value = null;

    /**
     * @param anonymous467 $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return anonymous467
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous467 $Value
     * @return \FilippoToso\Travelport\UProfile\SeatAttribute
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
