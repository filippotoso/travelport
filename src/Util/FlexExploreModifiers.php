<?php

namespace FilippoToso\Travelport\Util;

class FlexExploreModifiers
{

    /**
     * @var typeIATACode[] $Destination
     */
    protected $Destination = null;

    /**
     * @var anonymous601 $Type
     */
    protected $Type = null;

    /**
     * @var int $Radius
     */
    protected $Radius = null;

    /**
     * @var anonymous602 $GroupName
     */
    protected $GroupName = null;

    /**
     * @param anonymous601 $Type
     * @param int $Radius
     * @param anonymous602 $GroupName
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
     * @return \FilippoToso\Travelport\Util\FlexExploreModifiers
     */
    public function setDestination(array $Destination = null)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return anonymous601
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous601 $Type
     * @return \FilippoToso\Travelport\Util\FlexExploreModifiers
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
     * @return \FilippoToso\Travelport\Util\FlexExploreModifiers
     */
    public function setRadius($Radius)
    {
      $this->Radius = $Radius;
      return $this;
    }

    /**
     * @return anonymous602
     */
    public function getGroupName()
    {
      return $this->GroupName;
    }

    /**
     * @param anonymous602 $GroupName
     * @return \FilippoToso\Travelport\Util\FlexExploreModifiers
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

}
