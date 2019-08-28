<?php

namespace FilippoToso\Travelport\UProfile;

class HotelPreference extends typeBasePreference
{

    /**
     * @var date $CheckInStartDate
     */
    protected $CheckInStartDate = null;

    /**
     * @var date $CheckInEndDate
     */
    protected $CheckInEndDate = null;

    /**
     * @var anonymous535 $CorporateDiscountNumber
     */
    protected $CorporateDiscountNumber = null;

    /**
     * @var typeMoney $MaxRoomRateAmount
     */
    protected $MaxRoomRateAmount = null;

    /**
     * @var anonymous536 $MultiLevelRateCode
     */
    protected $MultiLevelRateCode = null;

    /**
     * @var anonymous537 $PropertyID
     */
    protected $PropertyID = null;

    /**
     * @var anonymous538 $RateCode
     */
    protected $RateCode = null;

    /**
     * @var boolean $SmokingRoom
     */
    protected $SmokingRoom = null;

    /**
     * @var anonymous871 $BedTypeMiscTravel
     */
    protected $BedTypeMiscTravel = null;

    /**
     * @var anonymous872 $BedTypeRefCategory
     */
    protected $BedTypeRefCategory = null;

    /**
     * @var anonymous873 $SpecialRequestMiscTravel
     */
    protected $SpecialRequestMiscTravel = null;

    /**
     * @var anonymous874 $SpecialRequestRefCategory
     */
    protected $SpecialRequestRefCategory = null;

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
     * @param date $CheckInStartDate
     * @param date $CheckInEndDate
     * @param anonymous535 $CorporateDiscountNumber
     * @param typeMoney $MaxRoomRateAmount
     * @param anonymous536 $MultiLevelRateCode
     * @param anonymous537 $PropertyID
     * @param anonymous538 $RateCode
     * @param boolean $SmokingRoom
     * @param anonymous871 $BedTypeMiscTravel
     * @param anonymous872 $BedTypeRefCategory
     * @param anonymous873 $SpecialRequestMiscTravel
     * @param anonymous874 $SpecialRequestRefCategory
     */
    public function __construct($Key = null, $TagRef = null, $BookingStartDate = null, $BookingEndDate = null, $Currency = null, $DepartureGeoPoliticalAreaType = null, $DepartureGeoPoliticalAreaCode = null, $Emphasis = null, $GeneralPreference = null, $Inclusive = null, $LoyaltyProgramEnrollmentRef = null, $OtherLoyaltyProgramNumber = null, $PaymentDetailsRef = null, $PreferencePaymentMethod = null, $Purpose = null, $PriorityOrder = null, $Supplier = null, $TripApproval = null, $CheckInStartDate = null, $CheckInEndDate = null, $CorporateDiscountNumber = null, $MaxRoomRateAmount = null, $MultiLevelRateCode = null, $PropertyID = null, $RateCode = null, $SmokingRoom = null, $BedTypeMiscTravel = null, $BedTypeRefCategory = null, $SpecialRequestMiscTravel = null, $SpecialRequestRefCategory = null)
    {
      parent::__construct($Key, $TagRef, $BookingStartDate, $BookingEndDate, $Currency, $DepartureGeoPoliticalAreaType, $DepartureGeoPoliticalAreaCode, $Emphasis, $GeneralPreference, $Inclusive, $LoyaltyProgramEnrollmentRef, $OtherLoyaltyProgramNumber, $PaymentDetailsRef, $PreferencePaymentMethod, $Purpose, $PriorityOrder, $Supplier, $TripApproval);
      $this->CheckInStartDate = $CheckInStartDate;
      $this->CheckInEndDate = $CheckInEndDate;
      $this->CorporateDiscountNumber = $CorporateDiscountNumber;
      $this->MaxRoomRateAmount = $MaxRoomRateAmount;
      $this->MultiLevelRateCode = $MultiLevelRateCode;
      $this->PropertyID = $PropertyID;
      $this->RateCode = $RateCode;
      $this->SmokingRoom = $SmokingRoom;
      $this->BedTypeMiscTravel = $BedTypeMiscTravel;
      $this->BedTypeRefCategory = $BedTypeRefCategory;
      $this->SpecialRequestMiscTravel = $SpecialRequestMiscTravel;
      $this->SpecialRequestRefCategory = $SpecialRequestRefCategory;
    }

    /**
     * @return date
     */
    public function getCheckInStartDate()
    {
      return $this->CheckInStartDate;
    }

    /**
     * @param date $CheckInStartDate
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setCheckInStartDate($CheckInStartDate)
    {
      $this->CheckInStartDate = $CheckInStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getCheckInEndDate()
    {
      return $this->CheckInEndDate;
    }

    /**
     * @param date $CheckInEndDate
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setCheckInEndDate($CheckInEndDate)
    {
      $this->CheckInEndDate = $CheckInEndDate;
      return $this;
    }

    /**
     * @return anonymous535
     */
    public function getCorporateDiscountNumber()
    {
      return $this->CorporateDiscountNumber;
    }

    /**
     * @param anonymous535 $CorporateDiscountNumber
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setCorporateDiscountNumber($CorporateDiscountNumber)
    {
      $this->CorporateDiscountNumber = $CorporateDiscountNumber;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMaxRoomRateAmount()
    {
      return $this->MaxRoomRateAmount;
    }

    /**
     * @param typeMoney $MaxRoomRateAmount
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setMaxRoomRateAmount($MaxRoomRateAmount)
    {
      $this->MaxRoomRateAmount = $MaxRoomRateAmount;
      return $this;
    }

    /**
     * @return anonymous536
     */
    public function getMultiLevelRateCode()
    {
      return $this->MultiLevelRateCode;
    }

    /**
     * @param anonymous536 $MultiLevelRateCode
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setMultiLevelRateCode($MultiLevelRateCode)
    {
      $this->MultiLevelRateCode = $MultiLevelRateCode;
      return $this;
    }

    /**
     * @return anonymous537
     */
    public function getPropertyID()
    {
      return $this->PropertyID;
    }

    /**
     * @param anonymous537 $PropertyID
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setPropertyID($PropertyID)
    {
      $this->PropertyID = $PropertyID;
      return $this;
    }

    /**
     * @return anonymous538
     */
    public function getRateCode()
    {
      return $this->RateCode;
    }

    /**
     * @param anonymous538 $RateCode
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSmokingRoom()
    {
      return $this->SmokingRoom;
    }

    /**
     * @param boolean $SmokingRoom
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setSmokingRoom($SmokingRoom)
    {
      $this->SmokingRoom = $SmokingRoom;
      return $this;
    }

    /**
     * @return anonymous871
     */
    public function getBedTypeMiscTravel()
    {
      return $this->BedTypeMiscTravel;
    }

    /**
     * @param anonymous871 $BedTypeMiscTravel
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setBedTypeMiscTravel($BedTypeMiscTravel)
    {
      $this->BedTypeMiscTravel = $BedTypeMiscTravel;
      return $this;
    }

    /**
     * @return anonymous872
     */
    public function getBedTypeRefCategory()
    {
      return $this->BedTypeRefCategory;
    }

    /**
     * @param anonymous872 $BedTypeRefCategory
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setBedTypeRefCategory($BedTypeRefCategory)
    {
      $this->BedTypeRefCategory = $BedTypeRefCategory;
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
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
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
     * @return \FilippoToso\Travelport\UProfile\HotelPreference
     */
    public function setSpecialRequestRefCategory($SpecialRequestRefCategory)
    {
      $this->SpecialRequestRefCategory = $SpecialRequestRefCategory;
      return $this;
    }

}
