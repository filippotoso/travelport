<?php

namespace FilippoToso\Travelport\UProfile;

class ModifyTag
{

    /**
     * @var typeID $ID
     */
    protected $ID = null;

    /**
     * @var anonymous624 $Name
     */
    protected $Name = null;

    /**
     * @var anonymous625 $Label
     */
    protected $Label = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @param typeID $ID
     * @param anonymous624 $Name
     * @param anonymous625 $Label
     * @param StringLength1to255 $Description
     * @param int $DisplayOrder
     */
    public function __construct($ID = null, $Name = null, $Label = null, $Description = null, $DisplayOrder = null)
    {
      $this->ID = $ID;
      $this->Name = $Name;
      $this->Label = $Label;
      $this->Description = $Description;
      $this->DisplayOrder = $DisplayOrder;
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
     * @return \FilippoToso\Travelport\UProfile\ModifyTag
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return anonymous624
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous624 $Name
     * @return \FilippoToso\Travelport\UProfile\ModifyTag
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anonymous625
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param anonymous625 $Label
     * @return \FilippoToso\Travelport\UProfile\ModifyTag
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
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
     * @return \FilippoToso\Travelport\UProfile\ModifyTag
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UProfile\ModifyTag
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
      return $this;
    }

}
