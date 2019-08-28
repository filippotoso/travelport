<?php

namespace FilippoToso\Travelport\Air;

class Characteristic
{

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var typePosition $Position
     */
    protected $Position = null;

    /**
     * @var typeRowLocation $RowLocation
     */
    protected $RowLocation = null;

    /**
     * @var StringLength1to99 $PADISCode
     */
    protected $PADISCode = null;

    /**
     * @param string $Value
     * @param typePosition $Position
     * @param typeRowLocation $RowLocation
     * @param StringLength1to99 $PADISCode
     */
    public function __construct($Value = null, $Position = null, $RowLocation = null, $PADISCode = null)
    {
      $this->Value = $Value;
      $this->Position = $Position;
      $this->RowLocation = $RowLocation;
      $this->PADISCode = $PADISCode;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FilippoToso\Travelport\Air\Characteristic
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typePosition
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param typePosition $Position
     * @return \FilippoToso\Travelport\Air\Characteristic
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

    /**
     * @return typeRowLocation
     */
    public function getRowLocation()
    {
      return $this->RowLocation;
    }

    /**
     * @param typeRowLocation $RowLocation
     * @return \FilippoToso\Travelport\Air\Characteristic
     */
    public function setRowLocation($RowLocation)
    {
      $this->RowLocation = $RowLocation;
      return $this;
    }

    /**
     * @return StringLength1to99
     */
    public function getPADISCode()
    {
      return $this->PADISCode;
    }

    /**
     * @param StringLength1to99 $PADISCode
     * @return \FilippoToso\Travelport\Air\Characteristic
     */
    public function setPADISCode($PADISCode)
    {
      $this->PADISCode = $PADISCode;
      return $this;
    }

}
