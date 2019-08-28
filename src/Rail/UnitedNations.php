<?php

namespace FilippoToso\Travelport\Rail;

class UnitedNations
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @param string $Number
     */
    public function __construct($Number = null)
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
     * @return \FilippoToso\Travelport\Rail\UnitedNations
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
