<?php

namespace FilippoToso\Travelport\UProfile;

class typeSearchElectronicAddress
{

    /**
     * @var typeWildcard $Address
     */
    protected $Address = null;

    /**
     * @var typeEmailType $Type
     */
    protected $Type = null;

    /**
     * @var typeContactPurpose $Purpose
     */
    protected $Purpose = null;

    /**
     * @param typeWildcard $Address
     * @param typeEmailType $Type
     * @param typeContactPurpose $Purpose
     */
    public function __construct($Address = null, $Type = null, $Purpose = null)
    {
      $this->Address = $Address;
      $this->Type = $Type;
      $this->Purpose = $Purpose;
    }

    /**
     * @return typeWildcard
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeWildcard $Address
     * @return \FilippoToso\Travelport\UProfile\typeSearchElectronicAddress
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return typeEmailType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeEmailType $Type
     * @return \FilippoToso\Travelport\UProfile\typeSearchElectronicAddress
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeContactPurpose
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param typeContactPurpose $Purpose
     * @return \FilippoToso\Travelport\UProfile\typeSearchElectronicAddress
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
    }

}
