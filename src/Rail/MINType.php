<?php

namespace FilippoToso\Travelport\Rail;

class MINType
{

    /**
     * @var boolean $HoursMin
     */
    protected $HoursMin = null;

    /**
     * @var boolean $DaysMin
     */
    protected $DaysMin = null;

    /**
     * @var boolean $MonthsMin
     */
    protected $MonthsMin = null;

    /**
     * @var boolean $OccurIndMin
     */
    protected $OccurIndMin = null;

    /**
     * @var boolean $SameDayMin
     */
    protected $SameDayMin = null;

    /**
     * @var int $TmDOWMin
     */
    protected $TmDOWMin = null;

    /**
     * @var int $FareComponent
     */
    protected $FareComponent = null;

    /**
     * @var int $NumOccurMin
     */
    protected $NumOccurMin = null;

    /**
     * @param boolean $HoursMin
     * @param boolean $DaysMin
     * @param boolean $MonthsMin
     * @param boolean $OccurIndMin
     * @param boolean $SameDayMin
     * @param int $TmDOWMin
     * @param int $FareComponent
     * @param int $NumOccurMin
     */
    public function __construct($HoursMin = null, $DaysMin = null, $MonthsMin = null, $OccurIndMin = null, $SameDayMin = null, $TmDOWMin = null, $FareComponent = null, $NumOccurMin = null)
    {
      $this->HoursMin = $HoursMin;
      $this->DaysMin = $DaysMin;
      $this->MonthsMin = $MonthsMin;
      $this->OccurIndMin = $OccurIndMin;
      $this->SameDayMin = $SameDayMin;
      $this->TmDOWMin = $TmDOWMin;
      $this->FareComponent = $FareComponent;
      $this->NumOccurMin = $NumOccurMin;
    }

    /**
     * @return boolean
     */
    public function getHoursMin()
    {
      return $this->HoursMin;
    }

    /**
     * @param boolean $HoursMin
     * @return \FilippoToso\Travelport\Rail\MINType
     */
    public function setHoursMin($HoursMin)
    {
      $this->HoursMin = $HoursMin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaysMin()
    {
      return $this->DaysMin;
    }

    /**
     * @param boolean $DaysMin
     * @return \FilippoToso\Travelport\Rail\MINType
     */
    public function setDaysMin($DaysMin)
    {
      $this->DaysMin = $DaysMin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMonthsMin()
    {
      return $this->MonthsMin;
    }

    /**
     * @param boolean $MonthsMin
     * @return \FilippoToso\Travelport\Rail\MINType
     */
    public function setMonthsMin($MonthsMin)
    {
      $this->MonthsMin = $MonthsMin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOccurIndMin()
    {
      return $this->OccurIndMin;
    }

    /**
     * @param boolean $OccurIndMin
     * @return \FilippoToso\Travelport\Rail\MINType
     */
    public function setOccurIndMin($OccurIndMin)
    {
      $this->OccurIndMin = $OccurIndMin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSameDayMin()
    {
      return $this->SameDayMin;
    }

    /**
     * @param boolean $SameDayMin
     * @return \FilippoToso\Travelport\Rail\MINType
     */
    public function setSameDayMin($SameDayMin)
    {
      $this->SameDayMin = $SameDayMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getTmDOWMin()
    {
      return $this->TmDOWMin;
    }

    /**
     * @param int $TmDOWMin
     * @return \FilippoToso\Travelport\Rail\MINType
     */
    public function setTmDOWMin($TmDOWMin)
    {
      $this->TmDOWMin = $TmDOWMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getFareComponent()
    {
      return $this->FareComponent;
    }

    /**
     * @param int $FareComponent
     * @return \FilippoToso\Travelport\Rail\MINType
     */
    public function setFareComponent($FareComponent)
    {
      $this->FareComponent = $FareComponent;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOccurMin()
    {
      return $this->NumOccurMin;
    }

    /**
     * @param int $NumOccurMin
     * @return \FilippoToso\Travelport\Rail\MINType
     */
    public function setNumOccurMin($NumOccurMin)
    {
      $this->NumOccurMin = $NumOccurMin;
      return $this;
    }

}
