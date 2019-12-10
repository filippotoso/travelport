<?php

namespace FilippoToso\Travelport\GDSQueue;

class Amenity
{

    /**
     * @var typeAmenity $Code
     */
    protected $Code = null;

    /**
     * @var anonymous1232 $AmenityType
     */
    protected $AmenityType = null;

    /**
     * @param typeAmenity $Code
     * @param anonymous1232 $AmenityType
     */
    public function __construct($Code = null, $AmenityType = null)
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
     * @return \FilippoToso\Travelport\GDSQueue\Amenity
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous1232
     */
    public function getAmenityType()
    {
      return $this->AmenityType;
    }

    /**
     * @param anonymous1232 $AmenityType
     * @return \FilippoToso\Travelport\GDSQueue\Amenity
     */
    public function setAmenityType($AmenityType)
    {
      $this->AmenityType = $AmenityType;
      return $this;
    }

}
