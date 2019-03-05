<?php

namespace FilippoToso\Travelport\UProfile;

class FixedFieldGroup
{

    /**
     * @var FixedField $FixedField
     */
    protected $FixedField = null;

    /**
     * @var FixedFieldGroup $FixedFieldGroup
     */
    protected $FixedFieldGroup = null;

    /**
     * @var typeID $ID
     */
    protected $ID = null;

    /**
     * @var boolean $ReadOnly
     */
    protected $ReadOnly = null;

    /**
     * @var boolean $Overriden
     */
    protected $Overriden = null;

    /**
     * @var typeFieldName $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var anonymous880 $Component
     */
    protected $Component = null;

    /**
     * @var anonymous881 $CorrelationElement
     */
    protected $CorrelationElement = null;

    /**
     * @var StringLength1to128 $CorrelationValue
     */
    protected $CorrelationValue = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @var boolean $Hide
     */
    protected $Hide = null;

    /**
     * @var boolean $Inheritable
     */
    protected $Inheritable = null;

    /**
     * @var int $MinOccurs
     */
    protected $MinOccurs = null;

    /**
     * @var int $MaxOccurs
     */
    protected $MaxOccurs = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var int $MinOccursOverride
     */
    protected $MinOccursOverride = null;

    /**
     * @var int $MaxOccursOverride
     */
    protected $MaxOccursOverride = null;

    /**
     * @var boolean $InheritableControlInd
     */
    protected $InheritableControlInd = null;

    /**
     * @param FixedField $FixedField
     * @param FixedFieldGroup $FixedFieldGroup
     * @param typeID $ID
     * @param boolean $ReadOnly
     * @param boolean $Overriden
     * @param typeFieldName $Name
     * @param StringLength1to255 $Description
     * @param anonymous880 $Component
     * @param anonymous881 $CorrelationElement
     * @param StringLength1to128 $CorrelationValue
     * @param int $DisplayOrder
     * @param boolean $Hide
     * @param boolean $Inheritable
     * @param int $MinOccurs
     * @param int $MaxOccurs
     * @param string $Label
     * @param int $MinOccursOverride
     * @param int $MaxOccursOverride
     * @param boolean $InheritableControlInd
     */
    public function __construct($FixedField = null, $FixedFieldGroup = null, $ID = null, $ReadOnly = null, $Overriden = null, $Name = null, $Description = null, $Component = null, $CorrelationElement = null, $CorrelationValue = null, $DisplayOrder = null, $Hide = null, $Inheritable = null, $MinOccurs = null, $MaxOccurs = null, $Label = null, $MinOccursOverride = null, $MaxOccursOverride = null, $InheritableControlInd = null)
    {
      $this->FixedField = $FixedField;
      $this->FixedFieldGroup = $FixedFieldGroup;
      $this->ID = $ID;
      $this->ReadOnly = $ReadOnly;
      $this->Overriden = $Overriden;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->Component = $Component;
      $this->CorrelationElement = $CorrelationElement;
      $this->CorrelationValue = $CorrelationValue;
      $this->DisplayOrder = $DisplayOrder;
      $this->Hide = $Hide;
      $this->Inheritable = $Inheritable;
      $this->MinOccurs = $MinOccurs;
      $this->MaxOccurs = $MaxOccurs;
      $this->Label = $Label;
      $this->MinOccursOverride = $MinOccursOverride;
      $this->MaxOccursOverride = $MaxOccursOverride;
      $this->InheritableControlInd = $InheritableControlInd;
    }

    /**
     * @return FixedField
     */
    public function getFixedField()
    {
      return $this->FixedField;
    }

    /**
     * @param FixedField $FixedField
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setFixedField($FixedField)
    {
      $this->FixedField = $FixedField;
      return $this;
    }

    /**
     * @return FixedFieldGroup
     */
    public function getFixedFieldGroup()
    {
      return $this->FixedFieldGroup;
    }

    /**
     * @param FixedFieldGroup $FixedFieldGroup
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setFixedFieldGroup($FixedFieldGroup)
    {
      $this->FixedFieldGroup = $FixedFieldGroup;
      return $this;
    }

    /**
     * @return typeID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeID $ID
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setReadOnly($ReadOnly)
    {
      $this->ReadOnly = $ReadOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverriden()
    {
      return $this->Overriden;
    }

    /**
     * @param boolean $Overriden
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setOverriden($Overriden)
    {
      $this->Overriden = $Overriden;
      return $this;
    }

    /**
     * @return typeFieldName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeFieldName $Name
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return anonymous880
     */
    public function getComponent()
    {
      return $this->Component;
    }

    /**
     * @param anonymous880 $Component
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setComponent($Component)
    {
      $this->Component = $Component;
      return $this;
    }

    /**
     * @return anonymous881
     */
    public function getCorrelationElement()
    {
      return $this->CorrelationElement;
    }

    /**
     * @param anonymous881 $CorrelationElement
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setCorrelationElement($CorrelationElement)
    {
      $this->CorrelationElement = $CorrelationElement;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getCorrelationValue()
    {
      return $this->CorrelationValue;
    }

    /**
     * @param StringLength1to128 $CorrelationValue
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setCorrelationValue($CorrelationValue)
    {
      $this->CorrelationValue = $CorrelationValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
      return $this->DisplayOrder;
    }

    /**
     * @param int $DisplayOrder
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
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
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setHide($Hide)
    {
      $this->Hide = $Hide;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritable()
    {
      return $this->Inheritable;
    }

    /**
     * @param boolean $Inheritable
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setInheritable($Inheritable)
    {
      $this->Inheritable = $Inheritable;
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
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
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
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
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
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setMinOccursOverride($MinOccursOverride)
    {
      $this->MinOccursOverride = $MinOccursOverride;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOccursOverride()
    {
      return $this->MaxOccursOverride;
    }

    /**
     * @param int $MaxOccursOverride
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setMaxOccursOverride($MaxOccursOverride)
    {
      $this->MaxOccursOverride = $MaxOccursOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritableControlInd()
    {
      return $this->InheritableControlInd;
    }

    /**
     * @param boolean $InheritableControlInd
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroup
     */
    public function setInheritableControlInd($InheritableControlInd)
    {
      $this->InheritableControlInd = $InheritableControlInd;
      return $this;
    }

}
