<?php

namespace FilippoToso\Travelport\Util;

class Coupon
{

    /**
     * @var TicketDesignator $TicketDesignator
     */
    protected $TicketDesignator = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var int $CouponNumber
     */
    protected $CouponNumber = null;

    /**
     * @var typeCarrier $OperatingCarrier
     */
    protected $OperatingCarrier = null;

    /**
     * @var typeFlightNumber $OperatingFlightNumber
     */
    protected $OperatingFlightNumber = null;

    /**
     * @var typeCarrier $MarketingCarrier
     */
    protected $MarketingCarrier = null;

    /**
     * @var typeFlightNumber $MarketingFlightNumber
     */
    protected $MarketingFlightNumber = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var string $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var string $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @var boolean $StopoverCode
     */
    protected $StopoverCode = null;

    /**
     * @var anonymous768 $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var date $NotValidBefore
     */
    protected $NotValidBefore = null;

    /**
     * @var date $NotValidAfter
     */
    protected $NotValidAfter = null;

    /**
     * @var anonymous769 $Status
     */
    protected $Status = null;

    /**
     * @var int $SegmentGroup
     */
    protected $SegmentGroup = null;

    /**
     * @var int $MarriageGroup
     */
    protected $MarriageGroup = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param TicketDesignator $TicketDesignator
     * @param typeRef $Key
     * @param int $CouponNumber
     * @param typeCarrier $OperatingCarrier
     * @param typeFlightNumber $OperatingFlightNumber
     * @param typeCarrier $MarketingCarrier
     * @param typeFlightNumber $MarketingFlightNumber
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $DepartureTime
     * @param string $ArrivalTime
     * @param boolean $StopoverCode
     * @param anonymous768 $BookingClass
     * @param string $FareBasis
     * @param date $NotValidBefore
     * @param date $NotValidAfter
     * @param anonymous769 $Status
     * @param int $SegmentGroup
     * @param int $MarriageGroup
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($TicketDesignator = null, $Key = null, $CouponNumber = null, $OperatingCarrier = null, $OperatingFlightNumber = null, $MarketingCarrier = null, $MarketingFlightNumber = null, $Origin = null, $Destination = null, $DepartureTime = null, $ArrivalTime = null, $StopoverCode = null, $BookingClass = null, $FareBasis = null, $NotValidBefore = null, $NotValidAfter = null, $Status = null, $SegmentGroup = null, $MarriageGroup = null, $ElStat = null, $KeyOverride = null)
    {
      $this->TicketDesignator = $TicketDesignator;
      $this->Key = $Key;
      $this->CouponNumber = $CouponNumber;
      $this->OperatingCarrier = $OperatingCarrier;
      $this->OperatingFlightNumber = $OperatingFlightNumber;
      $this->MarketingCarrier = $MarketingCarrier;
      $this->MarketingFlightNumber = $MarketingFlightNumber;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
      $this->StopoverCode = $StopoverCode;
      $this->BookingClass = $BookingClass;
      $this->FareBasis = $FareBasis;
      $this->NotValidBefore = $NotValidBefore;
      $this->NotValidAfter = $NotValidAfter;
      $this->Status = $Status;
      $this->SegmentGroup = $SegmentGroup;
      $this->MarriageGroup = $MarriageGroup;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return TicketDesignator
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param TicketDesignator $TicketDesignator
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getCouponNumber()
    {
      return $this->CouponNumber;
    }

    /**
     * @param int $CouponNumber
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setCouponNumber($CouponNumber)
    {
      $this->CouponNumber = $CouponNumber;
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
     * @return \FilippoToso\Travelport\Util\Coupon
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
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setOperatingFlightNumber($OperatingFlightNumber)
    {
      $this->OperatingFlightNumber = $OperatingFlightNumber;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getMarketingCarrier()
    {
      return $this->MarketingCarrier;
    }

    /**
     * @param typeCarrier $MarketingCarrier
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setMarketingCarrier($MarketingCarrier)
    {
      $this->MarketingCarrier = $MarketingCarrier;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getMarketingFlightNumber()
    {
      return $this->MarketingFlightNumber;
    }

    /**
     * @param typeFlightNumber $MarketingFlightNumber
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setMarketingFlightNumber($MarketingFlightNumber)
    {
      $this->MarketingFlightNumber = $MarketingFlightNumber;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param string $DepartureTime
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param string $ArrivalTime
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStopoverCode()
    {
      return $this->StopoverCode;
    }

    /**
     * @param boolean $StopoverCode
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setStopoverCode($StopoverCode)
    {
      $this->StopoverCode = $StopoverCode;
      return $this;
    }

    /**
     * @return anonymous768
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param anonymous768 $BookingClass
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidBefore()
    {
      return $this->NotValidBefore;
    }

    /**
     * @param date $NotValidBefore
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setNotValidBefore($NotValidBefore)
    {
      $this->NotValidBefore = $NotValidBefore;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidAfter()
    {
      return $this->NotValidAfter;
    }

    /**
     * @param date $NotValidAfter
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setNotValidAfter($NotValidAfter)
    {
      $this->NotValidAfter = $NotValidAfter;
      return $this;
    }

    /**
     * @return anonymous769
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param anonymous769 $Status
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentGroup()
    {
      return $this->SegmentGroup;
    }

    /**
     * @param int $SegmentGroup
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setSegmentGroup($SegmentGroup)
    {
      $this->SegmentGroup = $SegmentGroup;
      return $this;
    }

    /**
     * @return int
     */
    public function getMarriageGroup()
    {
      return $this->MarriageGroup;
    }

    /**
     * @param int $MarriageGroup
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setMarriageGroup($MarriageGroup)
    {
      $this->MarriageGroup = $MarriageGroup;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Util\Coupon
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
