<?php

namespace FilippoToso\Travelport\Util;

class RequestAmenity
{

    /**
     * @var anonymous1104 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous1104 $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return anonymous1104
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1104 $Type
     * @return \FilippoToso\Travelport\Util\RequestAmenity
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
