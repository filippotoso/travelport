<?php

namespace FilippoToso\Travelport\UProfile;

class typeAddress extends typeKeyElement
{

    /**
     * @var StringLength1to128 $AddressLine
     */
    protected $AddressLine = null;

    /**
     * @var anonymous802 $City
     */
    protected $City = null;

    /**
     * @var anonymous803 $State
     */
    protected $State = null;

    /**
     * @var StringLength1to128 $OtherStateProvince
     */
    protected $OtherStateProvince = null;

    /**
     * @var typeCountry $Country
     */
    protected $Country = null;

    /**
     * @var anonymous804 $Postal
     */
    protected $Postal = null;

    /**
     * @var StringLength1to128 $Type
     */
    protected $Type = null;

    /**
     * @param typeRef $Key
     * @param StringLength1to128 $AddressLine
     * @param anonymous802 $City
     * @param anonymous803 $State
     * @param StringLength1to128 $OtherStateProvince
     * @param typeCountry $Country
     * @param anonymous804 $Postal
     * @param StringLength1to128 $Type
     */
    public function __construct($Key = null, $AddressLine = null, $City = null, $State = null, $OtherStateProvince = null, $Country = null, $Postal = null, $Type = null)
    {
      parent::__construct($Key);
      $this->AddressLine = $AddressLine;
      $this->City = $City;
      $this->State = $State;
      $this->OtherStateProvince = $OtherStateProvince;
      $this->Country = $Country;
      $this->Postal = $Postal;
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\UProfile\typeAddress
     */
    public function setAddressLine($AddressLine)
    {
      $this->AddressLine = $AddressLine;
      return $this;
    }

    /**
     * @return anonymous802
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param anonymous802 $City
     * @return \FilippoToso\Travelport\UProfile\typeAddress
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return anonymous803
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param anonymous803 $State
     * @return \FilippoToso\Travelport\UProfile\typeAddress
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
     * @return \FilippoToso\Travelport\UProfile\typeAddress
     */
    public function setOtherStateProvince($OtherStateProvince)
    {
      $this->OtherStateProvince = $OtherStateProvince;
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
     * @return \FilippoToso\Travelport\UProfile\typeAddress
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return anonymous804
     */
    public function getPostal()
    {
      return $this->Postal;
    }

    /**
     * @param anonymous804 $Postal
     * @return \FilippoToso\Travelport\UProfile\typeAddress
     */
    public function setPostal($Postal)
    {
      $this->Postal = $Postal;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param StringLength1to128 $Type
     * @return \FilippoToso\Travelport\UProfile\typeAddress
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
