<?php

namespace FilippoToso\Travelport\Rail;

class CruiseSegment extends Segment
{

    /**
     * @var CruiseStay $CruiseStay
     */
    protected $CruiseStay = null;

    /**
     * @var StringLength1to3 $Vendor
     */
    protected $Vendor = null;

    /**
     * @var StringLength1to30 $VendorName
     */
    protected $VendorName = null;

    /**
     * @var StringLength1to5 $Origin
     */
    protected $Origin = null;

    /**
     * @var StringLength1to5 $Destination
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
     * @param SegmentRemark $SegmentRemark
     * @param typeRef $Key
     * @param string $Status
     * @param boolean $Passive
     * @param int $TravelOrder
     * @param anonymous195 $ProviderSegmentOrder
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param CruiseStay $CruiseStay
     * @param StringLength1to3 $Vendor
     * @param StringLength1to30 $VendorName
     * @param StringLength1to5 $Origin
     * @param StringLength1to5 $Destination
     * @param string $DepartureTime
     * @param string $ArrivalTime
     */
    public function __construct($SegmentRemark = null, $Key = null, $Status = null, $Passive = null, $TravelOrder = null, $ProviderSegmentOrder = null, $ElStat = null, $KeyOverride = null, $CruiseStay = null, $Vendor = null, $VendorName = null, $Origin = null, $Destination = null, $DepartureTime = null, $ArrivalTime = null)
    {
      parent::__construct($SegmentRemark, $Key, $Status, $Passive, $TravelOrder, $ProviderSegmentOrder, $ElStat, $KeyOverride);
      $this->CruiseStay = $CruiseStay;
      $this->Vendor = $Vendor;
      $this->VendorName = $VendorName;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
    }

    /**
     * @return CruiseStay
     */
    public function getCruiseStay()
    {
      return $this->CruiseStay;
    }

    /**
     * @param CruiseStay $CruiseStay
     * @return \FilippoToso\Travelport\Rail\CruiseSegment
     */
    public function setCruiseStay($CruiseStay)
    {
      $this->CruiseStay = $CruiseStay;
      return $this;
    }

    /**
     * @return StringLength1to3
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param StringLength1to3 $Vendor
     * @return \FilippoToso\Travelport\Rail\CruiseSegment
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getVendorName()
    {
      return $this->VendorName;
    }

    /**
     * @param StringLength1to30 $VendorName
     * @return \FilippoToso\Travelport\Rail\CruiseSegment
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

    /**
     * @return StringLength1to5
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param StringLength1to5 $Origin
     * @return \FilippoToso\Travelport\Rail\CruiseSegment
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return StringLength1to5
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param StringLength1to5 $Destination
     * @return \FilippoToso\Travelport\Rail\CruiseSegment
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
     * @return \FilippoToso\Travelport\Rail\CruiseSegment
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
     * @return \FilippoToso\Travelport\Rail\CruiseSegment
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

}
