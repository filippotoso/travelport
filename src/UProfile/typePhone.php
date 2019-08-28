<?php

namespace FilippoToso\Travelport\UProfile;

class typePhone extends typeKeyElement
{

    /**
     * @var typePhoneType $Type
     */
    protected $Type = null;

    /**
     * @var anonymous821 $Country
     */
    protected $Country = null;

    /**
     * @var anonymous822 $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var anonymous823 $LocalNumber
     */
    protected $LocalNumber = null;

    /**
     * @var anonymous824 $Extension
     */
    protected $Extension = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var typeCityOrAirport $Location
     */
    protected $Location = null;

    /**
     * @param typeRef $Key
     * @param typePhoneType $Type
     * @param anonymous821 $Country
     * @param anonymous822 $AreaCode
     * @param anonymous823 $LocalNumber
     * @param anonymous824 $Extension
     * @param StringLength1to255 $Description
     * @param typeCityOrAirport $Location
     */
    public function __construct($Key = null, $Type = null, $Country = null, $AreaCode = null, $LocalNumber = null, $Extension = null, $Description = null, $Location = null)
    {
      parent::__construct($Key);
      $this->Type = $Type;
      $this->Country = $Country;
      $this->AreaCode = $AreaCode;
      $this->LocalNumber = $LocalNumber;
      $this->Extension = $Extension;
      $this->Description = $Description;
      $this->Location = $Location;
    }

    /**
     * @return typePhoneType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typePhoneType $Type
     * @return \FilippoToso\Travelport\UProfile\typePhone
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous821
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param anonymous821 $Country
     * @return \FilippoToso\Travelport\UProfile\typePhone
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return anonymous822
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param anonymous822 $AreaCode
     * @return \FilippoToso\Travelport\UProfile\typePhone
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return anonymous823
     */
    public function getLocalNumber()
    {
      return $this->LocalNumber;
    }

    /**
     * @param anonymous823 $LocalNumber
     * @return \FilippoToso\Travelport\UProfile\typePhone
     */
    public function setLocalNumber($LocalNumber)
    {
      $this->LocalNumber = $LocalNumber;
      return $this;
    }

    /**
     * @return anonymous824
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param anonymous824 $Extension
     * @return \FilippoToso\Travelport\UProfile\typePhone
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to255 $Description
     * @return \FilippoToso\Travelport\UProfile\typePhone
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UProfile\typePhone
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
