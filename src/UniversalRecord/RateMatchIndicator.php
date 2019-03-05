<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RateMatchIndicator
{

    /**
     * @var anonymous1230 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous1231 $Status
     */
    protected $Status = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param anonymous1230 $Type
     * @param anonymous1231 $Status
     * @param string $Value
     */
    public function __construct($Type = null, $Status = null, $Value = null)
    {
      $this->Type = $Type;
      $this->Status = $Status;
      $this->Value = $Value;
    }

    /**
     * @return anonymous1230
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1230 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\RateMatchIndicator
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous1231
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param anonymous1231 $Status
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
