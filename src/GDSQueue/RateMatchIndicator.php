<?php

namespace FilippoToso\Travelport\GDSQueue;

class RateMatchIndicator
{

    /**
     * @var anonymous1225 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous1226 $Status
     */
    protected $Status = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param anonymous1225 $Type
     * @param anonymous1226 $Status
     * @param string $Value
     */
    public function __construct($Type = null, $Status = null, $Value = null)
    {
      $this->Type = $Type;
      $this->Status = $Status;
      $this->Value = $Value;
    }

    /**
     * @return anonymous1225
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1225 $Type
     * @return \FilippoToso\Travelport\GDSQueue\RateMatchIndicator
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous1226
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param anonymous1226 $Status
     * @return \FilippoToso\Travelport\GDSQueue\RateMatchIndicator
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
     * @return \FilippoToso\Travelport\GDSQueue\RateMatchIndicator
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
