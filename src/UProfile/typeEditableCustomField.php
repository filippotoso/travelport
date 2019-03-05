<?php

namespace FilippoToso\Travelport\UProfile;

class typeEditableCustomField extends typeCommonEditableField
{

    /**
     * @var boolean $Hide
     */
    protected $Hide = null;

    /**
     * @var boolean $SearchOption
     */
    protected $SearchOption = null;

    /**
     * @var int $SearchOptionDisplayOrder
     */
    protected $SearchOptionDisplayOrder = null;

    /**
     * @param typeFieldID $ID
     * @param int $MinOccursOverride
     * @param int $MaxOccursOverride
     * @param string $Label
     * @param int $DisplayOrder
     * @param boolean $Inheritable
     * @param boolean $Hide
     * @param boolean $SearchOption
     * @param int $SearchOptionDisplayOrder
     */
    public function __construct($ID = null, $MinOccursOverride = null, $MaxOccursOverride = null, $Label = null, $DisplayOrder = null, $Inheritable = null, $Hide = null, $SearchOption = null, $SearchOptionDisplayOrder = null)
    {
      parent::__construct($ID, $MinOccursOverride, $MaxOccursOverride, $Label, $DisplayOrder, $Inheritable);
      $this->Hide = $Hide;
      $this->SearchOption = $SearchOption;
      $this->SearchOptionDisplayOrder = $SearchOptionDisplayOrder;
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
     * @return \FilippoToso\Travelport\UProfile\typeEditableCustomField
     */
    public function setHide($Hide)
    {
      $this->Hide = $Hide;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchOption()
    {
      return $this->SearchOption;
    }

    /**
     * @param boolean $SearchOption
     * @return \FilippoToso\Travelport\UProfile\typeEditableCustomField
     */
    public function setSearchOption($SearchOption)
    {
      $this->SearchOption = $SearchOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchOptionDisplayOrder()
    {
      return $this->SearchOptionDisplayOrder;
    }

    /**
     * @param int $SearchOptionDisplayOrder
     * @return \FilippoToso\Travelport\UProfile\typeEditableCustomField
     */
    public function setSearchOptionDisplayOrder($SearchOptionDisplayOrder)
    {
      $this->SearchOptionDisplayOrder = $SearchOptionDisplayOrder;
      return $this;
    }

}
