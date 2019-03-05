<?php

namespace FilippoToso\Travelport\UniversalRecord;

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
     * @return \FilippoToso\Travelport\UniversalRecord\MealRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
