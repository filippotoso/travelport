<?php

namespace FilippoToso\Travelport\UProfile;

class typeAirPreferenceHistory extends typeBasePreferenceHistory
{

    /**
     * @var typeAirFare $AirFareType
     */
    protected $AirFareType = null;

    /**
     * @var anonymous677 $CRSCode
     */
    protected $CRSCode = null;

    /**
     * @var anonymous678 $EndingFlightNumber
     */
    protected $EndingFlightNumber = null;

    /**
     * @var anonymous679 $FareType
     */
    protected $FareType = null;

    /**
     * @var boolean $Interline
     */
    protected $Interline = null;

    /**
     * @var typeMoney $MaxFareAmount
     */
    protected $MaxFareAmount = null;

    /**
     * @var int $MaxConnectionMinutes
     */
    protected $MaxConnectionMinutes = null;

    /**
     * @var int $MaxDomesticTripHours
     */
    protected $MaxDomesticTripHours = null;

    /**
     * @var int $MaxEmployeesPerFlight
     */
    protected $MaxEmployeesPerFlight = null;

    /**
     * @var int $MaxInternationalTripHours
     */
    protected $MaxInternationalTripHours = null;

    /**
     * @var anonymous680 $MealTypeCRS
     */
    protected $MealTypeCRS = null;

    /**
     * @var anonymous681 $MealTypeSSR
     */
    protected $MealTypeSSR = null;

    /**
     * @var anonymous682 $SeatNumber
     */
    protected $SeatNumber = null;

    /**
     * @var anonymous683 $SSRCode
     */
    protected $SSRCode = null;

    /**
     * @var anonymous684 $StartingFlightNumber
     */
    protected $StartingFlightNumber = null;

    /**
     * @var anonymous882 $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var typeGeoPoliticalAreaType $ArrivalGeoPoliticalAreaType
     */
    protected $ArrivalGeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $ArrivalGeoPoliticalAreaCode
     */
    protected $ArrivalGeoPoliticalAreaCode = null;

    /**
     * @var typeMoney $BenchMarkAmount
     */
    protected $BenchMarkAmount = null;

    /**
     * @var typeGeoPoliticalAreaType $ConnectionGeoPoliticalAreaType
     */
    protected $ConnectionGeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $ConnectionGeoPoliticalAreaCode
     */
    protected $ConnectionGeoPoliticalAreaCode = null;

    /**
     * @var anonymous883 $ContractCode
     */
    protected $ContractCode = null;

    /**
     * @var anonymous884 $CorporateID
     */
    protected $CorporateID = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var date $TravelStartDate
     */
    protected $TravelStartDate = null;

    /**
     * @var date $TravelEndDate
     */
    protected $TravelEndDate = null;

    /**
     * @var anonymous893 $CabinTypeMiscTravel
     */
    protected $CabinTypeMiscTravel = null;

    /**
     * @var anonymous894 $CabinTypeRefCategory
     */
    protected $CabinTypeRefCategory = null;

    /**
     * @var anonymous887 $SeatTypeMiscTravel
     */
    protected $SeatTypeMiscTravel = null;

    /**
     * @var anonymous888 $SeatTypeMiscRefCategory
     */
    protected $SeatTypeMiscRefCategory = null;

    /**
     * @param typeRef $Key
     * @param date $BookingStartDate
     * @param date $BookingEndDate
     * @param typeCurrency $Currency
     * @param typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     * @param boolean $Emphasis
     * @param StringLength1to255 $GeneralPreference
     * @param boolean $Inclusive
     * @param typeRef $LoyaltyProgramEnrollmentRef
     * @param anonymous672 $OtherLoyaltyProgramNumber
     * @param typeRef $PaymentDetailsRef
     * @param typePreferencePaymentMethod $PreferencePaymentMethod
     * @param typePreferencePurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     * @param typeSupplier $Supplier
     * @param boolean $TripApproval
     * @param typeAirFare $AirFareType
     * @param anonymous677 $CRSCode
     * @param anonymous678 $EndingFlightNumber
     * @param anonymous679 $FareType
     * @param boolean $Interline
     * @param typeMoney $MaxFareAmount
     * @param int $MaxConnectionMinutes
     * @param int $MaxDomesticTripHours
     * @param int $MaxEmployeesPerFlight
     * @param int $MaxInternationalTripHours
     * @param anonymous680 $MealTypeCRS
     * @param anonymous681 $MealTypeSSR
     * @param anonymous682 $SeatNumber
     * @param anonymous683 $SSRCode
     * @param anonymous684 $StartingFlightNumber
     * @param anonymous882 $AccountCode
     * @param typeGeoPoliticalAreaType $ArrivalGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $ArrivalGeoPoliticalAreaCode
     * @param typeMoney $BenchMarkAmount
     * @param typeGeoPoliticalAreaType $ConnectionGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $ConnectionGeoPoliticalAreaCode
     * @param anonymous883 $ContractCode
     * @param anonymous884 $CorporateID
     * @param typePCC $PseudoCityCode
     * @param date $TravelStartDate
     * @param date $TravelEndDate
     * @param anonymous893 $CabinTypeMiscTravel
     * @param anonymous894 $CabinTypeRefCategory
     * @param anonymous887 $SeatTypeMiscTravel
     * @param anonymous888 $SeatTypeMiscRefCategory
     */
    public function __construct($Key = null, $BookingStartDate = null, $BookingEndDate = null, $Currency = null, $DepartureGeoPoliticalAreaType = null, $DepartureGeoPoliticalAreaCode = null, $Emphasis = null, $GeneralPreference = null, $Inclusive = null, $LoyaltyProgramEnrollmentRef = null, $OtherLoyaltyProgramNumber = null, $PaymentDetailsRef = null, $PreferencePaymentMethod = null, $Purpose = null, $PriorityOrder = null, $Supplier = null, $TripApproval = null, $AirFareType = null, $CRSCode = null, $EndingFlightNumber = null, $FareType = null, $Interline = null, $MaxFareAmount = null, $MaxConnectionMinutes = null, $MaxDomesticTripHours = null, $MaxEmployeesPerFlight = null, $MaxInternationalTripHours = null, $MealTypeCRS = null, $MealTypeSSR = null, $SeatNumber = null, $SSRCode = null, $StartingFlightNumber = null, $AccountCode = null, $ArrivalGeoPoliticalAreaType = null, $ArrivalGeoPoliticalAreaCode = null, $BenchMarkAmount = null, $ConnectionGeoPoliticalAreaType = null, $ConnectionGeoPoliticalAreaCode = null, $ContractCode = null, $CorporateID = null, $PseudoCityCode = null, $TravelStartDate = null, $TravelEndDate = null, $CabinTypeMiscTravel = null, $CabinTypeRefCategory = null, $SeatTypeMiscTravel = null, $SeatTypeMiscRefCategory = null)
    {
      parent::__construct($Key, $BookingStartDate, $BookingEndDate, $Currency, $DepartureGeoPoliticalAreaType, $DepartureGeoPoliticalAreaCode, $Emphasis, $GeneralPreference, $Inclusive, $LoyaltyProgramEnrollmentRef, $OtherLoyaltyProgramNumber, $PaymentDetailsRef, $PreferencePaymentMethod, $Purpose, $PriorityOrder, $Supplier, $TripApproval);
      $this->AirFareType = $AirFareType;
      $this->CRSCode = $CRSCode;
      $this->EndingFlightNumber = $EndingFlightNumber;
      $this->FareType = $FareType;
      $this->Interline = $Interline;
      $this->MaxFareAmount = $MaxFareAmount;
      $this->MaxConnectionMinutes = $MaxConnectionMinutes;
      $this->MaxDomesticTripHours = $MaxDomesticTripHours;
      $this->MaxEmployeesPerFlight = $MaxEmployeesPerFlight;
      $this->MaxInternationalTripHours = $MaxInternationalTripHours;
      $this->MealTypeCRS = $MealTypeCRS;
      $this->MealTypeSSR = $MealTypeSSR;
      $this->SeatNumber = $SeatNumber;
      $this->SSRCode = $SSRCode;
      $this->StartingFlightNumber = $StartingFlightNumber;
      $this->AccountCode = $AccountCode;
      $this->ArrivalGeoPoliticalAreaType = $ArrivalGeoPoliticalAreaType;
      $this->ArrivalGeoPoliticalAreaCode = $ArrivalGeoPoliticalAreaCode;
      $this->BenchMarkAmount = $BenchMarkAmount;
      $this->ConnectionGeoPoliticalAreaType = $ConnectionGeoPoliticalAreaType;
      $this->ConnectionGeoPoliticalAreaCode = $ConnectionGeoPoliticalAreaCode;
      $this->ContractCode = $ContractCode;
      $this->CorporateID = $CorporateID;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->TravelStartDate = $TravelStartDate;
      $this->TravelEndDate = $TravelEndDate;
      $this->CabinTypeMiscTravel = $CabinTypeMiscTravel;
      $this->CabinTypeRefCategory = $CabinTypeRefCategory;
      $this->SeatTypeMiscTravel = $SeatTypeMiscTravel;
      $this->SeatTypeMiscRefCategory = $SeatTypeMiscRefCategory;
    }

    /**
     * @return typeAirFare
     */
    public function getAirFareType()
    {
      return $this->AirFareType;
    }

    /**
     * @param typeAirFare $AirFareType
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setAirFareType($AirFareType)
    {
      $this->AirFareType = $AirFareType;
      return $this;
    }

    /**
     * @return anonymous677
     */
    public function getCRSCode()
    {
      return $this->CRSCode;
    }

    /**
     * @param anonymous677 $CRSCode
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setCRSCode($CRSCode)
    {
      $this->CRSCode = $CRSCode;
      return $this;
    }

    /**
     * @return anonymous678
     */
    public function getEndingFlightNumber()
    {
      return $this->EndingFlightNumber;
    }

    /**
     * @param anonymous678 $EndingFlightNumber
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setEndingFlightNumber($EndingFlightNumber)
    {
      $this->EndingFlightNumber = $EndingFlightNumber;
      return $this;
    }

    /**
     * @return anonymous679
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param anonymous679 $FareType
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInterline()
    {
      return $this->Interline;
    }

    /**
     * @param boolean $Interline
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setInterline($Interline)
    {
      $this->Interline = $Interline;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMaxFareAmount()
    {
      return $this->MaxFareAmount;
    }

    /**
     * @param typeMoney $MaxFareAmount
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setMaxFareAmount($MaxFareAmount)
    {
      $this->MaxFareAmount = $MaxFareAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxConnectionMinutes()
    {
      return $this->MaxConnectionMinutes;
    }

    /**
     * @param int $MaxConnectionMinutes
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setMaxConnectionMinutes($MaxConnectionMinutes)
    {
      $this->MaxConnectionMinutes = $MaxConnectionMinutes;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDomesticTripHours()
    {
      return $this->MaxDomesticTripHours;
    }

    /**
     * @param int $MaxDomesticTripHours
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setMaxDomesticTripHours($MaxDomesticTripHours)
    {
      $this->MaxDomesticTripHours = $MaxDomesticTripHours;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxEmployeesPerFlight()
    {
      return $this->MaxEmployeesPerFlight;
    }

    /**
     * @param int $MaxEmployeesPerFlight
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setMaxEmployeesPerFlight($MaxEmployeesPerFlight)
    {
      $this->MaxEmployeesPerFlight = $MaxEmployeesPerFlight;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxInternationalTripHours()
    {
      return $this->MaxInternationalTripHours;
    }

    /**
     * @param int $MaxInternationalTripHours
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setMaxInternationalTripHours($MaxInternationalTripHours)
    {
      $this->MaxInternationalTripHours = $MaxInternationalTripHours;
      return $this;
    }

    /**
     * @return anonymous680
     */
    public function getMealTypeCRS()
    {
      return $this->MealTypeCRS;
    }

    /**
     * @param anonymous680 $MealTypeCRS
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setMealTypeCRS($MealTypeCRS)
    {
      $this->MealTypeCRS = $MealTypeCRS;
      return $this;
    }

    /**
     * @return anonymous681
     */
    public function getMealTypeSSR()
    {
      return $this->MealTypeSSR;
    }

    /**
     * @param anonymous681 $MealTypeSSR
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setMealTypeSSR($MealTypeSSR)
    {
      $this->MealTypeSSR = $MealTypeSSR;
      return $this;
    }

    /**
     * @return anonymous682
     */
    public function getSeatNumber()
    {
      return $this->SeatNumber;
    }

    /**
     * @param anonymous682 $SeatNumber
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setSeatNumber($SeatNumber)
    {
      $this->SeatNumber = $SeatNumber;
      return $this;
    }

    /**
     * @return anonymous683
     */
    public function getSSRCode()
    {
      return $this->SSRCode;
    }

    /**
     * @param anonymous683 $SSRCode
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setSSRCode($SSRCode)
    {
      $this->SSRCode = $SSRCode;
      return $this;
    }

    /**
     * @return anonymous684
     */
    public function getStartingFlightNumber()
    {
      return $this->StartingFlightNumber;
    }

    /**
     * @param anonymous684 $StartingFlightNumber
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setStartingFlightNumber($StartingFlightNumber)
    {
      $this->StartingFlightNumber = $StartingFlightNumber;
      return $this;
    }

    /**
     * @return anonymous882
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param anonymous882 $AccountCode
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getArrivalGeoPoliticalAreaType()
    {
      return $this->ArrivalGeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $ArrivalGeoPoliticalAreaType
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setArrivalGeoPoliticalAreaType($ArrivalGeoPoliticalAreaType)
    {
      $this->ArrivalGeoPoliticalAreaType = $ArrivalGeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getArrivalGeoPoliticalAreaCode()
    {
      return $this->ArrivalGeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $ArrivalGeoPoliticalAreaCode
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setArrivalGeoPoliticalAreaCode($ArrivalGeoPoliticalAreaCode)
    {
      $this->ArrivalGeoPoliticalAreaCode = $ArrivalGeoPoliticalAreaCode;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBenchMarkAmount()
    {
      return $this->BenchMarkAmount;
    }

    /**
     * @param typeMoney $BenchMarkAmount
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setBenchMarkAmount($BenchMarkAmount)
    {
      $this->BenchMarkAmount = $BenchMarkAmount;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getConnectionGeoPoliticalAreaType()
    {
      return $this->ConnectionGeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $ConnectionGeoPoliticalAreaType
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setConnectionGeoPoliticalAreaType($ConnectionGeoPoliticalAreaType)
    {
      $this->ConnectionGeoPoliticalAreaType = $ConnectionGeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getConnectionGeoPoliticalAreaCode()
    {
      return $this->ConnectionGeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $ConnectionGeoPoliticalAreaCode
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setConnectionGeoPoliticalAreaCode($ConnectionGeoPoliticalAreaCode)
    {
      $this->ConnectionGeoPoliticalAreaCode = $ConnectionGeoPoliticalAreaCode;
      return $this;
    }

    /**
     * @return anonymous883
     */
    public function getContractCode()
    {
      return $this->ContractCode;
    }

    /**
     * @param anonymous883 $ContractCode
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setContractCode($ContractCode)
    {
      $this->ContractCode = $ContractCode;
      return $this;
    }

    /**
     * @return anonymous884
     */
    public function getCorporateID()
    {
      return $this->CorporateID;
    }

    /**
     * @param anonymous884 $CorporateID
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setCorporateID($CorporateID)
    {
      $this->CorporateID = $CorporateID;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getTravelStartDate()
    {
      return $this->TravelStartDate;
    }

    /**
     * @param date $TravelStartDate
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setTravelStartDate($TravelStartDate)
    {
      $this->TravelStartDate = $TravelStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getTravelEndDate()
    {
      return $this->TravelEndDate;
    }

    /**
     * @param date $TravelEndDate
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setTravelEndDate($TravelEndDate)
    {
      $this->TravelEndDate = $TravelEndDate;
      return $this;
    }

    /**
     * @return anonymous893
     */
    public function getCabinTypeMiscTravel()
    {
      return $this->CabinTypeMiscTravel;
    }

    /**
     * @param anonymous893 $CabinTypeMiscTravel
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setCabinTypeMiscTravel($CabinTypeMiscTravel)
    {
      $this->CabinTypeMiscTravel = $CabinTypeMiscTravel;
      return $this;
    }

    /**
     * @return anonymous894
     */
    public function getCabinTypeRefCategory()
    {
      return $this->CabinTypeRefCategory;
    }

    /**
     * @param anonymous894 $CabinTypeRefCategory
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setCabinTypeRefCategory($CabinTypeRefCategory)
    {
      $this->CabinTypeRefCategory = $CabinTypeRefCategory;
      return $this;
    }

    /**
     * @return anonymous887
     */
    public function getSeatTypeMiscTravel()
    {
      return $this->SeatTypeMiscTravel;
    }

    /**
     * @param anonymous887 $SeatTypeMiscTravel
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setSeatTypeMiscTravel($SeatTypeMiscTravel)
    {
      $this->SeatTypeMiscTravel = $SeatTypeMiscTravel;
      return $this;
    }

    /**
     * @return anonymous888
     */
    public function getSeatTypeMiscRefCategory()
    {
      return $this->SeatTypeMiscRefCategory;
    }

    /**
     * @param anonymous888 $SeatTypeMiscRefCategory
     * @return \FilippoToso\Travelport\UProfile\typeAirPreferenceHistory
     */
    public function setSeatTypeMiscRefCategory($SeatTypeMiscRefCategory)
    {
      $this->SeatTypeMiscRefCategory = $SeatTypeMiscRefCategory;
      return $this;
    }

}
