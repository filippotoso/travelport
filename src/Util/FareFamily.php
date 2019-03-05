<?php

namespace FilippoToso\Travelport\Util;

class FareFamily
{

    /**
     * @var typeFlightSpec $FlightSpec
     */
    protected $FlightSpec = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeFareFamily $Label
     */
    protected $Label = null;

    /**
     * @var typeFareBasisCode $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeURVersion $Version
     */
    protected $Version = null;

    /**
     * @param typeFlightSpec $FlightSpec
     * @param typeCarrier $Carrier
     * @param typeFareFamily $Label
     * @param typeFareBasisCode $FareBasis
     * @param typeRef $Key
     * @param typeURVersion $Version
     */
    public function __construct($FlightSpec = null, $Carrier = null, $Label = null, $FareBasis = null, $Key = null, $Version = null)
    {
      $this->FlightSpec = $FlightSpec;
      $this->Carrier = $Carrier;
      $this->Label = $Label;
      $this->FareBasis = $FareBasis;
      $this->Key = $Key;
      $this->Version = $Version;
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
     * @return \FilippoToso\Travelport\Util\FareFamily
     */
    public function setFlightSpec($FlightSpec)
    {
      $this->FlightSpec = $FlightSpec;
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
     * @return \FilippoToso\Travelport\Util\FareFamily
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return typeFareFamily
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param typeFareFamily $Label
     * @return \FilippoToso\Travelport\Util\FareFamily
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
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
     * @return \FilippoToso\Travelport\Util\FareFamily
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
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
     * @return \FilippoToso\Travelport\Util\FareFamily
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeURVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeURVersion $Version
     * @return \FilippoToso\Travelport\Util\FareFamily
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
