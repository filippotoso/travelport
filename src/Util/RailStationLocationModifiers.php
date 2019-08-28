<?php

namespace FilippoToso\Travelport\Util;

class RailStationLocationModifiers
{

    /**
     * @var RailLocation $RailLocation
     */
    protected $RailLocation = null;

    /**
     * @var typeCountry $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var typeSupplierCode $Distributor
     */
    protected $Distributor = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @param RailLocation $RailLocation
     * @param typeCountry $CountryCode
     * @param typeSupplierCode $Distributor
     * @param string $Description
     * @param boolean $Active
     */
    public function __construct($RailLocation = null, $CountryCode = null, $Distributor = null, $Description = null, $Active = null)
    {
      $this->RailLocation = $RailLocation;
      $this->CountryCode = $CountryCode;
      $this->Distributor = $Distributor;
      $this->Description = $Description;
      $this->Active = $Active;
    }

    /**
     * @return RailLocation
     */
    public function getRailLocation()
    {
      return $this->RailLocation;
    }

    /**
     * @param RailLocation $RailLocation
     * @return \FilippoToso\Travelport\Util\RailStationLocationModifiers
     */
    public function setRailLocation($RailLocation)
    {
      $this->RailLocation = $RailLocation;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param typeCountry $CountryCode
     * @return \FilippoToso\Travelport\Util\RailStationLocationModifiers
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getDistributor()
    {
      return $this->Distributor;
    }

    /**
     * @param typeSupplierCode $Distributor
     * @return \FilippoToso\Travelport\Util\RailStationLocationModifiers
     */
    public function setDistributor($Distributor)
    {
      $this->Distributor = $Distributor;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Util\RailStationLocationModifiers
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \FilippoToso\Travelport\Util\RailStationLocationModifiers
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

}
