<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RoomCapacity
{

    /**
     * @var positiveInteger[] $Capacity
     */
    protected $Capacity = null;

    /**
     * @var boolean $IsPackage
     */
    protected $IsPackage = null;

    /**
     * @param boolean $IsPackage
     */
    public function __construct($IsPackage)
    {
      $this->IsPackage = $IsPackage;
    }

    /**
     * @return positiveInteger[]
     */
    public function getCapacity()
    {
      return $this->Capacity;
    }

    /**
     * @param positiveInteger[] $Capacity
     * @return \FilippoToso\Travelport\UniversalRecord\RoomCapacity
     */
    public function setCapacity(array $Capacity = null)
    {
      $this->Capacity = $Capacity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPackage()
    {
      return $this->IsPackage;
    }

    /**
     * @param boolean $IsPackage
     * @return \FilippoToso\Travelport\UniversalRecord\RoomCapacity
     */
    public function setIsPackage($IsPackage)
    {
      $this->IsPackage = $IsPackage;
      return $this;
    }

}
