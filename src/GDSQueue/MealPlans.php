<?php

namespace FilippoToso\Travelport\GDSQueue;

class MealPlans
{

    /**
     * @var MealPlan[] $MealPlan
     */
    protected $MealPlan = null;

    /**
     * @var typeTrinary $Breakfast
     */
    protected $Breakfast = null;

    /**
     * @var typeTrinary $Lunch
     */
    protected $Lunch = null;

    /**
     * @var typeTrinary $Dinner
     */
    protected $Dinner = null;

    /**
     * @param typeTrinary $Breakfast
     * @param typeTrinary $Lunch
     * @param typeTrinary $Dinner
     */
    public function __construct($Breakfast = null, $Lunch = null, $Dinner = null)
    {
      $this->Breakfast = $Breakfast;
      $this->Lunch = $Lunch;
      $this->Dinner = $Dinner;
    }

    /**
     * @return MealPlan[]
     */
    public function getMealPlan()
    {
      return $this->MealPlan;
    }

    /**
     * @param MealPlan[] $MealPlan
     * @return \FilippoToso\Travelport\GDSQueue\MealPlans
     */
    public function setMealPlan(array $MealPlan = null)
    {
      $this->MealPlan = $MealPlan;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getBreakfast()
    {
      return $this->Breakfast;
    }

    /**
     * @param typeTrinary $Breakfast
     * @return \FilippoToso\Travelport\GDSQueue\MealPlans
     */
    public function setBreakfast($Breakfast)
    {
      $this->Breakfast = $Breakfast;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getLunch()
    {
      return $this->Lunch;
    }

    /**
     * @param typeTrinary $Lunch
     * @return \FilippoToso\Travelport\GDSQueue\MealPlans
     */
    public function setLunch($Lunch)
    {
      $this->Lunch = $Lunch;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getDinner()
    {
      return $this->Dinner;
    }

    /**
     * @param typeTrinary $Dinner
     * @return \FilippoToso\Travelport\GDSQueue\MealPlans
     */
    public function setDinner($Dinner)
    {
      $this->Dinner = $Dinner;
      return $this;
    }

}
