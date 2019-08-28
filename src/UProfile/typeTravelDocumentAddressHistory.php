<?php

namespace FilippoToso\Travelport\UProfile;

class typeTravelDocumentAddressHistory
{

    /**
     * @var StringLength1to128 $AddressLine
     */
    protected $AddressLine = null;

    /**
     * @var StringLength1to128 $State
     */
    protected $State = null;

    /**
     * @var StringLength1to128 $OtherStateProvince
     */
    protected $OtherStateProvince = null;

    /**
     * @var StringLength1to128 $Country
     */
    protected $Country = null;

    /**
     * @var anonymous733 $Postal
     */
    protected $Postal = null;

    /**
     * @var anonymous734 $City
     */
    protected $City = null;

    /**
     * @param StringLength1to128 $AddressLine
     * @param StringLength1to128 $State
     * @param StringLength1to128 $OtherStateProvince
     * @param StringLength1to128 $Country
     * @param anonymous733 $Postal
     * @param anonymous734 $City
     */
    public function __construct($AddressLine = null, $State = null, $OtherStateProvince = null, $Country = null, $Postal = null, $City = null)
    {
      $this->AddressLine = $AddressLine;
      $this->State = $State;
      $this->OtherStateProvince = $OtherStateProvince;
      $this->Country = $Country;
      $this->Postal = $Postal;
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddressHistory
     */
    public function setAddressLine($AddressLine)
    {
      $this->AddressLine = $AddressLine;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param StringLength1to128 $State
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddressHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddressHistory
     */
    public function setOtherStateProvince($OtherStateProvince)
    {
      $this->OtherStateProvince = $OtherStateProvince;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param StringLength1to128 $Country
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddressHistory
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return anonymous733
     */
    public function getPostal()
    {
      return $this->Postal;
    }

    /**
     * @param anonymous733 $Postal
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddressHistory
     */
    public function setPostal($Postal)
    {
      $this->Postal = $Postal;
      return $this;
    }

    /**
     * @return anonymous734
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param anonymous734 $City
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentAddressHistory
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

}
