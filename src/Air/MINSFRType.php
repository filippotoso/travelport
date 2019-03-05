<?php

namespace FilippoToso\Travelport\Air;

class MINSFRType
{

    /**
     * @var string $OriginDayOfWeek
     */
    protected $OriginDayOfWeek = null;

    /**
     * @var string $ReturnTime
     */
    protected $ReturnTime = null;

    /**
     * @var string $MinStay
     */
    protected $MinStay = null;

    /**
     * @var string $UnitOfTime
     */
    protected $UnitOfTime = null;

    /**
     * @var string $Waiver
     */
    protected $Waiver = null;

    /**
     * @var date $MinStayDate
     */
    protected $MinStayDate = null;

    /**
     * @var string $MinStayEarlierLater
     */
    protected $MinStayEarlierLater = null;

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
     * @param string $OriginDayOfWeek
     * @param string $ReturnTime
     * @param string $MinStay
     * @param string $UnitOfTime
     * @param string $Waiver
     * @param date $MinStayDate
     * @param string $MinStayEarlierLater
     * @param date $WaiverDate
     * @param string $WaiverEarlyLater
     * @param int $WaiverPeriod
     * @param string $WaiverUnit
     */
    public function __construct($OriginDayOfWeek = null, $ReturnTime = null, $MinStay = null, $UnitOfTime = null, $Waiver = null, $MinStayDate = null, $MinStayEarlierLater = null, $WaiverDate = null, $WaiverEarlyLater = null, $WaiverPeriod = null, $WaiverUnit = null)
    {
      $this->OriginDayOfWeek = $OriginDayOfWeek;
      $this->ReturnTime = $ReturnTime;
      $this->MinStay = $MinStay;
      $this->UnitOfTime = $UnitOfTime;
      $this->Waiver = $Waiver;
      $this->MinStayDate = $MinStayDate;
      $this->MinStayEarlierLater = $MinStayEarlierLater;
      $this->WaiverDate = $WaiverDate;
      $this->WaiverEarlyLater = $WaiverEarlyLater;
      $this->WaiverPeriod = $WaiverPeriod;
      $this->WaiverUnit = $WaiverUnit;
    }

    /**
     * @return string
     */
    public function getOriginDayOfWeek()
    {
      return $this->OriginDayOfWeek;
    }

    /**
     * @param string $OriginDayOfWeek
     * @return \FilippoToso\Travelport\Air\MINSFRType
     */
    public function setOriginDayOfWeek($OriginDayOfWeek)
    {
      $this->OriginDayOfWeek = $OriginDayOfWeek;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnTime()
    {
      return $this->ReturnTime;
    }

    /**
     * @param string $ReturnTime
     * @return \FilippoToso\Travelport\Air\MINSFRType
     */
    public function setReturnTime($ReturnTime)
    {
      $this->ReturnTime = $ReturnTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinStay()
    {
      return $this->MinStay;
    }

    /**
     * @param string $MinStay
     * @return \FilippoToso\Travelport\Air\MINSFRType
     */
    public function setMinStay($MinStay)
    {
      $this->MinStay = $MinStay;
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
     * @return \FilippoToso\Travelport\Air\MINSFRType
     */
    public function setUnitOfTime($UnitOfTime)
    {
      $this->UnitOfTime = $UnitOfTime;
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
     * @return \FilippoToso\Travelport\Air\MINSFRType
     */
    public function setWaiver($Waiver)
    {
      $this->Waiver = $Waiver;
      return $this;
    }

    /**
     * @return date
     */
    public function getMinStayDate()
    {
      return $this->MinStayDate;
    }

    /**
     * @param date $MinStayDate
     * @return \FilippoToso\Travelport\Air\MINSFRType
     */
    public function setMinStayDate($MinStayDate)
    {
      $this->MinStayDate = $MinStayDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinStayEarlierLater()
    {
      return $this->MinStayEarlierLater;
    }

    /**
     * @param string $MinStayEarlierLater
     * @return \FilippoToso\Travelport\Air\MINSFRType
     */
    public function setMinStayEarlierLater($MinStayEarlierLater)
    {
      $this->MinStayEarlierLater = $MinStayEarlierLater;
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
     * @return \FilippoToso\Travelport\Air\MINSFRType
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
     * @return \FilippoToso\Travelport\Air\MINSFRType
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
     * @return \FilippoToso\Travelport\Air\MINSFRType
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
     * @return \FilippoToso\Travelport\Air\MINSFRType
     */
    public function setWaiverUnit($WaiverUnit)
    {
      $this->WaiverUnit = $WaiverUnit;
      return $this;
    }

}
