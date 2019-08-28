<?php

namespace FilippoToso\Travelport\UProfile;

class FieldDataSearch
{

    /**
     * @var typeFieldID $FieldID
     */
    protected $FieldID = null;

    /**
     * @var StringLength1to255 $Name
     */
    protected $Name = null;

    /**
     * @var anonymous566 $Value
     */
    protected $Value = null;

    /**
     * @var typeFieldID $FieldGroupID
     */
    protected $FieldGroupID = null;

    /**
     * @param typeFieldID $FieldID
     * @param StringLength1to255 $Name
     * @param anonymous566 $Value
     * @param typeFieldID $FieldGroupID
     */
    public function __construct($FieldID = null, $Name = null, $Value = null, $FieldGroupID = null)
    {
      $this->FieldID = $FieldID;
      $this->Name = $Name;
      $this->Value = $Value;
      $this->FieldGroupID = $FieldGroupID;
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
     * @return \FilippoToso\Travelport\UProfile\FieldDataSearch
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
     * @return \FilippoToso\Travelport\UProfile\FieldDataSearch
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anonymous566
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous566 $Value
     * @return \FilippoToso\Travelport\UProfile\FieldDataSearch
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeFieldID
     */
    public function getFieldGroupID()
    {
      return $this->FieldGroupID;
    }

    /**
     * @param typeFieldID $FieldGroupID
     * @return \FilippoToso\Travelport\UProfile\FieldDataSearch
     */
    public function setFieldGroupID($FieldGroupID)
    {
      $this->FieldGroupID = $FieldGroupID;
      return $this;
    }

}
