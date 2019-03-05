<?php

namespace FilippoToso\Travelport\Rail;

class TourCode
{

    /**
     * @var typeTourCode $Value
     */
    protected $Value = null;

    /**
     * @param typeTourCode $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return typeTourCode
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typeTourCode $Value
     * @return \FilippoToso\Travelport\Rail\TourCode
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
