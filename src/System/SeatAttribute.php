<?php

namespace FilippoToso\Travelport\System;

class SeatAttribute
{

    /**
     * @var anonymous464 $Value
     */
    protected $Value = null;

    /**
     * @param anonymous464 $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return anonymous464
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous464 $Value
     * @return \FilippoToso\Travelport\System\SeatAttribute
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
