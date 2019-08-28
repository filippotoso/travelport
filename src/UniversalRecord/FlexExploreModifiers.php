<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FlexExploreModifiers
{

    /**
     * @var typeIATACode[] $Destination
     */
    protected $Destination = null;

    /**
     * @var anonymous605 $Type
     */
    protected $Type = null;

    /**
     * @var int $Radius
     */
    protected $Radius = null;

    /**
     * @var anonymous606 $GroupName
     */
    protected $GroupName = null;

    /**
     * @param anonymous605 $Type
     * @param int $Radius
     * @param anonymous606 $GroupName
     */
    public function __construct($Type = null, $Radius = null, $GroupName = null)
    {
      $this->Type = $Type;
      $this->Radius = $Radius;
      $this->GroupName = $GroupName;
    }

    /**
     * @return typeIATACode[]
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode[] $Destination
     * @return \FilippoToso\Travelport\UniversalRecord\FlexExploreModifiers
     */
    public function setDestination(array $Destination = null)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return anonymous605
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous605 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\FlexExploreModifiers
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
      return $this->Radius;
    }

    /**
     * @param int $Radius
     * @return \FilippoToso\Travelport\UniversalRecord\FlexExploreModifiers
     */
    public function setRadius($Radius)
    {
      $this->Radius = $Radius;
      return $this;
    }

    /**
     * @return anonymous606
     */
    public function getGroupName()
    {
      return $this->GroupName;
    }

    /**
     * @param anonymous606 $GroupName
     * @return \FilippoToso\Travelport\UniversalRecord\FlexExploreModifiers
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

}
