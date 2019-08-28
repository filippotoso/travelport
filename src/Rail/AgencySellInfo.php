<?php

namespace FilippoToso\Travelport\Rail;

class AgencySellInfo
{

    /**
     * @var typeIATA $IataCode
     */
    protected $IataCode = null;

    /**
     * @var typeCountry $Country
     */
    protected $Country = null;

    /**
     * @var typeCurrency $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var typeIATACode $CityCode
     */
    protected $CityCode = null;

    /**
     * @param typeIATA $IataCode
     * @param typeCountry $Country
     * @param typeCurrency $CurrencyCode
     * @param typeProviderCode $ProviderCode
     * @param typePCC $PseudoCityCode
     * @param typeIATACode $CityCode
     */
    public function __construct($IataCode = null, $Country = null, $CurrencyCode = null, $ProviderCode = null, $PseudoCityCode = null, $CityCode = null)
    {
      $this->IataCode = $IataCode;
      $this->Country = $Country;
      $this->CurrencyCode = $CurrencyCode;
      $this->ProviderCode = $ProviderCode;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->CityCode = $CityCode;
    }

    /**
     * @return typeIATA
     */
    public function getIataCode()
    {
      return $this->IataCode;
    }

    /**
     * @param typeIATA $IataCode
     * @return \FilippoToso\Travelport\Rail\AgencySellInfo
     */
    public function setIataCode($IataCode)
    {
      $this->IataCode = $IataCode;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param typeCountry $Country
     * @return \FilippoToso\Travelport\Rail\AgencySellInfo
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\AgencySellInfo
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Rail\AgencySellInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\Rail\AgencySellInfo
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
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
     * @return \FilippoToso\Travelport\Rail\AgencySellInfo
     */
    public function setCityCode($CityCode)
    {
      $this->CityCode = $CityCode;
      return $this;
    }

}
