<?php

namespace FilippoToso\Travelport\UProfile;

class FixedGroupUpdate extends typeCommonEditableGroup
{

    /**
     * @var int $MaxOccurs
     */
    protected $MaxOccurs = null;

    /**
     * @var int $MinOccurs
     */
    protected $MinOccurs = null;

    /**
     * @param typeFieldID $ID
     * @param int $MinOccursOverride
     * @param int $MaxOccursOverride
     * @param string $Label
     * @param int $DisplayOrder
     * @param boolean $Inheritable
     * @param boolean $Hide
     * @param int $MaxOccurs
     * @param int $MinOccurs
     */
    public function __construct($ID = null, $MinOccursOverride = null, $MaxOccursOverride = null, $Label = null, $DisplayOrder = null, $Inheritable = null, $Hide = null, $MaxOccurs = null, $MinOccurs = null)
    {
      parent::__construct($ID, $MinOccursOverride, $MaxOccursOverride, $Label, $DisplayOrder, $Inheritable, $Hide);
      $this->MaxOccurs = $MaxOccurs;
      $this->MinOccurs = $MinOccurs;
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
     * @return \FilippoToso\Travelport\UProfile\FixedGroupUpdate
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
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
     * @return \FilippoToso\Travelport\UProfile\FixedGroupUpdate
     */
    public function setMinOccurs($MinOccurs)
    {
      $this->MinOccurs = $MinOccurs;
      return $this;
    }

}
