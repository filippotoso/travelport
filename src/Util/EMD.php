<?php

namespace FilippoToso\Travelport\Util;

class EMD
{

    /**
     * @var anonymous842 $FulfillmentType
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
     * @var anonymous843 $AvailabilityChargeIndicator
     */
    protected $AvailabilityChargeIndicator = null;

    /**
     * @var anonymous844 $RefundReissueIndicator
     */
    protected $RefundReissueIndicator = null;

    /**
     * @var anonymous845 $Commissionable
     */
    protected $Commissionable = null;

    /**
     * @var anonymous846 $MileageIndicator
     */
    protected $MileageIndicator = null;

    /**
     * @var anonymous847 $Location
     */
    protected $Location = null;

    /**
     * @var anonymous848 $Date
     */
    protected $Date = null;

    /**
     * @var anonymous849 $Booking
     */
    protected $Booking = null;

    /**
     * @var anonymous850 $DisplayCategory
     */
    protected $DisplayCategory = null;

    /**
     * @var boolean $Reusable
     */
    protected $Reusable = null;

    /**
     * @param anonymous842 $FulfillmentType
     * @param string $FulfillmentTypeDescription
     * @param string $AssociatedItem
     * @param anonymous843 $AvailabilityChargeIndicator
     * @param anonymous844 $RefundReissueIndicator
     * @param anonymous845 $Commissionable
     * @param anonymous846 $MileageIndicator
     * @param anonymous847 $Location
     * @param anonymous848 $Date
     * @param anonymous849 $Booking
     * @param anonymous850 $DisplayCategory
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
     * @return anonymous842
     */
    public function getFulfillmentType()
    {
      return $this->FulfillmentType;
    }

    /**
     * @param anonymous842 $FulfillmentType
     * @return \FilippoToso\Travelport\Util\EMD
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
     * @return \FilippoToso\Travelport\Util\EMD
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
     * @return \FilippoToso\Travelport\Util\EMD
     */
    public function setAssociatedItem($AssociatedItem)
    {
      $this->AssociatedItem = $AssociatedItem;
      return $this;
    }

    /**
     * @return anonymous843
     */
    public function getAvailabilityChargeIndicator()
    {
      return $this->AvailabilityChargeIndicator;
    }

    /**
     * @param anonymous843 $AvailabilityChargeIndicator
     * @return \FilippoToso\Travelport\Util\EMD
     */
    public function setAvailabilityChargeIndicator($AvailabilityChargeIndicator)
    {
      $this->AvailabilityChargeIndicator = $AvailabilityChargeIndicator;
      return $this;
    }

    /**
     * @return anonymous844
     */
    public function getRefundReissueIndicator()
    {
      return $this->RefundReissueIndicator;
    }

    /**
     * @param anonymous844 $RefundReissueIndicator
     * @return \FilippoToso\Travelport\Util\EMD
     */
    public function setRefundReissueIndicator($RefundReissueIndicator)
    {
      $this->RefundReissueIndicator = $RefundReissueIndicator;
      return $this;
    }

    /**
     * @return anonymous845
     */
    public function getCommissionable()
    {
      return $this->Commissionable;
    }

    /**
     * @param anonymous845 $Commissionable
     * @return \FilippoToso\Travelport\Util\EMD
     */
    public function setCommissionable($Commissionable)
    {
      $this->Commissionable = $Commissionable;
      return $this;
    }

    /**
     * @return anonymous846
     */
    public function getMileageIndicator()
    {
      return $this->MileageIndicator;
    }

    /**
     * @param anonymous846 $MileageIndicator
     * @return \FilippoToso\Travelport\Util\EMD
     */
    public function setMileageIndicator($MileageIndicator)
    {
      $this->MileageIndicator = $MileageIndicator;
      return $this;
    }

    /**
     * @return anonymous847
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous847 $Location
     * @return \FilippoToso\Travelport\Util\EMD
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return anonymous848
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param anonymous848 $Date
     * @return \FilippoToso\Travelport\Util\EMD
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return anonymous849
     */
    public function getBooking()
    {
      return $this->Booking;
    }

    /**
     * @param anonymous849 $Booking
     * @return \FilippoToso\Travelport\Util\EMD
     */
    public function setBooking($Booking)
    {
      $this->Booking = $Booking;
      return $this;
    }

    /**
     * @return anonymous850
     */
    public function getDisplayCategory()
    {
      return $this->DisplayCategory;
    }

    /**
     * @param anonymous850 $DisplayCategory
     * @return \FilippoToso\Travelport\Util\EMD
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
     * @return \FilippoToso\Travelport\Util\EMD
     */
    public function setReusable($Reusable)
    {
      $this->Reusable = $Reusable;
      return $this;
    }

}
