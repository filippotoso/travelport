<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareRestrictionSaleDate
{

    /**
     * @var date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var date $EndDate
     */
    protected $EndDate = null;

    /**
     * @param date $StartDate
     * @param date $EndDate
     */
    public function __construct($StartDate, $EndDate)
    {
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return \FilippoToso\Travelport\UniversalRecord\FareRestrictionSaleDate
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param date $EndDate
     * @return \FilippoToso\Travelport\UniversalRecord\FareRestrictionSaleDate
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

}
