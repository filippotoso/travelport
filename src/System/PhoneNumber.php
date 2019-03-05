<?php

namespace FilippoToso\Travelport\System;

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
     * @var anonymous85 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous86 $Location
     */
    protected $Location = null;

    /**
     * @var anonymous87 $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var anonymous88 $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var anonymous89 $Number
     */
    protected $Number = null;

    /**
     * @var anonymous90 $Extension
     */
    protected $Extension = null;

    /**
     * @var anonymous91 $Text
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
     * @param anonymous85 $Type
     * @param anonymous86 $Location
     * @param anonymous87 $CountryCode
     * @param anonymous88 $AreaCode
     * @param anonymous89 $Number
     * @param anonymous90 $Extension
     * @param anonymous91 $Text
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
     * @return \FilippoToso\Travelport\System\PhoneNumber
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
     * @return \FilippoToso\Travelport\System\PhoneNumber
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous85
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous85 $Type
     * @return \FilippoToso\Travelport\System\PhoneNumber
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous86
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous86 $Location
     * @return \FilippoToso\Travelport\System\PhoneNumber
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous87
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param anonymous87 $CountryCode
     * @return \FilippoToso\Travelport\System\PhoneNumber
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return anonymous88
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param anonymous88 $AreaCode
     * @return \FilippoToso\Travelport\System\PhoneNumber
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return anonymous89
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param anonymous89 $Number
     * @return \FilippoToso\Travelport\System\PhoneNumber
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous90
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param anonymous90 $Extension
     * @return \FilippoToso\Travelport\System\PhoneNumber
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return anonymous91
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anonymous91 $Text
     * @return \FilippoToso\Travelport\System\PhoneNumber
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
     * @return \FilippoToso\Travelport\System\PhoneNumber
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
     * @return \FilippoToso\Travelport\System\PhoneNumber
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
