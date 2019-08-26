<?php

namespace FilippoToso\Travelport\Air;

class UnitedNations
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @param string $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\Air\UnitedNations
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
