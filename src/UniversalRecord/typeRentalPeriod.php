<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeRentalPeriod
{

    /**
     * @var anonymous1128 $RentalUnit
     */
    protected $RentalUnit = null;

    /**
     * @var int $Length
     */
    protected $Length = null;

    /**
     * @var boolean $RequirementPassed
     */
    protected $RequirementPassed = null;

    /**
     * @param anonymous1128 $RentalUnit
     * @param int $Length
     * @param boolean $RequirementPassed
     */
    public function __construct($RentalUnit = null, $Length = null, $RequirementPassed = null)
    {
      $this->RentalUnit = $RentalUnit;
      $this->Length = $Length;
      $this->RequirementPassed = $RequirementPassed;
    }

    /**
     * @return anonymous1128
     */
    public function getRentalUnit()
    {
      return $this->RentalUnit;
    }

    /**
     * @param anonymous1128 $RentalUnit
     * @return \FilippoToso\Travelport\UniversalRecord\typeRentalPeriod
     */
    public function setRentalUnit($RentalUnit)
    {
      $this->RentalUnit = $RentalUnit;
      return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param int $Length
     * @return \FilippoToso\Travelport\UniversalRecord\typeRentalPeriod
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeRentalPeriod
     */
    public function setRequirementPassed($RequirementPassed)
    {
      $this->RequirementPassed = $RequirementPassed;
      return $this;
    }

}
