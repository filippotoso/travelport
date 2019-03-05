<?php

namespace FilippoToso\Travelport\Util;

class CXRApplication
{

    /**
     * @var string $CXRAppInd
     */
    protected $CXRAppInd = null;

    /**
     * @var string $NumOfStopovers
     */
    protected $NumOfStopovers = null;

    /**
     * @var string $InboundCarrier
     */
    protected $InboundCarrier = null;

    /**
     * @var string $Application
     */
    protected $Application = null;

    /**
     * @var string $LocType
     */
    protected $LocType = null;

    /**
     * @var string $Loc1
     */
    protected $Loc1 = null;

    /**
     * @var string $Loc2
     */
    protected $Loc2 = null;

    /**
     * @var string $OutboundCarrier
     */
    protected $OutboundCarrier = null;

    /**
     * @var string $InOutBound
     */
    protected $InOutBound = null;

    /**
     * @var string $ChangeApplies
     */
    protected $ChangeApplies = null;

    /**
     * @param string $CXRAppInd
     * @param string $NumOfStopovers
     * @param string $InboundCarrier
     * @param string $Application
     * @param string $LocType
     * @param string $Loc1
     * @param string $Loc2
     * @param string $OutboundCarrier
     * @param string $InOutBound
     * @param string $ChangeApplies
     */
    public function __construct($CXRAppInd = null, $NumOfStopovers = null, $InboundCarrier = null, $Application = null, $LocType = null, $Loc1 = null, $Loc2 = null, $OutboundCarrier = null, $InOutBound = null, $ChangeApplies = null)
    {
      $this->CXRAppInd = $CXRAppInd;
      $this->NumOfStopovers = $NumOfStopovers;
      $this->InboundCarrier = $InboundCarrier;
      $this->Application = $Application;
      $this->LocType = $LocType;
      $this->Loc1 = $Loc1;
      $this->Loc2 = $Loc2;
      $this->OutboundCarrier = $OutboundCarrier;
      $this->InOutBound = $InOutBound;
      $this->ChangeApplies = $ChangeApplies;
    }

    /**
     * @return string
     */
    public function getCXRAppInd()
    {
      return $this->CXRAppInd;
    }

    /**
     * @param string $CXRAppInd
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setCXRAppInd($CXRAppInd)
    {
      $this->CXRAppInd = $CXRAppInd;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumOfStopovers()
    {
      return $this->NumOfStopovers;
    }

    /**
     * @param string $NumOfStopovers
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setNumOfStopovers($NumOfStopovers)
    {
      $this->NumOfStopovers = $NumOfStopovers;
      return $this;
    }

    /**
     * @return string
     */
    public function getInboundCarrier()
    {
      return $this->InboundCarrier;
    }

    /**
     * @param string $InboundCarrier
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setInboundCarrier($InboundCarrier)
    {
      $this->InboundCarrier = $InboundCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplication()
    {
      return $this->Application;
    }

    /**
     * @param string $Application
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setApplication($Application)
    {
      $this->Application = $Application;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocType()
    {
      return $this->LocType;
    }

    /**
     * @param string $LocType
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setLocType($LocType)
    {
      $this->LocType = $LocType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoc1()
    {
      return $this->Loc1;
    }

    /**
     * @param string $Loc1
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setLoc1($Loc1)
    {
      $this->Loc1 = $Loc1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoc2()
    {
      return $this->Loc2;
    }

    /**
     * @param string $Loc2
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setLoc2($Loc2)
    {
      $this->Loc2 = $Loc2;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutboundCarrier()
    {
      return $this->OutboundCarrier;
    }

    /**
     * @param string $OutboundCarrier
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setOutboundCarrier($OutboundCarrier)
    {
      $this->OutboundCarrier = $OutboundCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOutBound()
    {
      return $this->InOutBound;
    }

    /**
     * @param string $InOutBound
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setInOutBound($InOutBound)
    {
      $this->InOutBound = $InOutBound;
      return $this;
    }

    /**
     * @return string
     */
    public function getChangeApplies()
    {
      return $this->ChangeApplies;
    }

    /**
     * @param string $ChangeApplies
     * @return \FilippoToso\Travelport\Util\CXRApplication
     */
    public function setChangeApplies($ChangeApplies)
    {
      $this->ChangeApplies = $ChangeApplies;
      return $this;
    }

}
