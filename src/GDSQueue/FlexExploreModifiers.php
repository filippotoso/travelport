<?php

namespace FilippoToso\Travelport\GDSQueue;

class FlexExploreModifiers
{

    /**
     * @var typeIATACode[] $Destination
     */
    protected $Destination = null;

    /**
     * @var anonymous679 $Type
     */
    protected $Type = null;

    /**
     * @var int $Radius
     */
    protected $Radius = null;

    /**
     * @var anonymous680 $GroupName
     */
    protected $GroupName = null;

    /**
     * @param anonymous679 $Type
     * @param int $Radius
     * @param anonymous680 $GroupName
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
     * @return \FilippoToso\Travelport\GDSQueue\FlexExploreModifiers
     */
    public function setDestination(array $Destination = null)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return anonymous679
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous679 $Type
     * @return \FilippoToso\Travelport\GDSQueue\FlexExploreModifiers
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
     * @return \FilippoToso\Travelport\GDSQueue\FlexExploreModifiers
     */
    public function setRadius($Radius)
    {
      $this->Radius = $Radius;
      return $this;
    }

    /**
     * @return anonymous680
     */
    public function getGroupName()
    {
      return $this->GroupName;
    }

    /**
     * @param anonymous680 $GroupName
     * @return \FilippoToso\Travelport\GDSQueue\FlexExploreModifiers
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

}
