<?php

namespace FilippoToso\Travelport\UProfile;

class Tag
{

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to128 $Label
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
     * @var typeTagKey $ID
     */
    protected $ID = null;

    /**
     * @var typeProfileID $AgencyID
     */
    protected $AgencyID = null;

    /**
     * @param StringLength1to128 $Name
     * @param StringLength1to128 $Label
     * @param StringLength1to255 $Description
     * @param int $DisplayOrder
     * @param typeTagKey $ID
     * @param typeProfileID $AgencyID
     */
    public function __construct($Name = null, $Label = null, $Description = null, $DisplayOrder = null, $ID = null, $AgencyID = null)
    {
      $this->Name = $Name;
      $this->Label = $Label;
      $this->Description = $Description;
      $this->DisplayOrder = $DisplayOrder;
      $this->ID = $ID;
      $this->AgencyID = $AgencyID;
    }

    /**
     * @return StringLength1to128
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringLength1to128 $Name
     * @return \FilippoToso\Travelport\UProfile\Tag
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UProfile\Tag
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
     * @return \FilippoToso\Travelport\UProfile\Tag
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
     * @return \FilippoToso\Travelport\UProfile\Tag
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
      return $this;
    }

    /**
     * @return typeTagKey
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeTagKey $ID
     * @return \FilippoToso\Travelport\UProfile\Tag
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getAgencyID()
    {
      return $this->AgencyID;
    }

    /**
     * @param typeProfileID $AgencyID
     * @return \FilippoToso\Travelport\UProfile\Tag
     */
    public function setAgencyID($AgencyID)
    {
      $this->AgencyID = $AgencyID;
      return $this;
    }

}
