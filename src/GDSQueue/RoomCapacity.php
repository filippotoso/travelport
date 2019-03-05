<?php

namespace FilippoToso\Travelport\GDSQueue;

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
     * @return \FilippoToso\Travelport\GDSQueue\RoomCapacity
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
     * @return \FilippoToso\Travelport\GDSQueue\RoomCapacity
     */
    public function setIsPackage($IsPackage)
    {
      $this->IsPackage = $IsPackage;
      return $this;
    }

}
