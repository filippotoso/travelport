<?php

namespace FilippoToso\Travelport\UniversalRecord;

class STP
{

    /**
     * @var CXRApplicationDetailsType[] $CXRApplicationDetailsType
     */
    protected $CXRApplicationDetailsType = null;

    /**
     * @var string $MinStopsPermitted
     */
    protected $MinStopsPermitted = null;

    /**
     * @var string $MaxStopsPermitted
     */
    protected $MaxStopsPermitted = null;

    /**
     * @var string $OutboundStopsPermitted
     */
    protected $OutboundStopsPermitted = null;

    /**
     * @var string $InboundStopsPermitted
     */
    protected $InboundStopsPermitted = null;

    /**
     * @var string $OutIn
     */
    protected $OutIn = null;

    /**
     * @var string $OpenJaw
     */
    protected $OpenJaw = null;

    /**
     * @var string $CircleTrip
     */
    protected $CircleTrip = null;

    /**
     * @var string $CircleTripPlus
     */
    protected $CircleTripPlus = null;

    /**
     * @var string $Gateway
     */
    protected $Gateway = null;

    /**
     * @var int $MinTime
     */
    protected $MinTime = null;

    /**
     * @var string $MinUnitOfTime
     */
    protected $MinUnitOfTime = null;

    /**
     * @var int $MaxTime
     */
    protected $MaxTime = null;

    /**
     * @var string $MaxUnitOfTime
     */
    protected $MaxUnitOfTime = null;

    /**
     * @var string $SamePointStops
     */
    protected $SamePointStops = null;

    /**
     * @var string $Transfers
     */
    protected $Transfers = null;

    /**
     * @var string $Connections
     */
    protected $Connections = null;

    /**
     * @var string $Charge
     */
    protected $Charge = null;

    /**
     * @var string $FirstNumber
     */
    protected $FirstNumber = null;

    /**
     * @var int $Charges1
     */
    protected $Charges1 = null;

    /**
     * @var string $AddtlNum1
     */
    protected $AddtlNum1 = null;

    /**
     * @var int $AddtlAmt1
     */
    protected $AddtlAmt1 = null;

    /**
     * @var string $Currency1
     */
    protected $Currency1 = null;

    /**
     * @var int $Decimal1
     */
    protected $Decimal1 = null;

    /**
     * @var int $Charges2
     */
    protected $Charges2 = null;

    /**
     * @var int $AddtlAmt2
     */
    protected $AddtlAmt2 = null;

    /**
     * @var string $Currency2
     */
    protected $Currency2 = null;

    /**
     * @var int $Decimal2
     */
    protected $Decimal2 = null;

    /**
     * @var int $SegCount
     */
    protected $SegCount = null;

    /**
     * @param string $MinStopsPermitted
     * @param string $MaxStopsPermitted
     * @param string $OutboundStopsPermitted
     * @param string $InboundStopsPermitted
     * @param string $OutIn
     * @param string $OpenJaw
     * @param string $CircleTrip
     * @param string $CircleTripPlus
     * @param string $Gateway
     * @param int $MinTime
     * @param string $MinUnitOfTime
     * @param int $MaxTime
     * @param string $MaxUnitOfTime
     * @param string $SamePointStops
     * @param string $Transfers
     * @param string $Connections
     * @param string $Charge
     * @param string $FirstNumber
     * @param int $Charges1
     * @param string $AddtlNum1
     * @param int $AddtlAmt1
     * @param string $Currency1
     * @param int $Decimal1
     * @param int $Charges2
     * @param int $AddtlAmt2
     * @param string $Currency2
     * @param int $Decimal2
     * @param int $SegCount
     */
    public function __construct($MinStopsPermitted = null, $MaxStopsPermitted = null, $OutboundStopsPermitted = null, $InboundStopsPermitted = null, $OutIn = null, $OpenJaw = null, $CircleTrip = null, $CircleTripPlus = null, $Gateway = null, $MinTime = null, $MinUnitOfTime = null, $MaxTime = null, $MaxUnitOfTime = null, $SamePointStops = null, $Transfers = null, $Connections = null, $Charge = null, $FirstNumber = null, $Charges1 = null, $AddtlNum1 = null, $AddtlAmt1 = null, $Currency1 = null, $Decimal1 = null, $Charges2 = null, $AddtlAmt2 = null, $Currency2 = null, $Decimal2 = null, $SegCount = null)
    {
      $this->MinStopsPermitted = $MinStopsPermitted;
      $this->MaxStopsPermitted = $MaxStopsPermitted;
      $this->OutboundStopsPermitted = $OutboundStopsPermitted;
      $this->InboundStopsPermitted = $InboundStopsPermitted;
      $this->OutIn = $OutIn;
      $this->OpenJaw = $OpenJaw;
      $this->CircleTrip = $CircleTrip;
      $this->CircleTripPlus = $CircleTripPlus;
      $this->Gateway = $Gateway;
      $this->MinTime = $MinTime;
      $this->MinUnitOfTime = $MinUnitOfTime;
      $this->MaxTime = $MaxTime;
      $this->MaxUnitOfTime = $MaxUnitOfTime;
      $this->SamePointStops = $SamePointStops;
      $this->Transfers = $Transfers;
      $this->Connections = $Connections;
      $this->Charge = $Charge;
      $this->FirstNumber = $FirstNumber;
      $this->Charges1 = $Charges1;
      $this->AddtlNum1 = $AddtlNum1;
      $this->AddtlAmt1 = $AddtlAmt1;
      $this->Currency1 = $Currency1;
      $this->Decimal1 = $Decimal1;
      $this->Charges2 = $Charges2;
      $this->AddtlAmt2 = $AddtlAmt2;
      $this->Currency2 = $Currency2;
      $this->Decimal2 = $Decimal2;
      $this->SegCount = $SegCount;
    }

    /**
     * @return CXRApplicationDetailsType[]
     */
    public function getCXRApplicationDetailsType()
    {
      return $this->CXRApplicationDetailsType;
    }

    /**
     * @param CXRApplicationDetailsType[] $CXRApplicationDetailsType
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setCXRApplicationDetailsType(array $CXRApplicationDetailsType = null)
    {
      $this->CXRApplicationDetailsType = $CXRApplicationDetailsType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinStopsPermitted()
    {
      return $this->MinStopsPermitted;
    }

    /**
     * @param string $MinStopsPermitted
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setMinStopsPermitted($MinStopsPermitted)
    {
      $this->MinStopsPermitted = $MinStopsPermitted;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxStopsPermitted()
    {
      return $this->MaxStopsPermitted;
    }

    /**
     * @param string $MaxStopsPermitted
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setMaxStopsPermitted($MaxStopsPermitted)
    {
      $this->MaxStopsPermitted = $MaxStopsPermitted;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutboundStopsPermitted()
    {
      return $this->OutboundStopsPermitted;
    }

    /**
     * @param string $OutboundStopsPermitted
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setOutboundStopsPermitted($OutboundStopsPermitted)
    {
      $this->OutboundStopsPermitted = $OutboundStopsPermitted;
      return $this;
    }

    /**
     * @return string
     */
    public function getInboundStopsPermitted()
    {
      return $this->InboundStopsPermitted;
    }

    /**
     * @param string $InboundStopsPermitted
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setInboundStopsPermitted($InboundStopsPermitted)
    {
      $this->InboundStopsPermitted = $InboundStopsPermitted;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutIn()
    {
      return $this->OutIn;
    }

    /**
     * @param string $OutIn
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setOutIn($OutIn)
    {
      $this->OutIn = $OutIn;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpenJaw()
    {
      return $this->OpenJaw;
    }

    /**
     * @param string $OpenJaw
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setOpenJaw($OpenJaw)
    {
      $this->OpenJaw = $OpenJaw;
      return $this;
    }

    /**
     * @return string
     */
    public function getCircleTrip()
    {
      return $this->CircleTrip;
    }

    /**
     * @param string $CircleTrip
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setCircleTrip($CircleTrip)
    {
      $this->CircleTrip = $CircleTrip;
      return $this;
    }

    /**
     * @return string
     */
    public function getCircleTripPlus()
    {
      return $this->CircleTripPlus;
    }

    /**
     * @param string $CircleTripPlus
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setCircleTripPlus($CircleTripPlus)
    {
      $this->CircleTripPlus = $CircleTripPlus;
      return $this;
    }

    /**
     * @return string
     */
    public function getGateway()
    {
      return $this->Gateway;
    }

    /**
     * @param string $Gateway
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setGateway($Gateway)
    {
      $this->Gateway = $Gateway;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinTime()
    {
      return $this->MinTime;
    }

    /**
     * @param int $MinTime
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setMinTime($MinTime)
    {
      $this->MinTime = $MinTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinUnitOfTime()
    {
      return $this->MinUnitOfTime;
    }

    /**
     * @param string $MinUnitOfTime
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setMinUnitOfTime($MinUnitOfTime)
    {
      $this->MinUnitOfTime = $MinUnitOfTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxTime()
    {
      return $this->MaxTime;
    }

    /**
     * @param int $MaxTime
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setMaxTime($MaxTime)
    {
      $this->MaxTime = $MaxTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxUnitOfTime()
    {
      return $this->MaxUnitOfTime;
    }

    /**
     * @param string $MaxUnitOfTime
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setMaxUnitOfTime($MaxUnitOfTime)
    {
      $this->MaxUnitOfTime = $MaxUnitOfTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getSamePointStops()
    {
      return $this->SamePointStops;
    }

    /**
     * @param string $SamePointStops
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setSamePointStops($SamePointStops)
    {
      $this->SamePointStops = $SamePointStops;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransfers()
    {
      return $this->Transfers;
    }

    /**
     * @param string $Transfers
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setTransfers($Transfers)
    {
      $this->Transfers = $Transfers;
      return $this;
    }

    /**
     * @return string
     */
    public function getConnections()
    {
      return $this->Connections;
    }

    /**
     * @param string $Connections
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setConnections($Connections)
    {
      $this->Connections = $Connections;
      return $this;
    }

    /**
     * @return string
     */
    public function getCharge()
    {
      return $this->Charge;
    }

    /**
     * @param string $Charge
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setCharge($Charge)
    {
      $this->Charge = $Charge;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstNumber()
    {
      return $this->FirstNumber;
    }

    /**
     * @param string $FirstNumber
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setFirstNumber($FirstNumber)
    {
      $this->FirstNumber = $FirstNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharges1()
    {
      return $this->Charges1;
    }

    /**
     * @param int $Charges1
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setCharges1($Charges1)
    {
      $this->Charges1 = $Charges1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddtlNum1()
    {
      return $this->AddtlNum1;
    }

    /**
     * @param string $AddtlNum1
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setAddtlNum1($AddtlNum1)
    {
      $this->AddtlNum1 = $AddtlNum1;
      return $this;
    }

    /**
     * @return int
     */
    public function getAddtlAmt1()
    {
      return $this->AddtlAmt1;
    }

    /**
     * @param int $AddtlAmt1
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setAddtlAmt1($AddtlAmt1)
    {
      $this->AddtlAmt1 = $AddtlAmt1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency1()
    {
      return $this->Currency1;
    }

    /**
     * @param string $Currency1
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setCurrency1($Currency1)
    {
      $this->Currency1 = $Currency1;
      return $this;
    }

    /**
     * @return int
     */
    public function getDecimal1()
    {
      return $this->Decimal1;
    }

    /**
     * @param int $Decimal1
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setDecimal1($Decimal1)
    {
      $this->Decimal1 = $Decimal1;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharges2()
    {
      return $this->Charges2;
    }

    /**
     * @param int $Charges2
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setCharges2($Charges2)
    {
      $this->Charges2 = $Charges2;
      return $this;
    }

    /**
     * @return int
     */
    public function getAddtlAmt2()
    {
      return $this->AddtlAmt2;
    }

    /**
     * @param int $AddtlAmt2
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setAddtlAmt2($AddtlAmt2)
    {
      $this->AddtlAmt2 = $AddtlAmt2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency2()
    {
      return $this->Currency2;
    }

    /**
     * @param string $Currency2
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setCurrency2($Currency2)
    {
      $this->Currency2 = $Currency2;
      return $this;
    }

    /**
     * @return int
     */
    public function getDecimal2()
    {
      return $this->Decimal2;
    }

    /**
     * @param int $Decimal2
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setDecimal2($Decimal2)
    {
      $this->Decimal2 = $Decimal2;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegCount()
    {
      return $this->SegCount;
    }

    /**
     * @param int $SegCount
     * @return \FilippoToso\Travelport\UniversalRecord\STP
     */
    public function setSegCount($SegCount)
    {
      $this->SegCount = $SegCount;
      return $this;
    }

}
