<?php

namespace FilippoToso\Travelport\UProfile;

class PaymentPhone
{

    /**
     * @var anonymous895 $Country
     */
    protected $Country = null;

    /**
     * @var anonymous896 $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var anonymous897 $LocalNumber
     */
    protected $LocalNumber = null;

    /**
     * @var anonymous898 $Extension
     */
    protected $Extension = null;

    /**
     * @var typeCityOrAirport $Location
     */
    protected $Location = null;

    /**
     * @param anonymous895 $Country
     * @param anonymous896 $AreaCode
     * @param anonymous897 $LocalNumber
     * @param anonymous898 $Extension
     * @param typeCityOrAirport $Location
     */
    public function __construct($Country = null, $AreaCode = null, $LocalNumber = null, $Extension = null, $Location = null)
    {
      $this->Country = $Country;
      $this->AreaCode = $AreaCode;
      $this->LocalNumber = $LocalNumber;
      $this->Extension = $Extension;
      $this->Location = $Location;
    }

    /**
     * @return anonymous895
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param anonymous895 $Country
     * @return \FilippoToso\Travelport\UProfile\PaymentPhone
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return anonymous896
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param anonymous896 $AreaCode
     * @return \FilippoToso\Travelport\UProfile\PaymentPhone
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return anonymous897
     */
    public function getLocalNumber()
    {
      return $this->LocalNumber;
    }

    /**
     * @param anonymous897 $LocalNumber
     * @return \FilippoToso\Travelport\UProfile\PaymentPhone
     */
    public function setLocalNumber($LocalNumber)
    {
      $this->LocalNumber = $LocalNumber;
      return $this;
    }

    /**
     * @return anonymous898
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param anonymous898 $Extension
     * @return \FilippoToso\Travelport\UProfile\PaymentPhone
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return typeCityOrAirport
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param typeCityOrAirport $Location
     * @return \FilippoToso\Travelport\UProfile\PaymentPhone
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
