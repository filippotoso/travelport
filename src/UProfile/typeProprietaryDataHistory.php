<?php

namespace FilippoToso\Travelport\UProfile;

class typeProprietaryDataHistory extends typeKeyElement
{

    /**
     * @var anonymous697 $ProprietaryDataType
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
     * @param anonymous697 $ProprietaryDataType
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
     * @return anonymous697
     */
    public function getProprietaryDataType()
    {
      return $this->ProprietaryDataType;
    }

    /**
     * @param anonymous697 $ProprietaryDataType
     * @return \FilippoToso\Travelport\UProfile\typeProprietaryDataHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeProprietaryDataHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeProprietaryDataHistory
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
