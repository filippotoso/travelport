<?php

namespace FilippoToso\Travelport\UProfile;

class typeCommonEditableGroup extends typeCommonEditableField
{

    /**
     * @var boolean $Hide
     */
    protected $Hide = null;

    /**
     * @param typeFieldID $ID
     * @param int $MinOccursOverride
     * @param int $MaxOccursOverride
     * @param string $Label
     * @param int $DisplayOrder
     * @param boolean $Inheritable
     * @param boolean $Hide
     */
    public function __construct($ID = null, $MinOccursOverride = null, $MaxOccursOverride = null, $Label = null, $DisplayOrder = null, $Inheritable = null, $Hide = null)
    {
      parent::__construct($ID, $MinOccursOverride, $MaxOccursOverride, $Label, $DisplayOrder, $Inheritable);
      $this->Hide = $Hide;
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
     * @return \FilippoToso\Travelport\UProfile\typeCommonEditableGroup
     */
    public function setHide($Hide)
    {
      $this->Hide = $Hide;
      return $this;
    }

}
