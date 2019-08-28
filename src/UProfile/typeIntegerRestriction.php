<?php

namespace FilippoToso\Travelport\UProfile;

class typeIntegerRestriction
{

    /**
     * @var typeIntegerRestrictionValue $MinValue
     */
    protected $MinValue = null;

    /**
     * @var typeIntegerRestrictionValue $MaxValue
     */
    protected $MaxValue = null;

    /**
     * @param typeIntegerRestrictionValue $MinValue
     * @param typeIntegerRestrictionValue $MaxValue
     */
    public function __construct($MinValue = null, $MaxValue = null)
    {
      $this->MinValue = $MinValue;
      $this->MaxValue = $MaxValue;
    }

    /**
     * @return typeIntegerRestrictionValue
     */
    public function getMinValue()
    {
      return $this->MinValue;
    }

    /**
     * @param typeIntegerRestrictionValue $MinValue
     * @return \FilippoToso\Travelport\UProfile\typeIntegerRestriction
     */
    public function setMinValue($MinValue)
    {
      $this->MinValue = $MinValue;
      return $this;
    }

    /**
     * @return typeIntegerRestrictionValue
     */
    public function getMaxValue()
    {
      return $this->MaxValue;
    }

    /**
     * @param typeIntegerRestrictionValue $MaxValue
     * @return \FilippoToso\Travelport\UProfile\typeIntegerRestriction
     */
    public function setMaxValue($MaxValue)
    {
      $this->MaxValue = $MaxValue;
      return $this;
    }

}
