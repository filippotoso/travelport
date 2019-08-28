<?php

namespace FilippoToso\Travelport\Air;

class EMD
{

    /**
     * @var anonymous911 $FulfillmentType
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
     * @var anonymous912 $AvailabilityChargeIndicator
     */
    protected $AvailabilityChargeIndicator = null;

    /**
     * @var anonymous913 $RefundReissueIndicator
     */
    protected $RefundReissueIndicator = null;

    /**
     * @var anonymous914 $Commissionable
     */
    protected $Commissionable = null;

    /**
     * @var anonymous915 $MileageIndicator
     */
    protected $MileageIndicator = null;

    /**
     * @var anonymous916 $Location
     */
    protected $Location = null;

    /**
     * @var anonymous917 $Date
     */
    protected $Date = null;

    /**
     * @var anonymous918 $Booking
     */
    protected $Booking = null;

    /**
     * @var anonymous919 $DisplayCategory
     */
    protected $DisplayCategory = null;

    /**
     * @var boolean $Reusable
     */
    protected $Reusable = null;

    /**
     * @param anonymous911 $FulfillmentType
     * @param string $FulfillmentTypeDescription
     * @param string $AssociatedItem
     * @param anonymous912 $AvailabilityChargeIndicator
     * @param anonymous913 $RefundReissueIndicator
     * @param anonymous914 $Commissionable
     * @param anonymous915 $MileageIndicator
     * @param anonymous916 $Location
     * @param anonymous917 $Date
     * @param anonymous918 $Booking
     * @param anonymous919 $DisplayCategory
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
     * @return anonymous911
     */
    public function getFulfillmentType()
    {
      return $this->FulfillmentType;
    }

    /**
     * @param anonymous911 $FulfillmentType
     * @return \FilippoToso\Travelport\Air\EMD
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
     * @return \FilippoToso\Travelport\Air\EMD
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
     * @return \FilippoToso\Travelport\Air\EMD
     */
    public function setAssociatedItem($AssociatedItem)
    {
      $this->AssociatedItem = $AssociatedItem;
      return $this;
    }

    /**
     * @return anonymous912
     */
    public function getAvailabilityChargeIndicator()
    {
      return $this->AvailabilityChargeIndicator;
    }

    /**
     * @param anonymous912 $AvailabilityChargeIndicator
     * @return \FilippoToso\Travelport\Air\EMD
     */
    public function setAvailabilityChargeIndicator($AvailabilityChargeIndicator)
    {
      $this->AvailabilityChargeIndicator = $AvailabilityChargeIndicator;
      return $this;
    }

    /**
     * @return anonymous913
     */
    public function getRefundReissueIndicator()
    {
      return $this->RefundReissueIndicator;
    }

    /**
     * @param anonymous913 $RefundReissueIndicator
     * @return \FilippoToso\Travelport\Air\EMD
     */
    public function setRefundReissueIndicator($RefundReissueIndicator)
    {
      $this->RefundReissueIndicator = $RefundReissueIndicator;
      return $this;
    }

    /**
     * @return anonymous914
     */
    public function getCommissionable()
    {
      return $this->Commissionable;
    }

    /**
     * @param anonymous914 $Commissionable
     * @return \FilippoToso\Travelport\Air\EMD
     */
    public function setCommissionable($Commissionable)
    {
      $this->Commissionable = $Commissionable;
      return $this;
    }

    /**
     * @return anonymous915
     */
    public function getMileageIndicator()
    {
      return $this->MileageIndicator;
    }

    /**
     * @param anonymous915 $MileageIndicator
     * @return \FilippoToso\Travelport\Air\EMD
     */
    public function setMileageIndicator($MileageIndicator)
    {
      $this->MileageIndicator = $MileageIndicator;
      return $this;
    }

    /**
     * @return anonymous916
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous916 $Location
     * @return \FilippoToso\Travelport\Air\EMD
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous917
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param anonymous917 $Date
     * @return \FilippoToso\Travelport\Air\EMD
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return anonymous918
     */
    public function getBooking()
    {
      return $this->Booking;
    }

    /**
     * @param anonymous918 $Booking
     * @return \FilippoToso\Travelport\Air\EMD
     */
    public function setBooking($Booking)
    {
      $this->Booking = $Booking;
      return $this;
    }

    /**
     * @return anonymous919
     */
    public function getDisplayCategory()
    {
      return $this->DisplayCategory;
    }

    /**
     * @param anonymous919 $DisplayCategory
     * @return \FilippoToso\Travelport\Air\EMD
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
     * @return \FilippoToso\Travelport\Air\EMD
     */
    public function setReusable($Reusable)
    {
      $this->Reusable = $Reusable;
      return $this;
    }

}
