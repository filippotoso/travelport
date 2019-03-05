<?php

namespace FilippoToso\Travelport\UProfile;

class typeElectronicAddress extends typeKeyElement
{

    /**
     * @var anonymous814 $Name
     */
    protected $Name = null;

    /**
     * @var typeEmailType $Type
     */
    protected $Type = null;

    /**
     * @var typeEmailFormat $Format
     */
    protected $Format = null;

    /**
     * @param typeRef $Key
     * @param anonymous814 $Name
     * @param typeEmailType $Type
     * @param typeEmailFormat $Format
     */
    public function __construct($Key = null, $Name = null, $Type = null, $Format = null)
    {
      parent::__construct($Key);
      $this->Name = $Name;
      $this->Type = $Type;
      $this->Format = $Format;
    }

    /**
     * @return anonymous814
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous814 $Name
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddress
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeEmailType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeEmailType $Type
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddress
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeEmailFormat
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param typeEmailFormat $Format
     * @return \FilippoToso\Travelport\UProfile\typeElectronicAddress
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

}
