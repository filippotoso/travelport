<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FlightTimeTableCriteria
{

    /**
     * @var GeneralTimeTable $GeneralTimeTable
     */
    protected $GeneralTimeTable = null;

    /**
     * @var SpecificTimeTable $SpecificTimeTable
     */
    protected $SpecificTimeTable = null;

    /**
     * @param GeneralTimeTable $GeneralTimeTable
     * @param SpecificTimeTable $SpecificTimeTable
     */
    public function __construct($GeneralTimeTable = null, $SpecificTimeTable = null)
    {
      $this->GeneralTimeTable = $GeneralTimeTable;
      $this->SpecificTimeTable = $SpecificTimeTable;
    }

    /**
     * @return GeneralTimeTable
     */
    public function getGeneralTimeTable()
    {
      return $this->GeneralTimeTable;
    }

    /**
     * @param GeneralTimeTable $GeneralTimeTable
     * @return \FilippoToso\Travelport\UniversalRecord\FlightTimeTableCriteria
     */
    public function setGeneralTimeTable($GeneralTimeTable)
    {
      $this->GeneralTimeTable = $GeneralTimeTable;
      return $this;
    }

    /**
     * @return SpecificTimeTable
     */
    public function getSpecificTimeTable()
    {
      return $this->SpecificTimeTable;
    }

    /**
     * @param SpecificTimeTable $SpecificTimeTable
     * @return \FilippoToso\Travelport\UniversalRecord\FlightTimeTableCriteria
     */
    public function setSpecificTimeTable($SpecificTimeTable)
    {
      $this->SpecificTimeTable = $SpecificTimeTable;
      return $this;
    }

}
