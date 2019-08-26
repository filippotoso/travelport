<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Amenity
{

    /**
     * @var typeAmenity $Code
     */
    protected $Code = null;

    /**
     * @var anonymous1233 $AmenityType
     */
    protected $AmenityType = null;

    /**
     * @param typeAmenity $Code
     * @param anonymous1233 $AmenityType
     */
    public function __construct($Code, $AmenityType)
    {
      $this->Code = $Code;
      $this->AmenityType = $AmenityType;
    }

    /**
     * @return typeAmenity
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeAmenity $Code
     * @return \FilippoToso\Travelport\UniversalRecord\Amenity
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous1233
     */
    public function getAmenityType()
    {
      return $this->AmenityType;
    }

    /**
     * @param anonymous1233 $AmenityType
     * @return \FilippoToso\Travelport\UniversalRecord\Amenity
     */
    public function setAmenityType($AmenityType)
    {
      $this->AmenityType = $AmenityType;
      return $this;
    }

}
