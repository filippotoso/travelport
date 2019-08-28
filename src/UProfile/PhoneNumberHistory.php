<?php

namespace FilippoToso\Travelport\UProfile;

class PhoneNumberHistory
{

    /**
     * @var ProviderReservationInfoRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var anonymous907 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous908 $Location
     */
    protected $Location = null;

    /**
     * @var anonymous909 $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var anonymous910 $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var anonymous911 $Number
     */
    protected $Number = null;

    /**
     * @var anonymous912 $Extension
     */
    protected $Extension = null;

    /**
     * @var anonymous913 $Text
     */
    protected $Text = null;

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param anonymous907 $Type
     * @param anonymous908 $Location
     * @param anonymous909 $CountryCode
     * @param anonymous910 $AreaCode
     * @param anonymous911 $Number
     * @param anonymous912 $Extension
     * @param anonymous913 $Text
     */
    public function __construct($ProviderReservationInfoRef = null, $Key = null, $Type = null, $Location = null, $CountryCode = null, $AreaCode = null, $Number = null, $Extension = null, $Text = null)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Key = $Key;
      $this->Type = $Type;
      $this->Location = $Location;
      $this->CountryCode = $CountryCode;
      $this->AreaCode = $AreaCode;
      $this->Number = $Number;
      $this->Extension = $Extension;
      $this->Text = $Text;
    }

    /**
     * @return ProviderReservationInfoRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\UProfile\PhoneNumberHistory
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\UProfile\PhoneNumberHistory
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous907
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous907 $Type
     * @return \FilippoToso\Travelport\UProfile\PhoneNumberHistory
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous908
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous908 $Location
     * @return \FilippoToso\Travelport\UProfile\PhoneNumberHistory
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous909
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param anonymous909 $CountryCode
     * @return \FilippoToso\Travelport\UProfile\PhoneNumberHistory
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return anonymous910
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param anonymous910 $AreaCode
     * @return \FilippoToso\Travelport\UProfile\PhoneNumberHistory
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return anonymous911
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param anonymous911 $Number
     * @return \FilippoToso\Travelport\UProfile\PhoneNumberHistory
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous912
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param anonymous912 $Extension
     * @return \FilippoToso\Travelport\UProfile\PhoneNumberHistory
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return anonymous913
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anonymous913 $Text
     * @return \FilippoToso\Travelport\UProfile\PhoneNumberHistory
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
