<?php

namespace FilippoToso\Travelport\Util;

class Country
{

    /**
     * @var typeCountry $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ExtendedCode
     */
    protected $ExtendedCode = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var typeIATACode $IataCode
     */
    protected $IataCode = null;

    /**
     * @var string $Continent
     */
    protected $Continent = null;

    /**
     * @param typeCountry $Code
     * @param string $Name
     * @param string $ExtendedCode
     * @param string $CurrencyCode
     * @param typeIATACode $IataCode
     * @param string $Continent
     */
    public function __construct($Code = null, $Name = null, $ExtendedCode = null, $CurrencyCode = null, $IataCode = null, $Continent = null)
    {
      $this->Code = $Code;
      $this->Name = $Name;
      $this->ExtendedCode = $ExtendedCode;
      $this->CurrencyCode = $CurrencyCode;
      $this->IataCode = $IataCode;
      $this->Continent = $Continent;
    }

    /**
     * @return typeCountry
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeCountry $Code
     * @return \FilippoToso\Travelport\Util\Country
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
     * @return \FilippoToso\Travelport\Util\Country
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtendedCode()
    {
      return $this->ExtendedCode;
    }

    /**
     * @param string $ExtendedCode
     * @return \FilippoToso\Travelport\Util\Country
     */
    public function setExtendedCode($ExtendedCode)
    {
      $this->ExtendedCode = $ExtendedCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \FilippoToso\Travelport\Util\Country
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getIataCode()
    {
      return $this->IataCode;
    }

    /**
     * @param typeIATACode $IataCode
     * @return \FilippoToso\Travelport\Util\Country
     */
    public function setIataCode($IataCode)
    {
      $this->IataCode = $IataCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getContinent()
    {
      return $this->Continent;
    }

    /**
     * @param string $Continent
     * @return \FilippoToso\Travelport\Util\Country
     */
    public function setContinent($Continent)
    {
      $this->Continent = $Continent;
      return $this;
    }

}
