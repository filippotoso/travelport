<?php

namespace FilippoToso\Travelport\UProfile;

class Endpoint
{

    /**
     * @var typeEndpointID $ID
     */
    protected $ID = null;

    /**
     * @var typeEndpointName $Name
     */
    protected $Name = null;

    /**
     * @var typeEndpointDescription $Description
     */
    protected $Description = null;

    /**
     * @var typeEndpointDataType $DataType
     */
    protected $DataType = null;

    /**
     * @var int $MinOccurs
     */
    protected $MinOccurs = null;

    /**
     * @var int $MaxOccurs
     */
    protected $MaxOccurs = null;

    /**
     * @var string $EndPointCode
     */
    protected $EndPointCode = null;

    /**
     * @param typeEndpointID $ID
     * @param typeEndpointName $Name
     * @param typeEndpointDescription $Description
     * @param typeEndpointDataType $DataType
     * @param int $MinOccurs
     * @param int $MaxOccurs
     * @param string $EndPointCode
     */
    public function __construct($ID = null, $Name = null, $Description = null, $DataType = null, $MinOccurs = null, $MaxOccurs = null, $EndPointCode = null)
    {
      $this->ID = $ID;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->DataType = $DataType;
      $this->MinOccurs = $MinOccurs;
      $this->MaxOccurs = $MaxOccurs;
      $this->EndPointCode = $EndPointCode;
    }

    /**
     * @return typeEndpointID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeEndpointID $ID
     * @return \FilippoToso\Travelport\UProfile\Endpoint
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return typeEndpointName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeEndpointName $Name
     * @return \FilippoToso\Travelport\UProfile\Endpoint
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeEndpointDescription
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param typeEndpointDescription $Description
     * @return \FilippoToso\Travelport\UProfile\Endpoint
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typeEndpointDataType
     */
    public function getDataType()
    {
      return $this->DataType;
    }

    /**
     * @param typeEndpointDataType $DataType
     * @return \FilippoToso\Travelport\UProfile\Endpoint
     */
    public function setDataType($DataType)
    {
      $this->DataType = $DataType;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinOccurs()
    {
      return $this->MinOccurs;
    }

    /**
     * @param int $MinOccurs
     * @return \FilippoToso\Travelport\UProfile\Endpoint
     */
    public function setMinOccurs($MinOccurs)
    {
      $this->MinOccurs = $MinOccurs;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOccurs()
    {
      return $this->MaxOccurs;
    }

    /**
     * @param int $MaxOccurs
     * @return \FilippoToso\Travelport\UProfile\Endpoint
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndPointCode()
    {
      return $this->EndPointCode;
    }

    /**
     * @param string $EndPointCode
     * @return \FilippoToso\Travelport\UProfile\Endpoint
     */
    public function setEndPointCode($EndPointCode)
    {
      $this->EndPointCode = $EndPointCode;
      return $this;
    }

}
