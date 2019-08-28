<?php

namespace FilippoToso\Travelport\UProfile;

class typeCommonEditableField extends typeFieldRef
{

    /**
     * @var int $MinOccursOverride
     */
    protected $MinOccursOverride = null;

    /**
     * @var int $MaxOccursOverride
     */
    protected $MaxOccursOverride = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @var boolean $Inheritable
     */
    protected $Inheritable = null;

    /**
     * @param typeFieldID $ID
     * @param int $MinOccursOverride
     * @param int $MaxOccursOverride
     * @param string $Label
     * @param int $DisplayOrder
     * @param boolean $Inheritable
     */
    public function __construct($ID = null, $MinOccursOverride = null, $MaxOccursOverride = null, $Label = null, $DisplayOrder = null, $Inheritable = null)
    {
      parent::__construct($ID);
      $this->MinOccursOverride = $MinOccursOverride;
      $this->MaxOccursOverride = $MaxOccursOverride;
      $this->Label = $Label;
      $this->DisplayOrder = $DisplayOrder;
      $this->Inheritable = $Inheritable;
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
     * @return \FilippoToso\Travelport\UProfile\typeCommonEditableField
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
     * @return \FilippoToso\Travelport\UProfile\typeCommonEditableField
     */
    public function setMaxOccursOverride($MaxOccursOverride)
    {
      $this->MaxOccursOverride = $MaxOccursOverride;
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
     * @return \FilippoToso\Travelport\UProfile\typeCommonEditableField
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
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
     * @return \FilippoToso\Travelport\UProfile\typeCommonEditableField
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
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
     * @return \FilippoToso\Travelport\UProfile\typeCommonEditableField
     */
    public function setInheritable($Inheritable)
    {
      $this->Inheritable = $Inheritable;
      return $this;
    }

}
