<?php

namespace FilippoToso\Travelport\Util;

class BaggageAllowances
{

    /**
     * @var BaggageAllowanceInfo $BaggageAllowanceInfo
     */
    protected $BaggageAllowanceInfo = null;

    /**
     * @var CarryOnAllowanceInfo $CarryOnAllowanceInfo
     */
    protected $CarryOnAllowanceInfo = null;

    /**
     * @var BaseBaggageAllowanceInfo $EmbargoInfo
     */
    protected $EmbargoInfo = null;

    /**
     * @param BaggageAllowanceInfo $BaggageAllowanceInfo
     * @param CarryOnAllowanceInfo $CarryOnAllowanceInfo
     * @param BaseBaggageAllowanceInfo $EmbargoInfo
     */
    public function __construct($BaggageAllowanceInfo = null, $CarryOnAllowanceInfo = null, $EmbargoInfo = null)
    {
      $this->BaggageAllowanceInfo = $BaggageAllowanceInfo;
      $this->CarryOnAllowanceInfo = $CarryOnAllowanceInfo;
      $this->EmbargoInfo = $EmbargoInfo;
    }

    /**
     * @return BaggageAllowanceInfo
     */
    public function getBaggageAllowanceInfo()
    {
      return $this->BaggageAllowanceInfo;
    }

    /**
     * @param BaggageAllowanceInfo $BaggageAllowanceInfo
     * @return \FilippoToso\Travelport\Util\BaggageAllowances
     */
    public function setBaggageAllowanceInfo($BaggageAllowanceInfo)
    {
      $this->BaggageAllowanceInfo = $BaggageAllowanceInfo;
      return $this;
    }

    /**
     * @return CarryOnAllowanceInfo
     */
    public function getCarryOnAllowanceInfo()
    {
      return $this->CarryOnAllowanceInfo;
    }

    /**
     * @param CarryOnAllowanceInfo $CarryOnAllowanceInfo
     * @return \FilippoToso\Travelport\Util\BaggageAllowances
     */
    public function setCarryOnAllowanceInfo($CarryOnAllowanceInfo)
    {
      $this->CarryOnAllowanceInfo = $CarryOnAllowanceInfo;
      return $this;
    }

    /**
     * @return BaseBaggageAllowanceInfo
     */
    public function getEmbargoInfo()
    {
      return $this->EmbargoInfo;
    }

    /**
     * @param BaseBaggageAllowanceInfo $EmbargoInfo
     * @return \FilippoToso\Travelport\Util\BaggageAllowances
     */
    public function setEmbargoInfo($EmbargoInfo)
    {
      $this->EmbargoInfo = $EmbargoInfo;
      return $this;
    }

}
