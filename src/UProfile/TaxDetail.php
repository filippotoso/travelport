<?php

namespace FilippoToso\Travelport\UProfile;

class TaxDetail
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typeAirport $OriginAirport
     */
    protected $OriginAirport = null;

    /**
     * @var typeAirport $DestinationAirport
     */
    protected $DestinationAirport = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var typeRef $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @param typeMoney $Amount
     * @param typeAirport $OriginAirport
     * @param typeAirport $DestinationAirport
     * @param string $CountryCode
     * @param typeRef $FareInfoRef
     */
    public function __construct($Amount = null, $OriginAirport = null, $DestinationAirport = null, $CountryCode = null, $FareInfoRef = null)
    {
      $this->Amount = $Amount;
      $this->OriginAirport = $OriginAirport;
      $this->DestinationAirport = $DestinationAirport;
      $this->CountryCode = $CountryCode;
      $this->FareInfoRef = $FareInfoRef;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\UProfile\TaxDetail
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getOriginAirport()
    {
      return $this->OriginAirport;
    }

    /**
     * @param typeAirport $OriginAirport
     * @return \FilippoToso\Travelport\UProfile\TaxDetail
     */
    public function setOriginAirport($OriginAirport)
    {
      $this->OriginAirport = $OriginAirport;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getDestinationAirport()
    {
      return $this->DestinationAirport;
    }

    /**
     * @param typeAirport $DestinationAirport
     * @return \FilippoToso\Travelport\UProfile\TaxDetail
     */
    public function setDestinationAirport($DestinationAirport)
    {
      $this->DestinationAirport = $DestinationAirport;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \FilippoToso\Travelport\UProfile\TaxDetail
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param typeRef $FareInfoRef
     * @return \FilippoToso\Travelport\UProfile\TaxDetail
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
