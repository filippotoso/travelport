<?php

namespace FilippoToso\Travelport\Hotel;

class MealPlan
{

    /**
     * @var typeOTACode $Code
     */
    protected $Code = null;

    /**
     * @param typeOTACode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeOTACode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeOTACode $Code
     * @return \FilippoToso\Travelport\Hotel\MealPlan
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
