<?php

namespace FilippoToso\Travelport\GDSQueue;

class EMD
{

    /**
     * @var anonymous919 $FulfillmentType
     */
    protected $FulfillmentType = null;

    /**
     * @var string $FulfillmentTypeDescription
     */
    protected $FulfillmentTypeDescription = null;

    /**
     * @var string $AssociatedItem
     */
    protected $AssociatedItem = null;

    /**
     * @var anonymous920 $AvailabilityChargeIndicator
     */
    protected $AvailabilityChargeIndicator = null;

    /**
     * @var anonymous921 $RefundReissueIndicator
     */
    protected $RefundReissueIndicator = null;

    /**
     * @var anonymous922 $Commissionable
     */
    protected $Commissionable = null;

    /**
     * @var anonymous923 $MileageIndicator
     */
    protected $MileageIndicator = null;

    /**
     * @var anonymous924 $Location
     */
    protected $Location = null;

    /**
     * @var anonymous925 $Date
     */
    protected $Date = null;

    /**
     * @var anonymous926 $Booking
     */
    protected $Booking = null;

    /**
     * @var anonymous927 $DisplayCategory
     */
    protected $DisplayCategory = null;

    /**
     * @var boolean $Reusable
     */
    protected $Reusable = null;

    /**
     * @param anonymous919 $FulfillmentType
     * @param string $FulfillmentTypeDescription
     * @param string $AssociatedItem
     * @param anonymous920 $AvailabilityChargeIndicator
     * @param anonymous921 $RefundReissueIndicator
     * @param anonymous922 $Commissionable
     * @param anonymous923 $MileageIndicator
     * @param anonymous924 $Location
     * @param anonymous925 $Date
     * @param anonymous926 $Booking
     * @param anonymous927 $DisplayCategory
     * @param boolean $Reusable
     */
    public function __construct($FulfillmentType = null, $FulfillmentTypeDescription = null, $AssociatedItem = null, $AvailabilityChargeIndicator = null, $RefundReissueIndicator = null, $Commissionable = null, $MileageIndicator = null, $Location = null, $Date = null, $Booking = null, $DisplayCategory = null, $Reusable = null)
    {
      $this->FulfillmentType = $FulfillmentType;
      $this->FulfillmentTypeDescription = $FulfillmentTypeDescription;
      $this->AssociatedItem = $AssociatedItem;
      $this->AvailabilityChargeIndicator = $AvailabilityChargeIndicator;
      $this->RefundReissueIndicator = $RefundReissueIndicator;
      $this->Commissionable = $Commissionable;
      $this->MileageIndicator = $MileageIndicator;
      $this->Location = $Location;
      $this->Date = $Date;
      $this->Booking = $Booking;
      $this->DisplayCategory = $DisplayCategory;
      $this->Reusable = $Reusable;
    }

    /**
     * @return anonymous919
     */
    public function getFulfillmentType()
    {
      return $this->FulfillmentType;
    }

    /**
     * @param anonymous919 $FulfillmentType
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setFulfillmentType($FulfillmentType)
    {
      $this->FulfillmentType = $FulfillmentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFulfillmentTypeDescription()
    {
      return $this->FulfillmentTypeDescription;
    }

    /**
     * @param string $FulfillmentTypeDescription
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setFulfillmentTypeDescription($FulfillmentTypeDescription)
    {
      $this->FulfillmentTypeDescription = $FulfillmentTypeDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssociatedItem()
    {
      return $this->AssociatedItem;
    }

    /**
     * @param string $AssociatedItem
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setAssociatedItem($AssociatedItem)
    {
      $this->AssociatedItem = $AssociatedItem;
      return $this;
    }

    /**
     * @return anonymous920
     */
    public function getAvailabilityChargeIndicator()
    {
      return $this->AvailabilityChargeIndicator;
    }

    /**
     * @param anonymous920 $AvailabilityChargeIndicator
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setAvailabilityChargeIndicator($AvailabilityChargeIndicator)
    {
      $this->AvailabilityChargeIndicator = $AvailabilityChargeIndicator;
      return $this;
    }

    /**
     * @return anonymous921
     */
    public function getRefundReissueIndicator()
    {
      return $this->RefundReissueIndicator;
    }

    /**
     * @param anonymous921 $RefundReissueIndicator
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setRefundReissueIndicator($RefundReissueIndicator)
    {
      $this->RefundReissueIndicator = $RefundReissueIndicator;
      return $this;
    }

    /**
     * @return anonymous922
     */
    public function getCommissionable()
    {
      return $this->Commissionable;
    }

    /**
     * @param anonymous922 $Commissionable
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setCommissionable($Commissionable)
    {
      $this->Commissionable = $Commissionable;
      return $this;
    }

    /**
     * @return anonymous923
     */
    public function getMileageIndicator()
    {
      return $this->MileageIndicator;
    }

    /**
     * @param anonymous923 $MileageIndicator
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setMileageIndicator($MileageIndicator)
    {
      $this->MileageIndicator = $MileageIndicator;
      return $this;
    }

    /**
     * @return anonymous924
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous924 $Location
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous925
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param anonymous925 $Date
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return anonymous926
     */
    public function getBooking()
    {
      return $this->Booking;
    }

    /**
     * @param anonymous926 $Booking
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setBooking($Booking)
    {
      $this->Booking = $Booking;
      return $this;
    }

    /**
     * @return anonymous927
     */
    public function getDisplayCategory()
    {
      return $this->DisplayCategory;
    }

    /**
     * @param anonymous927 $DisplayCategory
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setDisplayCategory($DisplayCategory)
    {
      $this->DisplayCategory = $DisplayCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReusable()
    {
      return $this->Reusable;
    }

    /**
     * @param boolean $Reusable
     * @return \FilippoToso\Travelport\GDSQueue\EMD
     */
    public function setReusable($Reusable)
    {
      $this->Reusable = $Reusable;
      return $this;
    }

}
