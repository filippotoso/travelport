<?php

namespace FilippoToso\Travelport\UniversalRecord;

class EMD
{

    /**
     * @var anonymous845 $FulfillmentType
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
     * @var anonymous846 $AvailabilityChargeIndicator
     */
    protected $AvailabilityChargeIndicator = null;

    /**
     * @var anonymous847 $RefundReissueIndicator
     */
    protected $RefundReissueIndicator = null;

    /**
     * @var anonymous848 $Commissionable
     */
    protected $Commissionable = null;

    /**
     * @var anonymous849 $MileageIndicator
     */
    protected $MileageIndicator = null;

    /**
     * @var anonymous850 $Location
     */
    protected $Location = null;

    /**
     * @var anonymous851 $Date
     */
    protected $Date = null;

    /**
     * @var anonymous852 $Booking
     */
    protected $Booking = null;

    /**
     * @var anonymous853 $DisplayCategory
     */
    protected $DisplayCategory = null;

    /**
     * @var boolean $Reusable
     */
    protected $Reusable = null;

    /**
     * @param anonymous845 $FulfillmentType
     * @param string $FulfillmentTypeDescription
     * @param string $AssociatedItem
     * @param anonymous846 $AvailabilityChargeIndicator
     * @param anonymous847 $RefundReissueIndicator
     * @param anonymous848 $Commissionable
     * @param anonymous849 $MileageIndicator
     * @param anonymous850 $Location
     * @param anonymous851 $Date
     * @param anonymous852 $Booking
     * @param anonymous853 $DisplayCategory
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
     * @return anonymous845
     */
    public function getFulfillmentType()
    {
      return $this->FulfillmentType;
    }

    /**
     * @param anonymous845 $FulfillmentType
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
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
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
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
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setAssociatedItem($AssociatedItem)
    {
      $this->AssociatedItem = $AssociatedItem;
      return $this;
    }

    /**
     * @return anonymous846
     */
    public function getAvailabilityChargeIndicator()
    {
      return $this->AvailabilityChargeIndicator;
    }

    /**
     * @param anonymous846 $AvailabilityChargeIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setAvailabilityChargeIndicator($AvailabilityChargeIndicator)
    {
      $this->AvailabilityChargeIndicator = $AvailabilityChargeIndicator;
      return $this;
    }

    /**
     * @return anonymous847
     */
    public function getRefundReissueIndicator()
    {
      return $this->RefundReissueIndicator;
    }

    /**
     * @param anonymous847 $RefundReissueIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setRefundReissueIndicator($RefundReissueIndicator)
    {
      $this->RefundReissueIndicator = $RefundReissueIndicator;
      return $this;
    }

    /**
     * @return anonymous848
     */
    public function getCommissionable()
    {
      return $this->Commissionable;
    }

    /**
     * @param anonymous848 $Commissionable
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setCommissionable($Commissionable)
    {
      $this->Commissionable = $Commissionable;
      return $this;
    }

    /**
     * @return anonymous849
     */
    public function getMileageIndicator()
    {
      return $this->MileageIndicator;
    }

    /**
     * @param anonymous849 $MileageIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setMileageIndicator($MileageIndicator)
    {
      $this->MileageIndicator = $MileageIndicator;
      return $this;
    }

    /**
     * @return anonymous850
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous850 $Location
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous851
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param anonymous851 $Date
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return anonymous852
     */
    public function getBooking()
    {
      return $this->Booking;
    }

    /**
     * @param anonymous852 $Booking
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setBooking($Booking)
    {
      $this->Booking = $Booking;
      return $this;
    }

    /**
     * @return anonymous853
     */
    public function getDisplayCategory()
    {
      return $this->DisplayCategory;
    }

    /**
     * @param anonymous853 $DisplayCategory
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
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
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setReusable($Reusable)
    {
      $this->Reusable = $Reusable;
      return $this;
    }

}
