<?php

namespace FilippoToso\Travelport\System;

class BookingSource
{

    /**
     * @var anonymous287 $Code
     */
    protected $Code = null;

    /**
     * @var anonymous288 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous287 $Code
     * @param anonymous288 $Type
     */
    public function __construct($Code = null, $Type = null)
    {
      $this->Code = $Code;
      $this->Type = $Type;
    }

    /**
     * @return anonymous287
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous287 $Code
     * @return \FilippoToso\Travelport\System\BookingSource
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous288
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous288 $Type
     * @return \FilippoToso\Travelport\System\BookingSource
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
