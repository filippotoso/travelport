<?php

namespace FilippoToso\Travelport\Util;

class BaseReservation
{

    /**
     * @var AccountingRemark $AccountingRemark
     */
    protected $AccountingRemark = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    protected $GeneralRemark = null;

    /**
     * @var Restriction $Restriction
     */
    protected $Restriction = null;

    /**
     * @var PassiveInfo $PassiveInfo
     */
    protected $PassiveInfo = null;

    /**
     * @var typeLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var string $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @var string $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param Restriction $Restriction
     * @param PassiveInfo $PassiveInfo
     * @param typeLocatorCode $LocatorCode
     * @param string $CreateDate
     * @param string $ModifiedDate
     * @param string $CustomerNumber
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $Restriction = null, $PassiveInfo = null, $LocatorCode = null, $CreateDate = null, $ModifiedDate = null, $CustomerNumber = null)
    {
      $this->AccountingRemark = $AccountingRemark;
      $this->GeneralRemark = $GeneralRemark;
      $this->Restriction = $Restriction;
      $this->PassiveInfo = $PassiveInfo;
      $this->LocatorCode = $LocatorCode;
      $this->CreateDate = $CreateDate;
      $this->ModifiedDate = $ModifiedDate;
      $this->CustomerNumber = $CustomerNumber;
    }

    /**
     * @return AccountingRemark
     */
    public function getAccountingRemark()
    {
      return $this->AccountingRemark;
    }

    /**
     * @param AccountingRemark $AccountingRemark
     * @return \FilippoToso\Travelport\Util\BaseReservation
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\Util\BaseReservation
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return Restriction
     */
    public function getRestriction()
    {
      return $this->Restriction;
    }

    /**
     * @param Restriction $Restriction
     * @return \FilippoToso\Travelport\Util\BaseReservation
     */
    public function setRestriction($Restriction)
    {
      $this->Restriction = $Restriction;
      return $this;
    }

    /**
     * @return PassiveInfo
     */
    public function getPassiveInfo()
    {
      return $this->PassiveInfo;
    }

    /**
     * @param PassiveInfo $PassiveInfo
     * @return \FilippoToso\Travelport\Util\BaseReservation
     */
    public function setPassiveInfo($PassiveInfo)
    {
      $this->PassiveInfo = $PassiveInfo;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Util\BaseReservation
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
      return $this->CreateDate;
    }

    /**
     * @param string $CreateDate
     * @return \FilippoToso\Travelport\Util\BaseReservation
     */
    public function setCreateDate($CreateDate)
    {
      $this->CreateDate = $CreateDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param string $ModifiedDate
     * @return \FilippoToso\Travelport\Util\BaseReservation
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \FilippoToso\Travelport\Util\BaseReservation
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

}
