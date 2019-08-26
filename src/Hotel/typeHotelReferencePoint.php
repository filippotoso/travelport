<?php

namespace FilippoToso\Travelport\Hotel;

class typeHotelReferencePoint
{

    /**
     * @var typeReferencePoint $_
     */
    protected $_ = null;

    /**
     * @var typeCountry $Country
     */
    protected $Country = null;

    /**
     * @var typeState $State
     */
    protected $State = null;

    /**
     * @param typeReferencePoint $_
     * @param typeCountry $Country
     * @param typeState $State
     */
    public function __construct($_, $Country, $State)
    {
      $this->_ = $_;
      $this->Country = $Country;
      $this->State = $State;
    }

    /**
     * @return typeReferencePoint
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeReferencePoint $_
     * @return \FilippoToso\Travelport\Hotel\typeHotelReferencePoint
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param typeCountry $Country
     * @return \FilippoToso\Travelport\Hotel\typeHotelReferencePoint
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return typeState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param typeState $State
     * @return \FilippoToso\Travelport\Hotel\typeHotelReferencePoint
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
