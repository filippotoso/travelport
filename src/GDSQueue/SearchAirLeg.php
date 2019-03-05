<?php

namespace FilippoToso\Travelport\GDSQueue;

class SearchAirLeg
{

    /**
     * @var typeSearchLocation[] $SearchOrigin
     */
    protected $SearchOrigin = null;

    /**
     * @var typeSearchLocation[] $SearchDestination
     */
    protected $SearchDestination = null;

    /**
     * @var typeFlexibleTimeSpec[] $SearchDepTime
     */
    protected $SearchDepTime = null;

    /**
     * @var typeTimeSpec[] $SearchArvTime
     */
    protected $SearchArvTime = null;

    /**
     * @var AirLegModifiers $AirLegModifiers
     */
    protected $AirLegModifiers = null;

    /**
     * @param typeSearchLocation[] $SearchOrigin
     * @param typeFlexibleTimeSpec[] $SearchDepTime
     * @param typeTimeSpec[] $SearchArvTime
     * @param AirLegModifiers $AirLegModifiers
     */
    public function __construct(array $SearchOrigin = null, array $SearchDepTime = null, array $SearchArvTime = null, $AirLegModifiers = null)
    {
      $this->SearchOrigin = $SearchOrigin;
      $this->SearchDepTime = $SearchDepTime;
      $this->SearchArvTime = $SearchArvTime;
      $this->AirLegModifiers = $AirLegModifiers;
    }

    /**
     * @return typeSearchLocation[]
     */
    public function getSearchOrigin()
    {
      return $this->SearchOrigin;
    }

    /**
     * @param typeSearchLocation[] $SearchOrigin
     * @return \FilippoToso\Travelport\GDSQueue\SearchAirLeg
     */
    public function setSearchOrigin(array $SearchOrigin)
    {
      $this->SearchOrigin = $SearchOrigin;
      return $this;
    }

    /**
     * @return typeSearchLocation[]
     */
    public function getSearchDestination()
    {
      return $this->SearchDestination;
    }

    /**
     * @param typeSearchLocation[] $SearchDestination
     * @return \FilippoToso\Travelport\GDSQueue\SearchAirLeg
     */
    public function setSearchDestination(array $SearchDestination = null)
    {
      $this->SearchDestination = $SearchDestination;
      return $this;
    }

    /**
     * @return typeFlexibleTimeSpec[]
     */
    public function getSearchDepTime()
    {
      return $this->SearchDepTime;
    }

    /**
     * @param typeFlexibleTimeSpec[] $SearchDepTime
     * @return \FilippoToso\Travelport\GDSQueue\SearchAirLeg
     */
    public function setSearchDepTime(array $SearchDepTime)
    {
      $this->SearchDepTime = $SearchDepTime;
      return $this;
    }

    /**
     * @return typeTimeSpec[]
     */
    public function getSearchArvTime()
    {
      return $this->SearchArvTime;
    }

    /**
     * @param typeTimeSpec[] $SearchArvTime
     * @return \FilippoToso\Travelport\GDSQueue\SearchAirLeg
     */
    public function setSearchArvTime(array $SearchArvTime)
    {
      $this->SearchArvTime = $SearchArvTime;
      return $this;
    }

    /**
     * @return AirLegModifiers
     */
    public function getAirLegModifiers()
    {
      return $this->AirLegModifiers;
    }

    /**
     * @param AirLegModifiers $AirLegModifiers
     * @return \FilippoToso\Travelport\GDSQueue\SearchAirLeg
     */
    public function setAirLegModifiers($AirLegModifiers)
    {
      $this->AirLegModifiers = $AirLegModifiers;
      return $this;
    }

}
