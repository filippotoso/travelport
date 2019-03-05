<?php

namespace FilippoToso\Travelport\Util;

class ADVSFRType
{

    /**
     * @var int $ResFirstTOD
     */
    protected $ResFirstTOD = null;

    /**
     * @var string $ResPeriodFirstTOD
     */
    protected $ResPeriodFirstTOD = null;

    /**
     * @var string $ResUnitFirstTOD
     */
    protected $ResUnitFirstTOD = null;

    /**
     * @var int $ResLastTOD
     */
    protected $ResLastTOD = null;

    /**
     * @var string $ResPeriodLastTOD
     */
    protected $ResPeriodLastTOD = null;

    /**
     * @var string $ResUnitLastTOD
     */
    protected $ResUnitLastTOD = null;

    /**
     * @var string $ResTSI
     */
    protected $ResTSI = null;

    /**
     * @var string $ResPermitted
     */
    protected $ResPermitted = null;

    /**
     * @var string $ResTkt
     */
    protected $ResTkt = null;

    /**
     * @var string $Standby
     */
    protected $Standby = null;

    /**
     * @var string $ConfirmedSector
     */
    protected $ConfirmedSector = null;

    /**
     * @var string $EachFareResProvision
     */
    protected $EachFareResProvision = null;

    /**
     * @var int $TktTOD
     */
    protected $TktTOD = null;

    /**
     * @var string $TktPeriod
     */
    protected $TktPeriod = null;

    /**
     * @var string $TktUnit
     */
    protected $TktUnit = null;

    /**
     * @var string $TktOption
     */
    protected $TktOption = null;

    /**
     * @var int $TimeBeforeDept
     */
    protected $TimeBeforeDept = null;

    /**
     * @var string $DeptTimeUnit
     */
    protected $DeptTimeUnit = null;

    /**
     * @var string $TktTSI
     */
    protected $TktTSI = null;

    /**
     * @var string $TktReq
     */
    protected $TktReq = null;

    /**
     * @var int $ExceptionTime
     */
    protected $ExceptionTime = null;

    /**
     * @var string $ExceptionTimeUnit
     */
    protected $ExceptionTimeUnit = null;

    /**
     * @var date $WaiverResDate
     */
    protected $WaiverResDate = null;

    /**
     * @var date $WaiverTktDate
     */
    protected $WaiverTktDate = null;

    /**
     * @param int $ResFirstTOD
     * @param string $ResPeriodFirstTOD
     * @param string $ResUnitFirstTOD
     * @param int $ResLastTOD
     * @param string $ResPeriodLastTOD
     * @param string $ResUnitLastTOD
     * @param string $ResTSI
     * @param string $ResPermitted
     * @param string $ResTkt
     * @param string $Standby
     * @param string $ConfirmedSector
     * @param string $EachFareResProvision
     * @param int $TktTOD
     * @param string $TktPeriod
     * @param string $TktUnit
     * @param string $TktOption
     * @param int $TimeBeforeDept
     * @param string $DeptTimeUnit
     * @param string $TktTSI
     * @param string $TktReq
     * @param int $ExceptionTime
     * @param string $ExceptionTimeUnit
     * @param date $WaiverResDate
     * @param date $WaiverTktDate
     */
    public function __construct($ResFirstTOD = null, $ResPeriodFirstTOD = null, $ResUnitFirstTOD = null, $ResLastTOD = null, $ResPeriodLastTOD = null, $ResUnitLastTOD = null, $ResTSI = null, $ResPermitted = null, $ResTkt = null, $Standby = null, $ConfirmedSector = null, $EachFareResProvision = null, $TktTOD = null, $TktPeriod = null, $TktUnit = null, $TktOption = null, $TimeBeforeDept = null, $DeptTimeUnit = null, $TktTSI = null, $TktReq = null, $ExceptionTime = null, $ExceptionTimeUnit = null, $WaiverResDate = null, $WaiverTktDate = null)
    {
      $this->ResFirstTOD = $ResFirstTOD;
      $this->ResPeriodFirstTOD = $ResPeriodFirstTOD;
      $this->ResUnitFirstTOD = $ResUnitFirstTOD;
      $this->ResLastTOD = $ResLastTOD;
      $this->ResPeriodLastTOD = $ResPeriodLastTOD;
      $this->ResUnitLastTOD = $ResUnitLastTOD;
      $this->ResTSI = $ResTSI;
      $this->ResPermitted = $ResPermitted;
      $this->ResTkt = $ResTkt;
      $this->Standby = $Standby;
      $this->ConfirmedSector = $ConfirmedSector;
      $this->EachFareResProvision = $EachFareResProvision;
      $this->TktTOD = $TktTOD;
      $this->TktPeriod = $TktPeriod;
      $this->TktUnit = $TktUnit;
      $this->TktOption = $TktOption;
      $this->TimeBeforeDept = $TimeBeforeDept;
      $this->DeptTimeUnit = $DeptTimeUnit;
      $this->TktTSI = $TktTSI;
      $this->TktReq = $TktReq;
      $this->ExceptionTime = $ExceptionTime;
      $this->ExceptionTimeUnit = $ExceptionTimeUnit;
      $this->WaiverResDate = $WaiverResDate;
      $this->WaiverTktDate = $WaiverTktDate;
    }

    /**
     * @return int
     */
    public function getResFirstTOD()
    {
      return $this->ResFirstTOD;
    }

    /**
     * @param int $ResFirstTOD
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setResFirstTOD($ResFirstTOD)
    {
      $this->ResFirstTOD = $ResFirstTOD;
      return $this;
    }

    /**
     * @return string
     */
    public function getResPeriodFirstTOD()
    {
      return $this->ResPeriodFirstTOD;
    }

    /**
     * @param string $ResPeriodFirstTOD
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setResPeriodFirstTOD($ResPeriodFirstTOD)
    {
      $this->ResPeriodFirstTOD = $ResPeriodFirstTOD;
      return $this;
    }

    /**
     * @return string
     */
    public function getResUnitFirstTOD()
    {
      return $this->ResUnitFirstTOD;
    }

    /**
     * @param string $ResUnitFirstTOD
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setResUnitFirstTOD($ResUnitFirstTOD)
    {
      $this->ResUnitFirstTOD = $ResUnitFirstTOD;
      return $this;
    }

    /**
     * @return int
     */
    public function getResLastTOD()
    {
      return $this->ResLastTOD;
    }

    /**
     * @param int $ResLastTOD
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setResLastTOD($ResLastTOD)
    {
      $this->ResLastTOD = $ResLastTOD;
      return $this;
    }

    /**
     * @return string
     */
    public function getResPeriodLastTOD()
    {
      return $this->ResPeriodLastTOD;
    }

    /**
     * @param string $ResPeriodLastTOD
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setResPeriodLastTOD($ResPeriodLastTOD)
    {
      $this->ResPeriodLastTOD = $ResPeriodLastTOD;
      return $this;
    }

    /**
     * @return string
     */
    public function getResUnitLastTOD()
    {
      return $this->ResUnitLastTOD;
    }

    /**
     * @param string $ResUnitLastTOD
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setResUnitLastTOD($ResUnitLastTOD)
    {
      $this->ResUnitLastTOD = $ResUnitLastTOD;
      return $this;
    }

    /**
     * @return string
     */
    public function getResTSI()
    {
      return $this->ResTSI;
    }

    /**
     * @param string $ResTSI
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setResTSI($ResTSI)
    {
      $this->ResTSI = $ResTSI;
      return $this;
    }

    /**
     * @return string
     */
    public function getResPermitted()
    {
      return $this->ResPermitted;
    }

    /**
     * @param string $ResPermitted
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setResPermitted($ResPermitted)
    {
      $this->ResPermitted = $ResPermitted;
      return $this;
    }

    /**
     * @return string
     */
    public function getResTkt()
    {
      return $this->ResTkt;
    }

    /**
     * @param string $ResTkt
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setResTkt($ResTkt)
    {
      $this->ResTkt = $ResTkt;
      return $this;
    }

    /**
     * @return string
     */
    public function getStandby()
    {
      return $this->Standby;
    }

    /**
     * @param string $Standby
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setStandby($Standby)
    {
      $this->Standby = $Standby;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmedSector()
    {
      return $this->ConfirmedSector;
    }

    /**
     * @param string $ConfirmedSector
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setConfirmedSector($ConfirmedSector)
    {
      $this->ConfirmedSector = $ConfirmedSector;
      return $this;
    }

    /**
     * @return string
     */
    public function getEachFareResProvision()
    {
      return $this->EachFareResProvision;
    }

    /**
     * @param string $EachFareResProvision
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setEachFareResProvision($EachFareResProvision)
    {
      $this->EachFareResProvision = $EachFareResProvision;
      return $this;
    }

    /**
     * @return int
     */
    public function getTktTOD()
    {
      return $this->TktTOD;
    }

    /**
     * @param int $TktTOD
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setTktTOD($TktTOD)
    {
      $this->TktTOD = $TktTOD;
      return $this;
    }

    /**
     * @return string
     */
    public function getTktPeriod()
    {
      return $this->TktPeriod;
    }

    /**
     * @param string $TktPeriod
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setTktPeriod($TktPeriod)
    {
      $this->TktPeriod = $TktPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getTktUnit()
    {
      return $this->TktUnit;
    }

    /**
     * @param string $TktUnit
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setTktUnit($TktUnit)
    {
      $this->TktUnit = $TktUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getTktOption()
    {
      return $this->TktOption;
    }

    /**
     * @param string $TktOption
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setTktOption($TktOption)
    {
      $this->TktOption = $TktOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeBeforeDept()
    {
      return $this->TimeBeforeDept;
    }

    /**
     * @param int $TimeBeforeDept
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setTimeBeforeDept($TimeBeforeDept)
    {
      $this->TimeBeforeDept = $TimeBeforeDept;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeptTimeUnit()
    {
      return $this->DeptTimeUnit;
    }

    /**
     * @param string $DeptTimeUnit
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setDeptTimeUnit($DeptTimeUnit)
    {
      $this->DeptTimeUnit = $DeptTimeUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getTktTSI()
    {
      return $this->TktTSI;
    }

    /**
     * @param string $TktTSI
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setTktTSI($TktTSI)
    {
      $this->TktTSI = $TktTSI;
      return $this;
    }

    /**
     * @return string
     */
    public function getTktReq()
    {
      return $this->TktReq;
    }

    /**
     * @param string $TktReq
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setTktReq($TktReq)
    {
      $this->TktReq = $TktReq;
      return $this;
    }

    /**
     * @return int
     */
    public function getExceptionTime()
    {
      return $this->ExceptionTime;
    }

    /**
     * @param int $ExceptionTime
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setExceptionTime($ExceptionTime)
    {
      $this->ExceptionTime = $ExceptionTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionTimeUnit()
    {
      return $this->ExceptionTimeUnit;
    }

    /**
     * @param string $ExceptionTimeUnit
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setExceptionTimeUnit($ExceptionTimeUnit)
    {
      $this->ExceptionTimeUnit = $ExceptionTimeUnit;
      return $this;
    }

    /**
     * @return date
     */
    public function getWaiverResDate()
    {
      return $this->WaiverResDate;
    }

    /**
     * @param date $WaiverResDate
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setWaiverResDate($WaiverResDate)
    {
      $this->WaiverResDate = $WaiverResDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getWaiverTktDate()
    {
      return $this->WaiverTktDate;
    }

    /**
     * @param date $WaiverTktDate
     * @return \FilippoToso\Travelport\Util\ADVSFRType
     */
    public function setWaiverTktDate($WaiverTktDate)
    {
      $this->WaiverTktDate = $WaiverTktDate;
      return $this;
    }

}
