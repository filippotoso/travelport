<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailAvailInfo
{

    /**
     * @var typeRailClass $ClassCode
     */
    protected $ClassCode = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var typeRailCabin $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @param typeRailClass $ClassCode
     * @param int $Quantity
     * @param typeRailCabin $CabinClass
     */
    public function __construct($ClassCode = null, $Quantity = null, $CabinClass = null)
    {
      $this->ClassCode = $ClassCode;
      $this->Quantity = $Quantity;
      $this->CabinClass = $CabinClass;
    }

    /**
     * @return typeRailClass
     */
    public function getClassCode()
    {
      return $this->ClassCode;
    }

    /**
     * @param typeRailClass $ClassCode
     * @return \FilippoToso\Travelport\UniversalRecord\RailAvailInfo
     */
    public function setClassCode($ClassCode)
    {
      $this->ClassCode = $ClassCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \FilippoToso\Travelport\UniversalRecord\RailAvailInfo
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return typeRailCabin
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param typeRailCabin $CabinClass
     * @return \FilippoToso\Travelport\UniversalRecord\RailAvailInfo
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

}
