<?php

namespace FilippoToso\Travelport\Rail;

class RateMatchIndicator
{

    /**
     * @var anonymous1227 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous1228 $Status
     */
    protected $Status = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param anonymous1227 $Type
     * @param anonymous1228 $Status
     * @param string $Value
     */
    public function __construct($Type = null, $Status = null, $Value = null)
    {
      $this->Type = $Type;
      $this->Status = $Status;
      $this->Value = $Value;
    }

    /**
     * @return anonymous1227
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1227 $Type
     * @return \FilippoToso\Travelport\Rail\RateMatchIndicator
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous1228
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param anonymous1228 $Status
     * @return \FilippoToso\Travelport\Rail\RateMatchIndicator
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
     * @return \FilippoToso\Travelport\Rail\RateMatchIndicator
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
