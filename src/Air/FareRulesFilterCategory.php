<?php

namespace FilippoToso\Travelport\Air;

class FareRulesFilterCategory
{

    /**
     * @var anyType[] $CategoryCode
     */
    protected $CategoryCode = null;

    /**
     * @var string $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @param anyType[] $CategoryCode
     * @param string $FareInfoRef
     */
    public function __construct(array $CategoryCode = null, $FareInfoRef = null)
    {
      $this->CategoryCode = $CategoryCode;
      $this->FareInfoRef = $FareInfoRef;
    }

    /**
     * @return anyType[]
     */
    public function getCategoryCode()
    {
      return $this->CategoryCode;
    }

    /**
     * @param anyType[] $CategoryCode
     * @return \FilippoToso\Travelport\Air\FareRulesFilterCategory
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
     * @return \FilippoToso\Travelport\Air\FareRulesFilterCategory
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
