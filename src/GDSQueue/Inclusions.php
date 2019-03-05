<?php

namespace FilippoToso\Travelport\GDSQueue;

class Inclusions
{

    /**
     * @var BedTypes[] $BedTypes
     */
    protected $BedTypes = null;

    /**
     * @var MealPlans $MealPlans
     */
    protected $MealPlans = null;

    /**
     * @var RoomView $RoomView
     */
    protected $RoomView = null;

    /**
     * @var typeTrinary $SmokingRoomIndicator
     */
    protected $SmokingRoomIndicator = null;

    /**
     * @param RoomView $RoomView
     * @param typeTrinary $SmokingRoomIndicator
     */
    public function __construct($RoomView = null, $SmokingRoomIndicator = null)
    {
      $this->RoomView = $RoomView;
      $this->SmokingRoomIndicator = $SmokingRoomIndicator;
    }

    /**
     * @return BedTypes[]
     */
    public function getBedTypes()
    {
      return $this->BedTypes;
    }

    /**
     * @param BedTypes[] $BedTypes
     * @return \FilippoToso\Travelport\GDSQueue\Inclusions
     */
    public function setBedTypes(array $BedTypes = null)
    {
      $this->BedTypes = $BedTypes;
      return $this;
    }

    /**
     * @return MealPlans
     */
    public function getMealPlans()
    {
      return $this->MealPlans;
    }

    /**
     * @param MealPlans $MealPlans
     * @return \FilippoToso\Travelport\GDSQueue\Inclusions
     */
    public function setMealPlans($MealPlans)
    {
      $this->MealPlans = $MealPlans;
      return $this;
    }

    /**
     * @return RoomView
     */
    public function getRoomView()
    {
      return $this->RoomView;
    }

    /**
     * @param RoomView $RoomView
     * @return \FilippoToso\Travelport\GDSQueue\Inclusions
     */
    public function setRoomView($RoomView)
    {
      $this->RoomView = $RoomView;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getSmokingRoomIndicator()
    {
      return $this->SmokingRoomIndicator;
    }

    /**
     * @param typeTrinary $SmokingRoomIndicator
     * @return \FilippoToso\Travelport\GDSQueue\Inclusions
     */
    public function setSmokingRoomIndicator($SmokingRoomIndicator)
    {
      $this->SmokingRoomIndicator = $SmokingRoomIndicator;
      return $this;
    }

}
