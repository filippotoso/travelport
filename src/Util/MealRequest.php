<?php

namespace FilippoToso\Travelport\Util;

class MealRequest
{

    /**
     * @var anonymous72 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous72 $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return anonymous72
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous72 $Type
     * @return \FilippoToso\Travelport\Util\MealRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
