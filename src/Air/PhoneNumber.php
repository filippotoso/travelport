<?php

namespace FilippoToso\Travelport\Air;

class PhoneNumber
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
     * @var anonymous96 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous97 $Location
     */
    protected $Location = null;

    /**
     * @var anonymous98 $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var anonymous99 $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var anonymous100 $Number
     */
    protected $Number = null;

    /**
     * @var anonymous101 $Extension
     */
    protected $Extension = null;

    /**
     * @var anonymous102 $Text
     */
    protected $Text = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param anonymous96 $Type
     * @param anonymous97 $Location
     * @param anonymous98 $CountryCode
     * @param anonymous99 $AreaCode
     * @param anonymous100 $Number
     * @param anonymous101 $Extension
     * @param anonymous102 $Text
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($ProviderReservationInfoRef = null, $Key = null, $Type = null, $Location = null, $CountryCode = null, $AreaCode = null, $Number = null, $Extension = null, $Text = null, $ElStat = null, $KeyOverride = null)
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
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Air\PhoneNumber
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
     * @return \FilippoToso\Travelport\Air\PhoneNumber
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous96
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous96 $Type
     * @return \FilippoToso\Travelport\Air\PhoneNumber
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous97
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous97 $Location
     * @return \FilippoToso\Travelport\Air\PhoneNumber
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous98
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param anonymous98 $CountryCode
     * @return \FilippoToso\Travelport\Air\PhoneNumber
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return anonymous99
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param anonymous99 $AreaCode
     * @return \FilippoToso\Travelport\Air\PhoneNumber
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return anonymous100
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param anonymous100 $Number
     * @return \FilippoToso\Travelport\Air\PhoneNumber
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous101
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param anonymous101 $Extension
     * @return \FilippoToso\Travelport\Air\PhoneNumber
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return anonymous102
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anonymous102 $Text
     * @return \FilippoToso\Travelport\Air\PhoneNumber
     */
    public function setText($Text)
    {
      $this->Text = $Text;
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
     * @return \FilippoToso\Travelport\Air\PhoneNumber
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
     * @return \FilippoToso\Travelport\Air\PhoneNumber
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
