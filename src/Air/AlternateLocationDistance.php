<?php

namespace FilippoToso\Travelport\Air;

class AlternateLocationDistance
{

    /**
     * @var Distance $Distance
     */
    protected $Distance = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeIATACode $SearchLocation
     */
    protected $SearchLocation = null;

    /**
     * @var typeIATACode $AlternateLocation
     */
    protected $AlternateLocation = null;

    /**
     * @param Distance $Distance
     * @param typeRef $Key
     * @param typeIATACode $SearchLocation
     * @param typeIATACode $AlternateLocation
     */
    public function __construct($Distance = null, $Key = null, $SearchLocation = null, $AlternateLocation = null)
    {
      $this->Distance = $Distance;
      $this->Key = $Key;
      $this->SearchLocation = $SearchLocation;
      $this->AlternateLocation = $AlternateLocation;
    }

    /**
     * @return Distance
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param Distance $Distance
     * @return \FilippoToso\Travelport\Air\AlternateLocationDistance
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Air\AlternateLocationDistance
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getSearchLocation()
    {
      return $this->SearchLocation;
    }

    /**
     * @param typeIATACode $SearchLocation
     * @return \FilippoToso\Travelport\Air\AlternateLocationDistance
     */
    public function setSearchLocation($SearchLocation)
    {
      $this->SearchLocation = $SearchLocation;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getAlternateLocation()
    {
      return $this->AlternateLocation;
    }

    /**
     * @param typeIATACode $AlternateLocation
     * @return \FilippoToso\Travelport\Air\AlternateLocationDistance
     */
    public function setAlternateLocation($AlternateLocation)
    {
      $this->AlternateLocation = $AlternateLocation;
      return $this;
    }

}
