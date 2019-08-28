<?php

namespace FilippoToso\Travelport\Rail;

class FareRulesFilterCategory
{

    /**
     * @var string[] $CategoryCode
     */
    protected $CategoryCode = null;

    /**
     * @var string $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @param string[] $CategoryCode
     * @param string $FareInfoRef
     */
    public function __construct(array $CategoryCode = null, $FareInfoRef = null)
    {
      $this->CategoryCode = $CategoryCode;
      $this->FareInfoRef = $FareInfoRef;
    }

    /**
     * @return string[]
     */
    public function getCategoryCode()
    {
      return $this->CategoryCode;
    }

    /**
     * @param string[] $CategoryCode
     * @return \FilippoToso\Travelport\Rail\FareRulesFilterCategory
     */
    public function setCategoryCode(array $CategoryCode)
    {
      $this->CategoryCode = $CategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param string $FareInfoRef
     * @return \FilippoToso\Travelport\Rail\FareRulesFilterCategory
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
