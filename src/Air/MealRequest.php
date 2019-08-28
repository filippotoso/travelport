<?php

namespace FilippoToso\Travelport\Air;

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
     * @return \FilippoToso\Travelport\Air\MealRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
