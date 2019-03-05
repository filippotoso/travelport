<?php

namespace FilippoToso\Travelport\Util;

class Airport
{

    /**
     * @var typeAirport $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var typeIATACode $CityCode
     */
    protected $CityCode = null;

    /**
     * @var typeCountry $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param typeAirport $Code
     * @param string $Name
     * @param typeIATACode $CityCode
     * @param typeCountry $CountryCode
     */
    public function __construct($Code = null, $Name = null, $CityCode = null, $CountryCode = null)
    {
      $this->Code = $Code;
      $this->Name = $Name;
      $this->CityCode = $CityCode;
      $this->CountryCode = $CountryCode;
    }

    /**
     * @return typeAirport
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeAirport $Code
     * @return \FilippoToso\Travelport\Util\Airport
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FilippoToso\Travelport\Util\Airport
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getCityCode()
    {
      return $this->CityCode;
    }

    /**
     * @param typeIATACode $CityCode
     * @return \FilippoToso\Travelport\Util\Airport
     */
    public function setCityCode($CityCode)
    {
      $this->CityCode = $CityCode;
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
     * @return \FilippoToso\Travelport\Util\Airport
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
