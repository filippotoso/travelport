<?php

namespace FilippoToso\Travelport\Util;

class CodeshareInfo
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeCarrier $OperatingCarrier
     */
    protected $OperatingCarrier = null;

    /**
     * @var typeFlightNumber $OperatingFlightNumber
     */
    protected $OperatingFlightNumber = null;

    /**
     * @param string $_
     * @param typeCarrier $OperatingCarrier
     * @param typeFlightNumber $OperatingFlightNumber
     */
    public function __construct($_ = null, $OperatingCarrier = null, $OperatingFlightNumber = null)
    {
      $this->_ = $_;
      $this->OperatingCarrier = $OperatingCarrier;
      $this->OperatingFlightNumber = $OperatingFlightNumber;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Util\CodeshareInfo
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getOperatingCarrier()
    {
      return $this->OperatingCarrier;
    }

    /**
     * @param typeCarrier $OperatingCarrier
     * @return \FilippoToso\Travelport\Util\CodeshareInfo
     */
    public function setOperatingCarrier($OperatingCarrier)
    {
      $this->OperatingCarrier = $OperatingCarrier;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getOperatingFlightNumber()
    {
      return $this->OperatingFlightNumber;
    }

    /**
     * @param typeFlightNumber $OperatingFlightNumber
     * @return \FilippoToso\Travelport\Util\CodeshareInfo
     */
    public function setOperatingFlightNumber($OperatingFlightNumber)
    {
      $this->OperatingFlightNumber = $OperatingFlightNumber;
      return $this;
    }

}
