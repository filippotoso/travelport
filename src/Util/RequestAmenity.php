<?php

namespace FilippoToso\Travelport\Util;

class RequestAmenity
{

    /**
     * @var anonymous1106 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous1106 $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return anonymous1106
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1106 $Type
     * @return \FilippoToso\Travelport\Util\RequestAmenity
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
