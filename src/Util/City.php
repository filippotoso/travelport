<?php

namespace FilippoToso\Travelport\Util;

class City
{

    /**
     * @var typeIATACode $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $StateCode
     */
    protected $StateCode = null;

    /**
     * @var typeCountry $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param typeIATACode $Code
     * @param string $Name
     * @param string $StateCode
     * @param typeCountry $CountryCode
     */
    public function __construct($Code = null, $Name = null, $StateCode = null, $CountryCode = null)
    {
      $this->Code = $Code;
      $this->Name = $Name;
      $this->StateCode = $StateCode;
      $this->CountryCode = $CountryCode;
    }

    /**
     * @return typeIATACode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeIATACode $Code
     * @return \FilippoToso\Travelport\Util\City
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
     * @return \FilippoToso\Travelport\Util\City
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateCode()
    {
      return $this->StateCode;
    }

    /**
     * @param string $StateCode
     * @return \FilippoToso\Travelport\Util\City
     */
    public function setStateCode($StateCode)
    {
      $this->StateCode = $StateCode;
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
     * @return \FilippoToso\Travelport\Util\City
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
