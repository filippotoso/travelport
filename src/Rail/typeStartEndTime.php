<?php

namespace FilippoToso\Travelport\Rail;

class typeStartEndTime
{

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var boolean $RequirementPassed
     */
    protected $RequirementPassed = null;

    /**
     * @var boolean $Mon
     */
    protected $Mon = null;

    /**
     * @var boolean $Tue
     */
    protected $Tue = null;

    /**
     * @var boolean $Wed
     */
    protected $Wed = null;

    /**
     * @var boolean $Thu
     */
    protected $Thu = null;

    /**
     * @var boolean $Fri
     */
    protected $Fri = null;

    /**
     * @var boolean $Sat
     */
    protected $Sat = null;

    /**
     * @var boolean $Sun
     */
    protected $Sun = null;

    /**
     * @param string $Time
     * @param boolean $RequirementPassed
     * @param boolean $Mon
     * @param boolean $Tue
     * @param boolean $Wed
     * @param boolean $Thu
     * @param boolean $Fri
     * @param boolean $Sat
     * @param boolean $Sun
     */
    public function __construct($Time = null, $RequirementPassed = null, $Mon = null, $Tue = null, $Wed = null, $Thu = null, $Fri = null, $Sat = null, $Sun = null)
    {
      $this->Time = $Time;
      $this->RequirementPassed = $RequirementPassed;
      $this->Mon = $Mon;
      $this->Tue = $Tue;
      $this->Wed = $Wed;
      $this->Thu = $Thu;
      $this->Fri = $Fri;
      $this->Sat = $Sat;
      $this->Sun = $Sun;
    }

    /**
     * @return string
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param string $Time
     * @return \FilippoToso\Travelport\Rail\typeStartEndTime
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequirementPassed()
    {
      return $this->RequirementPassed;
    }

    /**
     * @param boolean $RequirementPassed
     * @return \FilippoToso\Travelport\Rail\typeStartEndTime
     */
    public function setRequirementPassed($RequirementPassed)
    {
      $this->RequirementPassed = $RequirementPassed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMon()
    {
      return $this->Mon;
    }

    /**
     * @param boolean $Mon
     * @return \FilippoToso\Travelport\Rail\typeStartEndTime
     */
    public function setMon($Mon)
    {
      $this->Mon = $Mon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTue()
    {
      return $this->Tue;
    }

    /**
     * @param boolean $Tue
     * @return \FilippoToso\Travelport\Rail\typeStartEndTime
     */
    public function setTue($Tue)
    {
      $this->Tue = $Tue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWed()
    {
      return $this->Wed;
    }

    /**
     * @param boolean $Wed
     * @return \FilippoToso\Travelport\Rail\typeStartEndTime
     */
    public function setWed($Wed)
    {
      $this->Wed = $Wed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThu()
    {
      return $this->Thu;
    }

    /**
     * @param boolean $Thu
     * @return \FilippoToso\Travelport\Rail\typeStartEndTime
     */
    public function setThu($Thu)
    {
      $this->Thu = $Thu;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFri()
    {
      return $this->Fri;
    }

    /**
     * @param boolean $Fri
     * @return \FilippoToso\Travelport\Rail\typeStartEndTime
     */
    public function setFri($Fri)
    {
      $this->Fri = $Fri;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSat()
    {
      return $this->Sat;
    }

    /**
     * @param boolean $Sat
     * @return \FilippoToso\Travelport\Rail\typeStartEndTime
     */
    public function setSat($Sat)
    {
      $this->Sat = $Sat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSun()
    {
      return $this->Sun;
    }

    /**
     * @param boolean $Sun
     * @return \FilippoToso\Travelport\Rail\typeStartEndTime
     */
    public function setSun($Sun)
    {
      $this->Sun = $Sun;
      return $this;
    }

}
