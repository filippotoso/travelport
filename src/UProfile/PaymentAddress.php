<?php

namespace FilippoToso\Travelport\UProfile;

class PaymentAddress
{

    /**
     * @var StringLength1to128 $AddressLine
     */
    protected $AddressLine = null;

    /**
     * @var anonymous583 $Postal
     */
    protected $Postal = null;

    /**
     * @var typeCountry $Country
     */
    protected $Country = null;

    /**
     * @var anonymous584 $State
     */
    protected $State = null;

    /**
     * @var StringLength1to128 $OtherStateProvince
     */
    protected $OtherStateProvince = null;

    /**
     * @var StringLength1to255 $City
     */
    protected $City = null;

    /**
     * @param StringLength1to128 $AddressLine
     * @param anonymous583 $Postal
     * @param typeCountry $Country
     * @param anonymous584 $State
     * @param StringLength1to128 $OtherStateProvince
     * @param StringLength1to255 $City
     */
    public function __construct($AddressLine = null, $Postal = null, $Country = null, $State = null, $OtherStateProvince = null, $City = null)
    {
      $this->AddressLine = $AddressLine;
      $this->Postal = $Postal;
      $this->Country = $Country;
      $this->State = $State;
      $this->OtherStateProvince = $OtherStateProvince;
      $this->City = $City;
    }

    /**
     * @return StringLength1to128
     */
    public function getAddressLine()
    {
      return $this->AddressLine;
    }

    /**
     * @param StringLength1to128 $AddressLine
     * @return \FilippoToso\Travelport\UProfile\PaymentAddress
     */
    public function setAddressLine($AddressLine)
    {
      $this->AddressLine = $AddressLine;
      return $this;
    }

    /**
     * @return anonymous583
     */
    public function getPostal()
    {
      return $this->Postal;
    }

    /**
     * @param anonymous583 $Postal
     * @return \FilippoToso\Travelport\UProfile\PaymentAddress
     */
    public function setPostal($Postal)
    {
      $this->Postal = $Postal;
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
     * @return \FilippoToso\Travelport\UProfile\PaymentAddress
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return anonymous584
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param anonymous584 $State
     * @return \FilippoToso\Travelport\UProfile\PaymentAddress
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getOtherStateProvince()
    {
      return $this->OtherStateProvince;
    }

    /**
     * @param StringLength1to128 $OtherStateProvince
     * @return \FilippoToso\Travelport\UProfile\PaymentAddress
     */
    public function setOtherStateProvince($OtherStateProvince)
    {
      $this->OtherStateProvince = $OtherStateProvince;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param StringLength1to255 $City
     * @return \FilippoToso\Travelport\UProfile\PaymentAddress
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

}
