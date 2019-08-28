<?php

namespace FilippoToso\Travelport\Util;

class OverrideCurrency
{

    /**
     * @var typeCurrency $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var typeCountry $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param typeCurrency $CurrencyCode
     * @param typeCountry $CountryCode
     */
    public function __construct($CurrencyCode = null, $CountryCode = null)
    {
      $this->CurrencyCode = $CurrencyCode;
      $this->CountryCode = $CountryCode;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param typeCurrency $CurrencyCode
     * @return \FilippoToso\Travelport\Util\OverrideCurrency
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
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
     * @return \FilippoToso\Travelport\Util\OverrideCurrency
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
