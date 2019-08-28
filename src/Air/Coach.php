<?php

namespace FilippoToso\Travelport\Air;

class Coach
{

    /**
     * @var Characteristic $Characteristic
     */
    protected $Characteristic = null;

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @var string $CoachNumber
     */
    protected $CoachNumber = null;

    /**
     * @param Characteristic $Characteristic
     * @param Remark $Remark
     * @param string $CoachNumber
     */
    public function __construct($Characteristic = null, $Remark = null, $CoachNumber = null)
    {
      $this->Characteristic = $Characteristic;
      $this->Remark = $Remark;
      $this->CoachNumber = $CoachNumber;
    }

    /**
     * @return Characteristic
     */
    public function getCharacteristic()
    {
      return $this->Characteristic;
    }

    /**
     * @param Characteristic $Characteristic
     * @return \FilippoToso\Travelport\Air\Coach
     */
    public function setCharacteristic($Characteristic)
    {
      $this->Characteristic = $Characteristic;
      return $this;
    }

    /**
     * @return Remark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param Remark $Remark
     * @return \FilippoToso\Travelport\Air\Coach
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoachNumber()
    {
      return $this->CoachNumber;
    }

    /**
     * @param string $CoachNumber
     * @return \FilippoToso\Travelport\Air\Coach
     */
    public function setCoachNumber($CoachNumber)
    {
      $this->CoachNumber = $CoachNumber;
      return $this;
    }

}
