<?php

namespace FilippoToso\Travelport\UProfile;

class typeTravelDocumentAddress
{

    /**
     * @var StringLength1to128 $AddressLine
     */
    protected $AddressLine = null;

    /**
     * @var anonymous851 $City
     */
    protected $City = null;

    /**
     * @var anonymous852 $State
     */
    protected $State = null;

    /**
     * @var StringLength1to128 $OtherStateProvince
     */
    protected $OtherStateProvince = null;

    /**
     * @var anonymous853 $Country
     */
    protected $Country = null;

    /**
     * @var anonymous854 $Postal
     */
    protected $Postal = null;

    /**
     * @param StringLength1to128 $AddressLine
     * @param anonymous851 $City
     * @param anonymous852 $State
     * @param StringLength1to128 $OtherStateProvince
     * @param anonymous853 $Country
     * @param anonymous854 $Postal
     */
    public function __construct($AddressLine = null, $City = null, $State = null, $OtherStateProvince = null, $Country = null, $Postal = null)
    {
      $this->AddressLine = $AddressLine;
      $this->City = $City;
      $this->State = $State;
      $this->OtherStateProvince = $OtherStateProvince;
      $this->Country = $Country;
      $this->Postal = $Postal;
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddress
     */
    public function setAddressLine($AddressLine)
    {
      $this->AddressLine = $AddressLine;
      return $this;
    }

    /**
     * @return anonymous851
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param anonymous851 $City
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddress
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return anonymous852
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param anonymous852 $State
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddress
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddress
     */
    public function setOtherStateProvince($OtherStateProvince)
    {
      $this->OtherStateProvince = $OtherStateProvince;
      return $this;
    }

    /**
     * @return anonymous853
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param anonymous853 $Country
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddress
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return anonymous854
     */
    public function getPostal()
    {
      return $this->Postal;
    }

    /**
     * @param anonymous854 $Postal
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddress
     */
    public function setPostal($Postal)
    {
      $this->Postal = $Postal;
      return $this;
    }

}
