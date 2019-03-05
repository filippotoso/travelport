<?php

namespace FilippoToso\Travelport\Util;

class FareRestriction
{

    /**
     * @var FareRestrictionDaysOfWeek $FareRestrictionDaysOfWeek
     */
    protected $FareRestrictionDaysOfWeek = null;

    /**
     * @var FareRestrictionDate $FareRestrictionDate
     */
    protected $FareRestrictionDate = null;

    /**
     * @var FareRestrictionSaleDate $FareRestrictionSaleDate
     */
    protected $FareRestrictionSaleDate = null;

    /**
     * @var typeFareRestrictionType $FareRestrictiontype
     */
    protected $FareRestrictiontype = null;

    /**
     * @param FareRestrictionDaysOfWeek $FareRestrictionDaysOfWeek
     * @param FareRestrictionDate $FareRestrictionDate
     * @param FareRestrictionSaleDate $FareRestrictionSaleDate
     * @param typeFareRestrictionType $FareRestrictiontype
     */
    public function __construct($FareRestrictionDaysOfWeek = null, $FareRestrictionDate = null, $FareRestrictionSaleDate = null, $FareRestrictiontype = null)
    {
      $this->FareRestrictionDaysOfWeek = $FareRestrictionDaysOfWeek;
      $this->FareRestrictionDate = $FareRestrictionDate;
      $this->FareRestrictionSaleDate = $FareRestrictionSaleDate;
      $this->FareRestrictiontype = $FareRestrictiontype;
    }

    /**
     * @return FareRestrictionDaysOfWeek
     */
    public function getFareRestrictionDaysOfWeek()
    {
      return $this->FareRestrictionDaysOfWeek;
    }

    /**
     * @param FareRestrictionDaysOfWeek $FareRestrictionDaysOfWeek
     * @return \FilippoToso\Travelport\Util\FareRestriction
     */
    public function setFareRestrictionDaysOfWeek($FareRestrictionDaysOfWeek)
    {
      $this->FareRestrictionDaysOfWeek = $FareRestrictionDaysOfWeek;
      return $this;
    }

    /**
     * @return FareRestrictionDate
     */
    public function getFareRestrictionDate()
    {
      return $this->FareRestrictionDate;
    }

    /**
     * @param FareRestrictionDate $FareRestrictionDate
     * @return \FilippoToso\Travelport\Util\FareRestriction
     */
    public function setFareRestrictionDate($FareRestrictionDate)
    {
      $this->FareRestrictionDate = $FareRestrictionDate;
      return $this;
    }

    /**
     * @return FareRestrictionSaleDate
     */
    public function getFareRestrictionSaleDate()
    {
      return $this->FareRestrictionSaleDate;
    }

    /**
     * @param FareRestrictionSaleDate $FareRestrictionSaleDate
     * @return \FilippoToso\Travelport\Util\FareRestriction
     */
    public function setFareRestrictionSaleDate($FareRestrictionSaleDate)
    {
      $this->FareRestrictionSaleDate = $FareRestrictionSaleDate;
      return $this;
    }

    /**
     * @return typeFareRestrictionType
     */
    public function getFareRestrictiontype()
    {
      return $this->FareRestrictiontype;
    }

    /**
     * @param typeFareRestrictionType $FareRestrictiontype
     * @return \FilippoToso\Travelport\Util\FareRestriction
     */
    public function setFareRestrictiontype($FareRestrictiontype)
    {
      $this->FareRestrictiontype = $FareRestrictiontype;
      return $this;
    }

}
