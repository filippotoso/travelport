<?php

namespace FilippoToso\Travelport\UProfile;

class OverrideDefinition
{

    /**
     * @var typeID $TemplateFieldID
     */
    protected $TemplateFieldID = null;

    /**
     * @var boolean $Hide
     */
    protected $Hide = null;

    /**
     * @var StringLength1to128 $Label
     */
    protected $Label = null;

    /**
     * @var int $MinOccursOverride
     */
    protected $MinOccursOverride = null;

    /**
     * @var boolean $ReadOnly
     */
    protected $ReadOnly = null;

    /**
     * @var typeCustomFieldOrGroupType $TemplateFieldType
     */
    protected $TemplateFieldType = null;

    /**
     * @param typeID $TemplateFieldID
     * @param boolean $Hide
     * @param StringLength1to128 $Label
     * @param int $MinOccursOverride
     * @param boolean $ReadOnly
     * @param typeCustomFieldOrGroupType $TemplateFieldType
     */
    public function __construct($TemplateFieldID = null, $Hide = null, $Label = null, $MinOccursOverride = null, $ReadOnly = null, $TemplateFieldType = null)
    {
      $this->TemplateFieldID = $TemplateFieldID;
      $this->Hide = $Hide;
      $this->Label = $Label;
      $this->MinOccursOverride = $MinOccursOverride;
      $this->ReadOnly = $ReadOnly;
      $this->TemplateFieldType = $TemplateFieldType;
    }

    /**
     * @return typeID
     */
    public function getTemplateFieldID()
    {
      return $this->TemplateFieldID;
    }

    /**
     * @param typeID $TemplateFieldID
     * @return \FilippoToso\Travelport\UProfile\OverrideDefinition
     */
    public function setTemplateFieldID($TemplateFieldID)
    {
      $this->TemplateFieldID = $TemplateFieldID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHide()
    {
      return $this->Hide;
    }

    /**
     * @param boolean $Hide
     * @return \FilippoToso\Travelport\UProfile\OverrideDefinition
     */
    public function setHide($Hide)
    {
      $this->Hide = $Hide;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param StringLength1to128 $Label
     * @return \FilippoToso\Travelport\UProfile\OverrideDefinition
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinOccursOverride()
    {
      return $this->MinOccursOverride;
    }

    /**
     * @param int $MinOccursOverride
     * @return \FilippoToso\Travelport\UProfile\OverrideDefinition
     */
    public function setMinOccursOverride($MinOccursOverride)
    {
      $this->MinOccursOverride = $MinOccursOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReadOnly()
    {
      return $this->ReadOnly;
    }

    /**
     * @param boolean $ReadOnly
     * @return \FilippoToso\Travelport\UProfile\OverrideDefinition
     */
    public function setReadOnly($ReadOnly)
    {
      $this->ReadOnly = $ReadOnly;
      return $this;
    }

    /**
     * @return typeCustomFieldOrGroupType
     */
    public function getTemplateFieldType()
    {
      return $this->TemplateFieldType;
    }

    /**
     * @param typeCustomFieldOrGroupType $TemplateFieldType
     * @return \FilippoToso\Travelport\UProfile\OverrideDefinition
     */
    public function setTemplateFieldType($TemplateFieldType)
    {
      $this->TemplateFieldType = $TemplateFieldType;
      return $this;
    }

}
