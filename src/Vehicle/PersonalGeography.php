<?php

namespace FilippoToso\Travelport\Vehicle;

class PersonalGeography
{

    /**
     * @var typeCountry $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var typeState $StateProvinceCode
     */
    protected $StateProvinceCode = null;

    /**
     * @var typeCity $CityCode
     */
    protected $CityCode = null;

    
    public function __construct()
    {
    
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
     * @return \FilippoToso\Travelport\Vehicle\PersonalGeography
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return typeState
     */
    public function getStateProvinceCode()
    {
      return $this->StateProvinceCode;
    }

    /**
     * @param typeState $StateProvinceCode
     * @return \FilippoToso\Travelport\Vehicle\PersonalGeography
     */
    public function setStateProvinceCode($StateProvinceCode)
    {
      $this->StateProvinceCode = $StateProvinceCode;
      return $this;
    }

    /**
     * @return typeCity
     */
    public function getCityCode()
    {
      return $this->CityCode;
    }

    /**
     * @param typeCity $CityCode
     * @return \FilippoToso\Travelport\Vehicle\PersonalGeography
     */
    public function setCityCode($CityCode)
    {
      $this->CityCode = $CityCode;
      return $this;
    }

}
