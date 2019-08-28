<?php

namespace FilippoToso\Travelport\Vehicle;

class MealRequest
{

    /**
     * @var anonymous75 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous75 $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return anonymous75
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous75 $Type
     * @return \FilippoToso\Travelport\Vehicle\MealRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
