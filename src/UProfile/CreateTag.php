<?php

namespace FilippoToso\Travelport\UProfile;

class CreateTag
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
     * @param StringLength1to128 $Name
     * @param StringLength1to128 $Label
     * @param StringLength1to255 $Description
     * @param int $DisplayOrder
     */
    public function __construct($Name = null, $Label = null, $Description = null, $DisplayOrder = null)
    {
      $this->Name = $Name;
      $this->Label = $Label;
      $this->Description = $Description;
      $this->DisplayOrder = $DisplayOrder;
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
     * @return \FilippoToso\Travelport\UProfile\CreateTag
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
     * @return \FilippoToso\Travelport\UProfile\CreateTag
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
     * @return \FilippoToso\Travelport\UProfile\CreateTag
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
     * @return \FilippoToso\Travelport\UProfile\CreateTag
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
      return $this;
    }

}
