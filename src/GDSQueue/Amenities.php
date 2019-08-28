<?php

namespace FilippoToso\Travelport\GDSQueue;

class Amenities
{

    /**
     * @var Amenity $Amenity
     */
    protected $Amenity = null;

    /**
     * @param Amenity $Amenity
     */
    public function __construct($Amenity = null)
    {
      $this->Amenity = $Amenity;
    }

    /**
     * @return Amenity
     */
    public function getAmenity()
    {
      return $this->Amenity;
    }

    /**
     * @param Amenity $Amenity
     * @return \FilippoToso\Travelport\GDSQueue\Amenities
     */
    public function setAmenity($Amenity)
    {
      $this->Amenity = $Amenity;
      return $this;
    }

}
