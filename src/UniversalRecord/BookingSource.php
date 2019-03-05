<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BookingSource
{

    /**
     * @var anonymous300 $Code
     */
    protected $Code = null;

    /**
     * @var anonymous301 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous300 $Code
     * @param anonymous301 $Type
     */
    public function __construct($Code = null, $Type = null)
    {
      $this->Code = $Code;
      $this->Type = $Type;
    }

    /**
     * @return anonymous300
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous300 $Code
     * @return \FilippoToso\Travelport\UniversalRecord\BookingSource
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous301
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous301 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\BookingSource
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
