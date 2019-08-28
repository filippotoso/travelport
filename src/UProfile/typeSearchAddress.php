<?php

namespace FilippoToso\Travelport\UProfile;

class typeSearchAddress
{

    /**
     * @var StringLength1to255 $AddressLine
     */
    protected $AddressLine = null;

    /**
     * @var anonymous832 $City
     */
    protected $City = null;

    /**
     * @var anonymous833 $StateProvince
     */
    protected $StateProvince = null;

    /**
     * @var anonymous834 $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var anonymous835 $Country
     */
    protected $Country = null;

    /**
     * @param StringLength1to255 $AddressLine
     * @param anonymous832 $City
     * @param anonymous833 $StateProvince
     * @param anonymous834 $PostalCode
     * @param anonymous835 $Country
     */
    public function __construct($AddressLine = null, $City = null, $StateProvince = null, $PostalCode = null, $Country = null)
    {
      $this->AddressLine = $AddressLine;
      $this->City = $City;
      $this->StateProvince = $StateProvince;
      $this->PostalCode = $PostalCode;
      $this->Country = $Country;
    }

    /**
     * @return StringLength1to255
     */
    public function getAddressLine()
    {
      return $this->AddressLine;
    }

    /**
     * @param StringLength1to255 $AddressLine
     * @return \FilippoToso\Travelport\UProfile\typeSearchAddress
     */
    public function setAddressLine($AddressLine)
    {
      $this->AddressLine = $AddressLine;
      return $this;
    }

    /**
     * @return anonymous832
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param anonymous832 $City
     * @return \FilippoToso\Travelport\UProfile\typeSearchAddress
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return anonymous833
     */
    public function getStateProvince()
    {
      return $this->StateProvince;
    }

    /**
     * @param anonymous833 $StateProvince
     * @return \FilippoToso\Travelport\UProfile\typeSearchAddress
     */
    public function setStateProvince($StateProvince)
    {
      $this->StateProvince = $StateProvince;
      return $this;
    }

    /**
     * @return anonymous834
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param anonymous834 $PostalCode
     * @return \FilippoToso\Travelport\UProfile\typeSearchAddress
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return anonymous835
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param anonymous835 $Country
     * @return \FilippoToso\Travelport\UProfile\typeSearchAddress
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
