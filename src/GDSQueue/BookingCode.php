<?php

namespace FilippoToso\Travelport\GDSQueue;

class BookingCode
{

    /**
     * @var typeClassOfService $Code
     */
    protected $Code = null;

    /**
     * @param typeClassOfService $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeClassOfService
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeClassOfService $Code
     * @return \FilippoToso\Travelport\GDSQueue\BookingCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
