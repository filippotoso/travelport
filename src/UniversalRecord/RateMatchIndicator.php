<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RateMatchIndicator
{

    /**
     * @var anonymous1228 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous1229 $Status
     */
    protected $Status = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param anonymous1228 $Type
     * @param anonymous1229 $Status
     * @param string $Value
     */
    public function __construct($Type, $Status, $Value)
    {
      $this->Type = $Type;
      $this->Status = $Status;
      $this->Value = $Value;
    }

    /**
     * @return anonymous1228
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1228 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\RateMatchIndicator
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous1229
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param anonymous1229 $Status
     * @return \FilippoToso\Travelport\UniversalRecord\RateMatchIndicator
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RateMatchIndicator
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
