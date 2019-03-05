<?php

namespace FilippoToso\Travelport\UProfile;

class typeSearchAccountingReference
{

    /**
     * @var StringLength1to128 $Type
     */
    protected $Type = null;

    /**
     * @var typeWildcard $Value
     */
    protected $Value = null;

    /**
     * @param StringLength1to128 $Type
     * @param typeWildcard $Value
     */
    public function __construct($Type = null, $Value = null)
    {
      $this->Type = $Type;
      $this->Value = $Value;
    }

    /**
     * @return StringLength1to128
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param StringLength1to128 $Type
     * @return \FilippoToso\Travelport\UProfile\typeSearchAccountingReference
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typeWildcard $Value
     * @return \FilippoToso\Travelport\UProfile\typeSearchAccountingReference
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
