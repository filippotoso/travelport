<?php

namespace FilippoToso\Travelport\Rail;

class EnettVan
{

    /**
     * @var typeIntegerPercentage $MinPercentage
     */
    protected $MinPercentage = null;

    /**
     * @var typeIntegerPercentage $MaxPercentage
     */
    protected $MaxPercentage = null;

    /**
     * @var typeDurationYearInDays $ExpiryDays
     */
    protected $ExpiryDays = null;

    /**
     * @var boolean $MultiUse
     */
    protected $MultiUse = null;

    /**
     * @param typeIntegerPercentage $MinPercentage
     * @param typeIntegerPercentage $MaxPercentage
     * @param typeDurationYearInDays $ExpiryDays
     * @param boolean $MultiUse
     */
    public function __construct($MinPercentage = null, $MaxPercentage = null, $ExpiryDays = null, $MultiUse = null)
    {
      $this->MinPercentage = $MinPercentage;
      $this->MaxPercentage = $MaxPercentage;
      $this->ExpiryDays = $ExpiryDays;
      $this->MultiUse = $MultiUse;
    }

    /**
     * @return typeIntegerPercentage
     */
    public function getMinPercentage()
    {
      return $this->MinPercentage;
    }

    /**
     * @param typeIntegerPercentage $MinPercentage
     * @return \FilippoToso\Travelport\Rail\EnettVan
     */
    public function setMinPercentage($MinPercentage)
    {
      $this->MinPercentage = $MinPercentage;
      return $this;
    }

    /**
     * @return typeIntegerPercentage
     */
    public function getMaxPercentage()
    {
      return $this->MaxPercentage;
    }

    /**
     * @param typeIntegerPercentage $MaxPercentage
     * @return \FilippoToso\Travelport\Rail\EnettVan
     */
    public function setMaxPercentage($MaxPercentage)
    {
      $this->MaxPercentage = $MaxPercentage;
      return $this;
    }

    /**
     * @return typeDurationYearInDays
     */
    public function getExpiryDays()
    {
      return $this->ExpiryDays;
    }

    /**
     * @param typeDurationYearInDays $ExpiryDays
     * @return \FilippoToso\Travelport\Rail\EnettVan
     */
    public function setExpiryDays($ExpiryDays)
    {
      $this->ExpiryDays = $ExpiryDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMultiUse()
    {
      return $this->MultiUse;
    }

    /**
     * @param boolean $MultiUse
     * @return \FilippoToso\Travelport\Rail\EnettVan
     */
    public function setMultiUse($MultiUse)
    {
      $this->MultiUse = $MultiUse;
      return $this;
    }

}
