<?php

namespace FilippoToso\Travelport\UniversalRecord;

class EMD
{

    /**
     * @var anonymous847 $FulfillmentType
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
     * @var anonymous848 $AvailabilityChargeIndicator
     */
    protected $AvailabilityChargeIndicator = null;

    /**
     * @var anonymous849 $RefundReissueIndicator
     */
    protected $RefundReissueIndicator = null;

    /**
     * @var anonymous850 $Commissionable
     */
    protected $Commissionable = null;

    /**
     * @var anonymous851 $MileageIndicator
     */
    protected $MileageIndicator = null;

    /**
     * @var anonymous852 $Location
     */
    protected $Location = null;

    /**
     * @var anonymous853 $Date
     */
    protected $Date = null;

    /**
     * @var anonymous854 $Booking
     */
    protected $Booking = null;

    /**
     * @var anonymous855 $DisplayCategory
     */
    protected $DisplayCategory = null;

    /**
     * @var boolean $Reusable
     */
    protected $Reusable = null;

    /**
     * @param anonymous847 $FulfillmentType
     * @param string $FulfillmentTypeDescription
     * @param string $AssociatedItem
     * @param anonymous848 $AvailabilityChargeIndicator
     * @param anonymous849 $RefundReissueIndicator
     * @param anonymous850 $Commissionable
     * @param anonymous851 $MileageIndicator
     * @param anonymous852 $Location
     * @param anonymous853 $Date
     * @param anonymous854 $Booking
     * @param anonymous855 $DisplayCategory
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
     * @return anonymous847
     */
    public function getFulfillmentType()
    {
      return $this->FulfillmentType;
    }

    /**
     * @param anonymous847 $FulfillmentType
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
     * @return anonymous848
     */
    public function getAvailabilityChargeIndicator()
    {
      return $this->AvailabilityChargeIndicator;
    }

    /**
     * @param anonymous848 $AvailabilityChargeIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setAvailabilityChargeIndicator($AvailabilityChargeIndicator)
    {
      $this->AvailabilityChargeIndicator = $AvailabilityChargeIndicator;
      return $this;
    }

    /**
     * @return anonymous849
     */
    public function getRefundReissueIndicator()
    {
      return $this->RefundReissueIndicator;
    }

    /**
     * @param anonymous849 $RefundReissueIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setRefundReissueIndicator($RefundReissueIndicator)
    {
      $this->RefundReissueIndicator = $RefundReissueIndicator;
      return $this;
    }

    /**
     * @return anonymous850
     */
    public function getCommissionable()
    {
      return $this->Commissionable;
    }

    /**
     * @param anonymous850 $Commissionable
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setCommissionable($Commissionable)
    {
      $this->Commissionable = $Commissionable;
      return $this;
    }

    /**
     * @return anonymous851
     */
    public function getMileageIndicator()
    {
      return $this->MileageIndicator;
    }

    /**
     * @param anonymous851 $MileageIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setMileageIndicator($MileageIndicator)
    {
      $this->MileageIndicator = $MileageIndicator;
      return $this;
    }

    /**
     * @return anonymous852
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous852 $Location
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous853
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param anonymous853 $Date
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return anonymous854
     */
    public function getBooking()
    {
      return $this->Booking;
    }

    /**
     * @param anonymous854 $Booking
     * @return \FilippoToso\Travelport\UniversalRecord\EMD
     */
    public function setBooking($Booking)
    {
      $this->Booking = $Booking;
      return $this;
    }

    /**
     * @return anonymous855
     */
    public function getDisplayCategory()
    {
      return $this->DisplayCategory;
    }

    /**
     * @param anonymous855 $DisplayCategory
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
