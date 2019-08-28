<?php

namespace FilippoToso\Travelport\Hotel;

class RateMatchIndicator
{

    /**
     * @var anonymous611 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous612 $Status
     */
    protected $Status = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param anonymous611 $Type
     * @param anonymous612 $Status
     * @param string $Value
     */
    public function __construct($Type = null, $Status = null, $Value = null)
    {
      $this->Type = $Type;
      $this->Status = $Status;
      $this->Value = $Value;
    }

    /**
     * @return anonymous611
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous611 $Type
     * @return \FilippoToso\Travelport\Hotel\RateMatchIndicator
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous612
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param anonymous612 $Status
     * @return \FilippoToso\Travelport\Hotel\RateMatchIndicator
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
     * @return \FilippoToso\Travelport\Hotel\RateMatchIndicator
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
