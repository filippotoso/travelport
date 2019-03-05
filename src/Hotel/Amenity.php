<?php

namespace FilippoToso\Travelport\Hotel;

class Amenity
{

    /**
     * @var typeAmenity $Code
     */
    protected $Code = null;

    /**
     * @var anonymous616 $AmenityType
     */
    protected $AmenityType = null;

    /**
     * @param typeAmenity $Code
     * @param anonymous616 $AmenityType
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
     * @return \FilippoToso\Travelport\Hotel\Amenity
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous616
     */
    public function getAmenityType()
    {
      return $this->AmenityType;
    }

    /**
     * @param anonymous616 $AmenityType
     * @return \FilippoToso\Travelport\Hotel\Amenity
     */
    public function setAmenityType($AmenityType)
    {
      $this->AmenityType = $AmenityType;
      return $this;
    }

}
