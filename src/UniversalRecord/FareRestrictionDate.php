<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareRestrictionDate
{

    /**
     * @var typeFareDirectionality $Direction
     */
    protected $Direction = null;

    /**
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * @var anonymous597 $EndDateIndicator
     */
    protected $EndDateIndicator = null;

    /**
     * @param typeFareDirectionality $Direction
     * @param string $StartDate
     * @param string $EndDate
     * @param anonymous597 $EndDateIndicator
     */
    public function __construct($Direction = null, $StartDate = null, $EndDate = null, $EndDateIndicator = null)
    {
      $this->Direction = $Direction;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->EndDateIndicator = $EndDateIndicator;
    }

    /**
     * @return typeFareDirectionality
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param typeFareDirectionality $Direction
     * @return \FilippoToso\Travelport\UniversalRecord\FareRestrictionDate
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param string $StartDate
     * @return \FilippoToso\Travelport\UniversalRecord\FareRestrictionDate
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return \FilippoToso\Travelport\UniversalRecord\FareRestrictionDate
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return anonymous597
     */
    public function getEndDateIndicator()
    {
      return $this->EndDateIndicator;
    }

    /**
     * @param anonymous597 $EndDateIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\FareRestrictionDate
     */
    public function setEndDateIndicator($EndDateIndicator)
    {
      $this->EndDateIndicator = $EndDateIndicator;
      return $this;
    }

}
