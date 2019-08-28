<?php

namespace FilippoToso\Travelport\GDSQueue;

class CruiseStay
{

    /**
     * @var Package $Package
     */
    protected $Package = null;

    /**
     * @var CabinInfo $CabinInfo
     */
    protected $CabinInfo = null;

    /**
     * @var DiningInfo $DiningInfo
     */
    protected $DiningInfo = null;

    /**
     * @var StringLength1to25 $ShipName
     */
    protected $ShipName = null;

    /**
     * @var int $DurationOfStay
     */
    protected $DurationOfStay = null;

    /**
     * @var string $UnitOfStay
     */
    protected $UnitOfStay = null;

    /**
     * @var date $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @var StringLength1to12 $BookingAgent
     */
    protected $BookingAgent = null;

    /**
     * @var StringLength1to10 $BookingCredit
     */
    protected $BookingCredit = null;

    /**
     * @var int $OtherPartyConfNbr
     */
    protected $OtherPartyConfNbr = null;

    /**
     * @var StringLength1to5 $PassengerOrigin
     */
    protected $PassengerOrigin = null;

    /**
     * @var StringLength1to16 $ConfirmationNumber
     */
    protected $ConfirmationNumber = null;

    /**
     * @var StringLength1to16 $LinkedConfNumber
     */
    protected $LinkedConfNumber = null;

    /**
     * @var StringLength1to16 $CancellationNumber
     */
    protected $CancellationNumber = null;

    /**
     * @var date $CancellationDate
     */
    protected $CancellationDate = null;

    /**
     * @var time $CancellationTime
     */
    protected $CancellationTime = null;

    /**
     * @param CabinInfo $CabinInfo
     * @param StringLength1to25 $ShipName
     * @param int $DurationOfStay
     * @param string $UnitOfStay
     * @param date $BookingDate
     * @param StringLength1to12 $BookingAgent
     * @param StringLength1to10 $BookingCredit
     * @param int $OtherPartyConfNbr
     * @param StringLength1to5 $PassengerOrigin
     * @param StringLength1to16 $ConfirmationNumber
     * @param StringLength1to16 $LinkedConfNumber
     * @param StringLength1to16 $CancellationNumber
     * @param date $CancellationDate
     * @param time $CancellationTime
     */
    public function __construct($CabinInfo = null, $ShipName = null, $DurationOfStay = null, $UnitOfStay = null, $BookingDate = null, $BookingAgent = null, $BookingCredit = null, $OtherPartyConfNbr = null, $PassengerOrigin = null, $ConfirmationNumber = null, $LinkedConfNumber = null, $CancellationNumber = null, $CancellationDate = null, $CancellationTime = null)
    {
      $this->CabinInfo = $CabinInfo;
      $this->ShipName = $ShipName;
      $this->DurationOfStay = $DurationOfStay;
      $this->UnitOfStay = $UnitOfStay;
      $this->BookingDate = $BookingDate;
      $this->BookingAgent = $BookingAgent;
      $this->BookingCredit = $BookingCredit;
      $this->OtherPartyConfNbr = $OtherPartyConfNbr;
      $this->PassengerOrigin = $PassengerOrigin;
      $this->ConfirmationNumber = $ConfirmationNumber;
      $this->LinkedConfNumber = $LinkedConfNumber;
      $this->CancellationNumber = $CancellationNumber;
      $this->CancellationDate = $CancellationDate;
      $this->CancellationTime = $CancellationTime;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
      return $this->Package;
    }

    /**
     * @param Package $Package
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setPackage($Package)
    {
      $this->Package = $Package;
      return $this;
    }

    /**
     * @return CabinInfo
     */
    public function getCabinInfo()
    {
      return $this->CabinInfo;
    }

    /**
     * @param CabinInfo $CabinInfo
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setCabinInfo($CabinInfo)
    {
      $this->CabinInfo = $CabinInfo;
      return $this;
    }

    /**
     * @return DiningInfo
     */
    public function getDiningInfo()
    {
      return $this->DiningInfo;
    }

    /**
     * @param DiningInfo $DiningInfo
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setDiningInfo($DiningInfo)
    {
      $this->DiningInfo = $DiningInfo;
      return $this;
    }

    /**
     * @return StringLength1to25
     */
    public function getShipName()
    {
      return $this->ShipName;
    }

    /**
     * @param StringLength1to25 $ShipName
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setShipName($ShipName)
    {
      $this->ShipName = $ShipName;
      return $this;
    }

    /**
     * @return int
     */
    public function getDurationOfStay()
    {
      return $this->DurationOfStay;
    }

    /**
     * @param int $DurationOfStay
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setDurationOfStay($DurationOfStay)
    {
      $this->DurationOfStay = $DurationOfStay;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfStay()
    {
      return $this->UnitOfStay;
    }

    /**
     * @param string $UnitOfStay
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setUnitOfStay($UnitOfStay)
    {
      $this->UnitOfStay = $UnitOfStay;
      return $this;
    }

    /**
     * @return date
     */
    public function getBookingDate()
    {
      return $this->BookingDate;
    }

    /**
     * @param date $BookingDate
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setBookingDate($BookingDate)
    {
      $this->BookingDate = $BookingDate;
      return $this;
    }

    /**
     * @return StringLength1to12
     */
    public function getBookingAgent()
    {
      return $this->BookingAgent;
    }

    /**
     * @param StringLength1to12 $BookingAgent
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setBookingAgent($BookingAgent)
    {
      $this->BookingAgent = $BookingAgent;
      return $this;
    }

    /**
     * @return StringLength1to10
     */
    public function getBookingCredit()
    {
      return $this->BookingCredit;
    }

    /**
     * @param StringLength1to10 $BookingCredit
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setBookingCredit($BookingCredit)
    {
      $this->BookingCredit = $BookingCredit;
      return $this;
    }

    /**
     * @return int
     */
    public function getOtherPartyConfNbr()
    {
      return $this->OtherPartyConfNbr;
    }

    /**
     * @param int $OtherPartyConfNbr
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setOtherPartyConfNbr($OtherPartyConfNbr)
    {
      $this->OtherPartyConfNbr = $OtherPartyConfNbr;
      return $this;
    }

    /**
     * @return StringLength1to5
     */
    public function getPassengerOrigin()
    {
      return $this->PassengerOrigin;
    }

    /**
     * @param StringLength1to5 $PassengerOrigin
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setPassengerOrigin($PassengerOrigin)
    {
      $this->PassengerOrigin = $PassengerOrigin;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getConfirmationNumber()
    {
      return $this->ConfirmationNumber;
    }

    /**
     * @param StringLength1to16 $ConfirmationNumber
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setConfirmationNumber($ConfirmationNumber)
    {
      $this->ConfirmationNumber = $ConfirmationNumber;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getLinkedConfNumber()
    {
      return $this->LinkedConfNumber;
    }

    /**
     * @param StringLength1to16 $LinkedConfNumber
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setLinkedConfNumber($LinkedConfNumber)
    {
      $this->LinkedConfNumber = $LinkedConfNumber;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getCancellationNumber()
    {
      return $this->CancellationNumber;
    }

    /**
     * @param StringLength1to16 $CancellationNumber
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setCancellationNumber($CancellationNumber)
    {
      $this->CancellationNumber = $CancellationNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getCancellationDate()
    {
      return $this->CancellationDate;
    }

    /**
     * @param date $CancellationDate
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setCancellationDate($CancellationDate)
    {
      $this->CancellationDate = $CancellationDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getCancellationTime()
    {
      return $this->CancellationTime;
    }

    /**
     * @param time $CancellationTime
     * @return \FilippoToso\Travelport\GDSQueue\CruiseStay
     */
    public function setCancellationTime($CancellationTime)
    {
      $this->CancellationTime = $CancellationTime;
      return $this;
    }

}
