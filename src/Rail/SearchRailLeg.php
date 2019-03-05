<?php

namespace FilippoToso\Travelport\Rail;

class SearchRailLeg
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
     * @var RailSegmentList $RailSegmentList
     */
    protected $RailSegmentList = null;

    /**
     * @var typeFlexibleTimeSpec[] $SearchDepTime
     */
    protected $SearchDepTime = null;

    /**
     * @var typeTimeSpec[] $SearchArvTime
     */
    protected $SearchArvTime = null;

    /**
     * @var RailLegModifiers $RailLegModifiers
     */
    protected $RailLegModifiers = null;

    /**
     * @param typeSearchLocation[] $SearchOrigin
     * @param typeSearchLocation[] $SearchDestination
     * @param RailSegmentList $RailSegmentList
     * @param typeFlexibleTimeSpec[] $SearchDepTime
     * @param typeTimeSpec[] $SearchArvTime
     * @param RailLegModifiers $RailLegModifiers
     */
    public function __construct(array $SearchOrigin = null, array $SearchDestination = null, $RailSegmentList = null, array $SearchDepTime = null, array $SearchArvTime = null, $RailLegModifiers = null)
    {
      $this->SearchOrigin = $SearchOrigin;
      $this->SearchDestination = $SearchDestination;
      $this->RailSegmentList = $RailSegmentList;
      $this->SearchDepTime = $SearchDepTime;
      $this->SearchArvTime = $SearchArvTime;
      $this->RailLegModifiers = $RailLegModifiers;
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
     * @return \FilippoToso\Travelport\Rail\SearchRailLeg
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
     * @return \FilippoToso\Travelport\Rail\SearchRailLeg
     */
    public function setSearchDestination(array $SearchDestination)
    {
      $this->SearchDestination = $SearchDestination;
      return $this;
    }

    /**
     * @return RailSegmentList
     */
    public function getRailSegmentList()
    {
      return $this->RailSegmentList;
    }

    /**
     * @param RailSegmentList $RailSegmentList
     * @return \FilippoToso\Travelport\Rail\SearchRailLeg
     */
    public function setRailSegmentList($RailSegmentList)
    {
      $this->RailSegmentList = $RailSegmentList;
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
     * @return \FilippoToso\Travelport\Rail\SearchRailLeg
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
     * @return \FilippoToso\Travelport\Rail\SearchRailLeg
     */
    public function setSearchArvTime(array $SearchArvTime)
    {
      $this->SearchArvTime = $SearchArvTime;
      return $this;
    }

    /**
     * @return RailLegModifiers
     */
    public function getRailLegModifiers()
    {
      return $this->RailLegModifiers;
    }

    /**
     * @param RailLegModifiers $RailLegModifiers
     * @return \FilippoToso\Travelport\Rail\SearchRailLeg
     */
    public function setRailLegModifiers($RailLegModifiers)
    {
      $this->RailLegModifiers = $RailLegModifiers;
      return $this;
    }

}
