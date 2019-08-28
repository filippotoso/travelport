<?php

namespace FilippoToso\Travelport\Util;

class Variance
{

    /**
     * @var typeVarianceType $Type
     */
    protected $Type = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var typeVarianceIndicator $Indicator
     */
    protected $Indicator = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @param typeVarianceType $Type
     * @param string $Time
     * @param typeVarianceIndicator $Indicator
     * @param string $Reason
     */
    public function __construct($Type = null, $Time = null, $Indicator = null, $Reason = null)
    {
      $this->Type = $Type;
      $this->Time = $Time;
      $this->Indicator = $Indicator;
      $this->Reason = $Reason;
    }

    /**
     * @return typeVarianceType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeVarianceType $Type
     * @return \FilippoToso\Travelport\Util\Variance
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param string $Time
     * @return \FilippoToso\Travelport\Util\Variance
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return typeVarianceIndicator
     */
    public function getIndicator()
    {
      return $this->Indicator;
    }

    /**
     * @param typeVarianceIndicator $Indicator
     * @return \FilippoToso\Travelport\Util\Variance
     */
    public function setIndicator($Indicator)
    {
      $this->Indicator = $Indicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return \FilippoToso\Travelport\Util\Variance
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
