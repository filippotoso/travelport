<?php

namespace FilippoToso\Travelport\UProfile;

class ProprietaryData extends typeKeyElement
{

    /**
     * @var anonymous554 $ProprietaryDataType
     */
    protected $ProprietaryDataType = null;

    /**
     * @var StringLength1to255 $Value
     */
    protected $Value = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @param typeRef $Key
     * @param anonymous554 $ProprietaryDataType
     * @param StringLength1to255 $Value
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $ProprietaryDataType = null, $Value = null, $OwnerID = null)
    {
      parent::__construct($Key);
      $this->ProprietaryDataType = $ProprietaryDataType;
      $this->Value = $Value;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return anonymous554
     */
    public function getProprietaryDataType()
    {
      return $this->ProprietaryDataType;
    }

    /**
     * @param anonymous554 $ProprietaryDataType
     * @return \FilippoToso\Travelport\UProfile\ProprietaryData
     */
    public function setProprietaryDataType($ProprietaryDataType)
    {
      $this->ProprietaryDataType = $ProprietaryDataType;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param StringLength1to255 $Value
     * @return \FilippoToso\Travelport\UProfile\ProprietaryData
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getOwnerID()
    {
      return $this->OwnerID;
    }

    /**
     * @param typeProfileID $OwnerID
     * @return \FilippoToso\Travelport\UProfile\ProprietaryData
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
