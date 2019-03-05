<?php

namespace FilippoToso\Travelport\System;

class MealRequest
{

    /**
     * @var anonymous65 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous65 $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return anonymous65
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous65 $Type
     * @return \FilippoToso\Travelport\System\MealRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
