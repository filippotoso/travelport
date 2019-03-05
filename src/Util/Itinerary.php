<?php

namespace FilippoToso\Travelport\Util;

class Itinerary
{

    /**
     * @var typeItinerary $Type
     */
    protected $Type = null;

    /**
     * @var typeItineraryOption $Option
     */
    protected $Option = null;

    /**
     * @var boolean $SeparateIndicator
     */
    protected $SeparateIndicator = null;

    /**
     * @param typeItinerary $Type
     * @param typeItineraryOption $Option
     * @param boolean $SeparateIndicator
     */
    public function __construct($Type = null, $Option = null, $SeparateIndicator = null)
    {
      $this->Type = $Type;
      $this->Option = $Option;
      $this->SeparateIndicator = $SeparateIndicator;
    }

    /**
     * @return typeItinerary
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeItinerary $Type
     * @return \FilippoToso\Travelport\Util\Itinerary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeItineraryOption
     */
    public function getOption()
    {
      return $this->Option;
    }

    /**
     * @param typeItineraryOption $Option
     * @return \FilippoToso\Travelport\Util\Itinerary
     */
    public function setOption($Option)
    {
      $this->Option = $Option;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSeparateIndicator()
    {
      return $this->SeparateIndicator;
    }

    /**
     * @param boolean $SeparateIndicator
     * @return \FilippoToso\Travelport\Util\Itinerary
     */
    public function setSeparateIndicator($SeparateIndicator)
    {
      $this->SeparateIndicator = $SeparateIndicator;
      return $this;
    }

}
