<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Package
{

    /**
     * @var StringLength1to30 $Name
     */
    protected $Name = null;

    /**
     * @var anonymous1359 $Identifier
     */
    protected $Identifier = null;

    /**
     * @var int $PassengerCount
     */
    protected $PassengerCount = null;

    /**
     * @var StringLength1to14 $PackageIdentifier
     */
    protected $PackageIdentifier = null;

    /**
     * @param StringLength1to30 $Name
     * @param anonymous1359 $Identifier
     * @param int $PassengerCount
     * @param StringLength1to14 $PackageIdentifier
     */
    public function __construct($Name = null, $Identifier = null, $PassengerCount = null, $PackageIdentifier = null)
    {
      $this->Name = $Name;
      $this->Identifier = $Identifier;
      $this->PassengerCount = $PassengerCount;
      $this->PackageIdentifier = $PackageIdentifier;
    }

    /**
     * @return StringLength1to30
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringLength1to30 $Name
     * @return \FilippoToso\Travelport\UniversalRecord\Package
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anonymous1359
     */
    public function getIdentifier()
    {
      return $this->Identifier;
    }

    /**
     * @param anonymous1359 $Identifier
     * @return \FilippoToso\Travelport\UniversalRecord\Package
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return int
     */
    public function getPassengerCount()
    {
      return $this->PassengerCount;
    }

    /**
     * @param int $PassengerCount
     * @return \FilippoToso\Travelport\UniversalRecord\Package
     */
    public function setPassengerCount($PassengerCount)
    {
      $this->PassengerCount = $PassengerCount;
      return $this;
    }

    /**
     * @return StringLength1to14
     */
    public function getPackageIdentifier()
    {
      return $this->PackageIdentifier;
    }

    /**
     * @param StringLength1to14 $PackageIdentifier
     * @return \FilippoToso\Travelport\UniversalRecord\Package
     */
    public function setPackageIdentifier($PackageIdentifier)
    {
      $this->PackageIdentifier = $PackageIdentifier;
      return $this;
    }

}
