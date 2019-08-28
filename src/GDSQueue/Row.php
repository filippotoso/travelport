<?php

namespace FilippoToso\Travelport\GDSQueue;

class Row
{

    /**
     * @var Facility $Facility
     */
    protected $Facility = null;

    /**
     * @var Characteristic $Characteristic
     */
    protected $Characteristic = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var typeRef $SearchTravelerRef
     */
    protected $SearchTravelerRef = null;

    /**
     * @param Facility $Facility
     * @param Characteristic $Characteristic
     * @param int $Number
     * @param typeRef $SearchTravelerRef
     */
    public function __construct($Facility = null, $Characteristic = null, $Number = null, $SearchTravelerRef = null)
    {
      $this->Facility = $Facility;
      $this->Characteristic = $Characteristic;
      $this->Number = $Number;
      $this->SearchTravelerRef = $SearchTravelerRef;
    }

    /**
     * @return Facility
     */
    public function getFacility()
    {
      return $this->Facility;
    }

    /**
     * @param Facility $Facility
     * @return \FilippoToso\Travelport\GDSQueue\Row
     */
    public function setFacility($Facility)
    {
      $this->Facility = $Facility;
      return $this;
    }

    /**
     * @return Characteristic
     */
    public function getCharacteristic()
    {
      return $this->Characteristic;
    }

    /**
     * @param Characteristic $Characteristic
     * @return \FilippoToso\Travelport\GDSQueue\Row
     */
    public function setCharacteristic($Characteristic)
    {
      $this->Characteristic = $Characteristic;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \FilippoToso\Travelport\GDSQueue\Row
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSearchTravelerRef()
    {
      return $this->SearchTravelerRef;
    }

    /**
     * @param typeRef $SearchTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\Row
     */
    public function setSearchTravelerRef($SearchTravelerRef)
    {
      $this->SearchTravelerRef = $SearchTravelerRef;
      return $this;
    }

}
