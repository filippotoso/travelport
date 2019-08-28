<?php

namespace FilippoToso\Travelport\UProfile;

class VehiclePreference extends typeBasePreference
{

    /**
     * @var anonymous542 $CorporateID
     */
    protected $CorporateID = null;

    /**
     * @var date $PickUpStartDate
     */
    protected $PickUpStartDate = null;

    /**
     * @var date $PickUpEndDate
     */
    protected $PickUpEndDate = null;

    /**
     * @var anonymous543 $RateCode
     */
    protected $RateCode = null;

    /**
     * @var anonymous889 $SpecialEquipMiscTravel
     */
    protected $SpecialEquipMiscTravel = null;

    /**
     * @var anonymous890 $SpecialEquipRefCategory
     */
    protected $SpecialEquipRefCategory = null;

    /**
     * @var anonymous873 $SpecialRequestMiscTravel
     */
    protected $SpecialRequestMiscTravel = null;

    /**
     * @var anonymous874 $SpecialRequestRefCategory
     */
    protected $SpecialRequestRefCategory = null;

    /**
     * @var anonymous891 $VehicleTypeMiscTravel
     */
    protected $VehicleTypeMiscTravel = null;

    /**
     * @var anonymous892 $VehicleTypeRefCategory
     */
    protected $VehicleTypeRefCategory = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param date $BookingStartDate
     * @param date $BookingEndDate
     * @param typeCurrency $Currency
     * @param typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     * @param boolean $Emphasis
     * @param StringLength1to255 $GeneralPreference
     * @param boolean $Inclusive
     * @param typeRef $LoyaltyProgramEnrollmentRef
     * @param anonymous656 $OtherLoyaltyProgramNumber
     * @param typeRef $PaymentDetailsRef
     * @param typePreferencePaymentMethod $PreferencePaymentMethod
     * @param typePreferencePurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     * @param typeSupplier $Supplier
     * @param boolean $TripApproval
     * @param anonymous542 $CorporateID
     * @param date $PickUpStartDate
     * @param date $PickUpEndDate
     * @param anonymous543 $RateCode
     * @param anonymous889 $SpecialEquipMiscTravel
     * @param anonymous890 $SpecialEquipRefCategory
     * @param anonymous873 $SpecialRequestMiscTravel
     * @param anonymous874 $SpecialRequestRefCategory
     * @param anonymous891 $VehicleTypeMiscTravel
     * @param anonymous892 $VehicleTypeRefCategory
     */
    public function __construct($Key = null, $TagRef = null, $BookingStartDate = null, $BookingEndDate = null, $Currency = null, $DepartureGeoPoliticalAreaType = null, $DepartureGeoPoliticalAreaCode = null, $Emphasis = null, $GeneralPreference = null, $Inclusive = null, $LoyaltyProgramEnrollmentRef = null, $OtherLoyaltyProgramNumber = null, $PaymentDetailsRef = null, $PreferencePaymentMethod = null, $Purpose = null, $PriorityOrder = null, $Supplier = null, $TripApproval = null, $CorporateID = null, $PickUpStartDate = null, $PickUpEndDate = null, $RateCode = null, $SpecialEquipMiscTravel = null, $SpecialEquipRefCategory = null, $SpecialRequestMiscTravel = null, $SpecialRequestRefCategory = null, $VehicleTypeMiscTravel = null, $VehicleTypeRefCategory = null)
    {
      parent::__construct($Key, $TagRef, $BookingStartDate, $BookingEndDate, $Currency, $DepartureGeoPoliticalAreaType, $DepartureGeoPoliticalAreaCode, $Emphasis, $GeneralPreference, $Inclusive, $LoyaltyProgramEnrollmentRef, $OtherLoyaltyProgramNumber, $PaymentDetailsRef, $PreferencePaymentMethod, $Purpose, $PriorityOrder, $Supplier, $TripApproval);
      $this->CorporateID = $CorporateID;
      $this->PickUpStartDate = $PickUpStartDate;
      $this->PickUpEndDate = $PickUpEndDate;
      $this->RateCode = $RateCode;
      $this->SpecialEquipMiscTravel = $SpecialEquipMiscTravel;
      $this->SpecialEquipRefCategory = $SpecialEquipRefCategory;
      $this->SpecialRequestMiscTravel = $SpecialRequestMiscTravel;
      $this->SpecialRequestRefCategory = $SpecialRequestRefCategory;
      $this->VehicleTypeMiscTravel = $VehicleTypeMiscTravel;
      $this->VehicleTypeRefCategory = $VehicleTypeRefCategory;
    }

    /**
     * @return anonymous542
     */
    public function getCorporateID()
    {
      return $this->CorporateID;
    }

    /**
     * @param anonymous542 $CorporateID
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setCorporateID($CorporateID)
    {
      $this->CorporateID = $CorporateID;
      return $this;
    }

    /**
     * @return date
     */
    public function getPickUpStartDate()
    {
      return $this->PickUpStartDate;
    }

    /**
     * @param date $PickUpStartDate
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setPickUpStartDate($PickUpStartDate)
    {
      $this->PickUpStartDate = $PickUpStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getPickUpEndDate()
    {
      return $this->PickUpEndDate;
    }

    /**
     * @param date $PickUpEndDate
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setPickUpEndDate($PickUpEndDate)
    {
      $this->PickUpEndDate = $PickUpEndDate;
      return $this;
    }

    /**
     * @return anonymous543
     */
    public function getRateCode()
    {
      return $this->RateCode;
    }

    /**
     * @param anonymous543 $RateCode
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
      return $this;
    }

    /**
     * @return anonymous889
     */
    public function getSpecialEquipMiscTravel()
    {
      return $this->SpecialEquipMiscTravel;
    }

    /**
     * @param anonymous889 $SpecialEquipMiscTravel
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setSpecialEquipMiscTravel($SpecialEquipMiscTravel)
    {
      $this->SpecialEquipMiscTravel = $SpecialEquipMiscTravel;
      return $this;
    }

    /**
     * @return anonymous890
     */
    public function getSpecialEquipRefCategory()
    {
      return $this->SpecialEquipRefCategory;
    }

    /**
     * @param anonymous890 $SpecialEquipRefCategory
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setSpecialEquipRefCategory($SpecialEquipRefCategory)
    {
      $this->SpecialEquipRefCategory = $SpecialEquipRefCategory;
      return $this;
    }

    /**
     * @return anonymous873
     */
    public function getSpecialRequestMiscTravel()
    {
      return $this->SpecialRequestMiscTravel;
    }

    /**
     * @param anonymous873 $SpecialRequestMiscTravel
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setSpecialRequestMiscTravel($SpecialRequestMiscTravel)
    {
      $this->SpecialRequestMiscTravel = $SpecialRequestMiscTravel;
      return $this;
    }

    /**
     * @return anonymous874
     */
    public function getSpecialRequestRefCategory()
    {
      return $this->SpecialRequestRefCategory;
    }

    /**
     * @param anonymous874 $SpecialRequestRefCategory
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setSpecialRequestRefCategory($SpecialRequestRefCategory)
    {
      $this->SpecialRequestRefCategory = $SpecialRequestRefCategory;
      return $this;
    }

    /**
     * @return anonymous891
     */
    public function getVehicleTypeMiscTravel()
    {
      return $this->VehicleTypeMiscTravel;
    }

    /**
     * @param anonymous891 $VehicleTypeMiscTravel
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setVehicleTypeMiscTravel($VehicleTypeMiscTravel)
    {
      $this->VehicleTypeMiscTravel = $VehicleTypeMiscTravel;
      return $this;
    }

    /**
     * @return anonymous892
     */
    public function getVehicleTypeRefCategory()
    {
      return $this->VehicleTypeRefCategory;
    }

    /**
     * @param anonymous892 $VehicleTypeRefCategory
     * @return \FilippoToso\Travelport\UProfile\VehiclePreference
     */
    public function setVehicleTypeRefCategory($VehicleTypeRefCategory)
    {
      $this->VehicleTypeRefCategory = $VehicleTypeRefCategory;
      return $this;
    }

}
