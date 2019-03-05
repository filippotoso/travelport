<?php

namespace FilippoToso\Travelport\Hotel;

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
    public function __construct($IsPackage = null)
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
     * @return \FilippoToso\Travelport\Hotel\RoomCapacity
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
     * @return \FilippoToso\Travelport\Hotel\RoomCapacity
     */
    public function setIsPackage($IsPackage)
    {
      $this->IsPackage = $IsPackage;
      return $this;
    }

}
