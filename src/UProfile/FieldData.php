<?php

namespace FilippoToso\Travelport\UProfile;

class FieldData extends typeKeyTaggedElement
{

    /**
     * @var StringLength1to255 $Value
     */
    protected $Value = null;

    /**
     * @var typeFieldID $FieldID
     */
    protected $FieldID = null;

    /**
     * @var StringLength1to255 $Name
     */
    protected $Name = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param StringLength1to255 $Value
     * @param typeFieldID $FieldID
     * @param StringLength1to255 $Name
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $TagRef = null, $Value = null, $FieldID = null, $Name = null, $OwnerID = null)
    {
      parent::__construct($Key, $TagRef);
      $this->Value = $Value;
      $this->FieldID = $FieldID;
      $this->Name = $Name;
      $this->OwnerID = $OwnerID;
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
     * @return \FilippoToso\Travelport\UProfile\FieldData
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeFieldID
     */
    public function getFieldID()
    {
      return $this->FieldID;
    }

    /**
     * @param typeFieldID $FieldID
     * @return \FilippoToso\Travelport\UProfile\FieldData
     */
    public function setFieldID($FieldID)
    {
      $this->FieldID = $FieldID;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringLength1to255 $Name
     * @return \FilippoToso\Travelport\UProfile\FieldData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UProfile\FieldData
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
