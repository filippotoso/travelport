<?php

namespace FilippoToso\Travelport\UProfile;

class UnitedNationsHistory
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
     * @return \FilippoToso\Travelport\UProfile\UnitedNationsHistory
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
