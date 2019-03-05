<?php

namespace FilippoToso\Travelport\Util;

class AirUpsellQualify
{

    /**
     * @var typeTimeSpec $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var typeFlightSpec $FlightSpec
     */
    protected $FlightSpec = null;

    /**
     * @var typeFlightSpec $OperatingFlightSpec
     */
    protected $OperatingFlightSpec = null;

    /**
     * @var AccountCode $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeDate $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var typeDate $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @var typeCarrier $OperatingCarrier
     */
    protected $OperatingCarrier = null;

    /**
     * @var typeRef $OfferRef
     */
    protected $OfferRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeFareBasisCode $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeFlightSpec $FlightSpec
     * @param typeFlightSpec $OperatingFlightSpec
     * @param AccountCode $AccountCode
     * @param typeCarrier $Carrier
     * @param typeDate $EffectiveDate
     * @param typeDate $ExpirationDate
     * @param typeProviderCode $ProviderCode
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param typeClassOfService $ClassOfService
     * @param typeCarrier $OperatingCarrier
     * @param typeRef $OfferRef
     * @param typeRef $Key
     * @param typeFareBasisCode $FareBasis
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($FlightSpec = null, $OperatingFlightSpec = null, $AccountCode = null, $Carrier = null, $EffectiveDate = null, $ExpirationDate = null, $ProviderCode = null, $Origin = null, $Destination = null, $ClassOfService = null, $OperatingCarrier = null, $OfferRef = null, $Key = null, $FareBasis = null, $ElStat = null, $KeyOverride = null)
    {
      $this->FlightSpec = $FlightSpec;
      $this->OperatingFlightSpec = $OperatingFlightSpec;
      $this->AccountCode = $AccountCode;
      $this->Carrier = $Carrier;
      $this->EffectiveDate = $EffectiveDate;
      $this->ExpirationDate = $ExpirationDate;
      $this->ProviderCode = $ProviderCode;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->ClassOfService = $ClassOfService;
      $this->OperatingCarrier = $OperatingCarrier;
      $this->OfferRef = $OfferRef;
      $this->Key = $Key;
      $this->FareBasis = $FareBasis;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeTimeSpec
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param typeTimeSpec $DepartureTime
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return typeFlightSpec
     */
    public function getFlightSpec()
    {
      return $this->FlightSpec;
    }

    /**
     * @param typeFlightSpec $FlightSpec
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setFlightSpec($FlightSpec)
    {
      $this->FlightSpec = $FlightSpec;
      return $this;
    }

    /**
     * @return typeFlightSpec
     */
    public function getOperatingFlightSpec()
    {
      return $this->OperatingFlightSpec;
    }

    /**
     * @param typeFlightSpec $OperatingFlightSpec
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setOperatingFlightSpec($OperatingFlightSpec)
    {
      $this->OperatingFlightSpec = $OperatingFlightSpec;
      return $this;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param typeDate $EffectiveDate
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param typeDate $ExpirationDate
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
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
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return typeClassOfService
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param typeClassOfService $ClassOfService
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getOperatingCarrier()
    {
      return $this->OperatingCarrier;
    }

    /**
     * @param typeCarrier $OperatingCarrier
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setOperatingCarrier($OperatingCarrier)
    {
      $this->OperatingCarrier = $OperatingCarrier;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getOfferRef()
    {
      return $this->OfferRef;
    }

    /**
     * @param typeRef $OfferRef
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setOfferRef($OfferRef)
    {
      $this->OfferRef = $OfferRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeFareBasisCode
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param typeFareBasisCode $FareBasis
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Util\AirUpsellQualify
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
