<?php

namespace FilippoToso\Travelport\Air;

class MAXType
{

    /**
     * @var boolean $HoursMax
     */
    protected $HoursMax = null;

    /**
     * @var boolean $DaysMax
     */
    protected $DaysMax = null;

    /**
     * @var boolean $MonthsMax
     */
    protected $MonthsMax = null;

    /**
     * @var boolean $OccurIndMax
     */
    protected $OccurIndMax = null;

    /**
     * @var boolean $SameDayMax
     */
    protected $SameDayMax = null;

    /**
     * @var boolean $StartIndMax
     */
    protected $StartIndMax = null;

    /**
     * @var boolean $CompletionInd
     */
    protected $CompletionInd = null;

    /**
     * @var int $TmDOWMax
     */
    protected $TmDOWMax = null;

    /**
     * @var int $NumOccurMax
     */
    protected $NumOccurMax = null;

    /**
     * @param boolean $HoursMax
     * @param boolean $DaysMax
     * @param boolean $MonthsMax
     * @param boolean $OccurIndMax
     * @param boolean $SameDayMax
     * @param boolean $StartIndMax
     * @param boolean $CompletionInd
     * @param int $TmDOWMax
     * @param int $NumOccurMax
     */
    public function __construct($HoursMax = null, $DaysMax = null, $MonthsMax = null, $OccurIndMax = null, $SameDayMax = null, $StartIndMax = null, $CompletionInd = null, $TmDOWMax = null, $NumOccurMax = null)
    {
      $this->HoursMax = $HoursMax;
      $this->DaysMax = $DaysMax;
      $this->MonthsMax = $MonthsMax;
      $this->OccurIndMax = $OccurIndMax;
      $this->SameDayMax = $SameDayMax;
      $this->StartIndMax = $StartIndMax;
      $this->CompletionInd = $CompletionInd;
      $this->TmDOWMax = $TmDOWMax;
      $this->NumOccurMax = $NumOccurMax;
    }

    /**
     * @return boolean
     */
    public function getHoursMax()
    {
      return $this->HoursMax;
    }

    /**
     * @param boolean $HoursMax
     * @return \FilippoToso\Travelport\Air\MAXType
     */
    public function setHoursMax($HoursMax)
    {
      $this->HoursMax = $HoursMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaysMax()
    {
      return $this->DaysMax;
    }

    /**
     * @param boolean $DaysMax
     * @return \FilippoToso\Travelport\Air\MAXType
     */
    public function setDaysMax($DaysMax)
    {
      $this->DaysMax = $DaysMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMonthsMax()
    {
      return $this->MonthsMax;
    }

    /**
     * @param boolean $MonthsMax
     * @return \FilippoToso\Travelport\Air\MAXType
     */
    public function setMonthsMax($MonthsMax)
    {
      $this->MonthsMax = $MonthsMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOccurIndMax()
    {
      return $this->OccurIndMax;
    }

    /**
     * @param boolean $OccurIndMax
     * @return \FilippoToso\Travelport\Air\MAXType
     */
    public function setOccurIndMax($OccurIndMax)
    {
      $this->OccurIndMax = $OccurIndMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSameDayMax()
    {
      return $this->SameDayMax;
    }

    /**
     * @param boolean $SameDayMax
     * @return \FilippoToso\Travelport\Air\MAXType
     */
    public function setSameDayMax($SameDayMax)
    {
      $this->SameDayMax = $SameDayMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStartIndMax()
    {
      return $this->StartIndMax;
    }

    /**
     * @param boolean $StartIndMax
     * @return \FilippoToso\Travelport\Air\MAXType
     */
    public function setStartIndMax($StartIndMax)
    {
      $this->StartIndMax = $StartIndMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCompletionInd()
    {
      return $this->CompletionInd;
    }

    /**
     * @param boolean $CompletionInd
     * @return \FilippoToso\Travelport\Air\MAXType
     */
    public function setCompletionInd($CompletionInd)
    {
      $this->CompletionInd = $CompletionInd;
      return $this;
    }

    /**
     * @return int
     */
    public function getTmDOWMax()
    {
      return $this->TmDOWMax;
    }

    /**
     * @param int $TmDOWMax
     * @return \FilippoToso\Travelport\Air\MAXType
     */
    public function setTmDOWMax($TmDOWMax)
    {
      $this->TmDOWMax = $TmDOWMax;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOccurMax()
    {
      return $this->NumOccurMax;
    }

    /**
     * @param int $NumOccurMax
     * @return \FilippoToso\Travelport\Air\MAXType
     */
    public function setNumOccurMax($NumOccurMax)
    {
      $this->NumOccurMax = $NumOccurMax;
      return $this;
    }

}
