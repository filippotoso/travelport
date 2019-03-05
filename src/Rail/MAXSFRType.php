<?php

namespace FilippoToso\Travelport\Rail;

class MAXSFRType
{

    /**
     * @var string $ReturnTravelCode
     */
    protected $ReturnTravelCode = null;

    /**
     * @var int $ReturnTime
     */
    protected $ReturnTime = null;

    /**
     * @var string $MaxStay
     */
    protected $MaxStay = null;

    /**
     * @var string $UnitOfTime
     */
    protected $UnitOfTime = null;

    /**
     * @var string $TktIssuanceInd
     */
    protected $TktIssuanceInd = null;

    /**
     * @var string $Waiver
     */
    protected $Waiver = null;

    /**
     * @var date $MaxStayDate
     */
    protected $MaxStayDate = null;

    /**
     * @var string $MaxStayEarlyLater
     */
    protected $MaxStayEarlyLater = null;

    /**
     * @var date $WaiverDate
     */
    protected $WaiverDate = null;

    /**
     * @var string $WaiverEarlyLater
     */
    protected $WaiverEarlyLater = null;

    /**
     * @var int $WaiverPeriod
     */
    protected $WaiverPeriod = null;

    /**
     * @var string $WaiverUnit
     */
    protected $WaiverUnit = null;

    /**
     * @param string $ReturnTravelCode
     * @param int $ReturnTime
     * @param string $MaxStay
     * @param string $UnitOfTime
     * @param string $TktIssuanceInd
     * @param string $Waiver
     * @param date $MaxStayDate
     * @param string $MaxStayEarlyLater
     * @param date $WaiverDate
     * @param string $WaiverEarlyLater
     * @param int $WaiverPeriod
     * @param string $WaiverUnit
     */
    public function __construct($ReturnTravelCode = null, $ReturnTime = null, $MaxStay = null, $UnitOfTime = null, $TktIssuanceInd = null, $Waiver = null, $MaxStayDate = null, $MaxStayEarlyLater = null, $WaiverDate = null, $WaiverEarlyLater = null, $WaiverPeriod = null, $WaiverUnit = null)
    {
      $this->ReturnTravelCode = $ReturnTravelCode;
      $this->ReturnTime = $ReturnTime;
      $this->MaxStay = $MaxStay;
      $this->UnitOfTime = $UnitOfTime;
      $this->TktIssuanceInd = $TktIssuanceInd;
      $this->Waiver = $Waiver;
      $this->MaxStayDate = $MaxStayDate;
      $this->MaxStayEarlyLater = $MaxStayEarlyLater;
      $this->WaiverDate = $WaiverDate;
      $this->WaiverEarlyLater = $WaiverEarlyLater;
      $this->WaiverPeriod = $WaiverPeriod;
      $this->WaiverUnit = $WaiverUnit;
    }

    /**
     * @return string
     */
    public function getReturnTravelCode()
    {
      return $this->ReturnTravelCode;
    }

    /**
     * @param string $ReturnTravelCode
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setReturnTravelCode($ReturnTravelCode)
    {
      $this->ReturnTravelCode = $ReturnTravelCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnTime()
    {
      return $this->ReturnTime;
    }

    /**
     * @param int $ReturnTime
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setReturnTime($ReturnTime)
    {
      $this->ReturnTime = $ReturnTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxStay()
    {
      return $this->MaxStay;
    }

    /**
     * @param string $MaxStay
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setMaxStay($MaxStay)
    {
      $this->MaxStay = $MaxStay;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfTime()
    {
      return $this->UnitOfTime;
    }

    /**
     * @param string $UnitOfTime
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setUnitOfTime($UnitOfTime)
    {
      $this->UnitOfTime = $UnitOfTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getTktIssuanceInd()
    {
      return $this->TktIssuanceInd;
    }

    /**
     * @param string $TktIssuanceInd
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setTktIssuanceInd($TktIssuanceInd)
    {
      $this->TktIssuanceInd = $TktIssuanceInd;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaiver()
    {
      return $this->Waiver;
    }

    /**
     * @param string $Waiver
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setWaiver($Waiver)
    {
      $this->Waiver = $Waiver;
      return $this;
    }

    /**
     * @return date
     */
    public function getMaxStayDate()
    {
      return $this->MaxStayDate;
    }

    /**
     * @param date $MaxStayDate
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setMaxStayDate($MaxStayDate)
    {
      $this->MaxStayDate = $MaxStayDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxStayEarlyLater()
    {
      return $this->MaxStayEarlyLater;
    }

    /**
     * @param string $MaxStayEarlyLater
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setMaxStayEarlyLater($MaxStayEarlyLater)
    {
      $this->MaxStayEarlyLater = $MaxStayEarlyLater;
      return $this;
    }

    /**
     * @return date
     */
    public function getWaiverDate()
    {
      return $this->WaiverDate;
    }

    /**
     * @param date $WaiverDate
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setWaiverDate($WaiverDate)
    {
      $this->WaiverDate = $WaiverDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaiverEarlyLater()
    {
      return $this->WaiverEarlyLater;
    }

    /**
     * @param string $WaiverEarlyLater
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setWaiverEarlyLater($WaiverEarlyLater)
    {
      $this->WaiverEarlyLater = $WaiverEarlyLater;
      return $this;
    }

    /**
     * @return int
     */
    public function getWaiverPeriod()
    {
      return $this->WaiverPeriod;
    }

    /**
     * @param int $WaiverPeriod
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setWaiverPeriod($WaiverPeriod)
    {
      $this->WaiverPeriod = $WaiverPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaiverUnit()
    {
      return $this->WaiverUnit;
    }

    /**
     * @param string $WaiverUnit
     * @return \FilippoToso\Travelport\Rail\MAXSFRType
     */
    public function setWaiverUnit($WaiverUnit)
    {
      $this->WaiverUnit = $WaiverUnit;
      return $this;
    }

}
