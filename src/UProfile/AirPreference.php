<?php

namespace FilippoToso\Travelport\UProfile;

class AirPreference extends typeBasePreference
{

    /**
     * @var typeAirFare $AirFareType
     */
    protected $AirFareType = null;

    /**
     * @var typeFlightNumber $StartingFlightNumber
     */
    protected $StartingFlightNumber = null;

    /**
     * @var typeFlightNumber $EndingFlightNumber
     */
    protected $EndingFlightNumber = null;

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
     * @var int $MaxEmployeesPerFlight
     */
    protected $MaxEmployeesPerFlight = null;

    /**
     * @var int $MaxDomesticTripHours
     */
    protected $MaxDomesticTripHours = null;

    /**
     * @var int $MaxInternationalTripHours
     */
    protected $MaxInternationalTripHours = null;

    /**
     * @var anonymous658 $SeatNumber
     */
    protected $SeatNumber = null;

    /**
     * @var anonymous659 $CRSCode
     */
    protected $CRSCode = null;

    /**
     * @var typeSSRCode $SSRCode
     */
    protected $SSRCode = null;

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
     * @param typeAirFare $AirFareType
     * @param typeFlightNumber $StartingFlightNumber
     * @param typeFlightNumber $EndingFlightNumber
     * @param boolean $Interline
     * @param typeMoney $MaxFareAmount
     * @param int $MaxConnectionMinutes
     * @param int $MaxEmployeesPerFlight
     * @param int $MaxDomesticTripHours
     * @param int $MaxInternationalTripHours
     * @param anonymous658 $SeatNumber
     * @param anonymous659 $CRSCode
     * @param typeSSRCode $SSRCode
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
    public function __construct($Key = null, $TagRef = null, $BookingStartDate = null, $BookingEndDate = null, $Currency = null, $DepartureGeoPoliticalAreaType = null, $DepartureGeoPoliticalAreaCode = null, $Emphasis = null, $GeneralPreference = null, $Inclusive = null, $LoyaltyProgramEnrollmentRef = null, $OtherLoyaltyProgramNumber = null, $PaymentDetailsRef = null, $PreferencePaymentMethod = null, $Purpose = null, $PriorityOrder = null, $Supplier = null, $TripApproval = null, $AirFareType = null, $StartingFlightNumber = null, $EndingFlightNumber = null, $Interline = null, $MaxFareAmount = null, $MaxConnectionMinutes = null, $MaxEmployeesPerFlight = null, $MaxDomesticTripHours = null, $MaxInternationalTripHours = null, $SeatNumber = null, $CRSCode = null, $SSRCode = null, $AccountCode = null, $ArrivalGeoPoliticalAreaType = null, $ArrivalGeoPoliticalAreaCode = null, $BenchMarkAmount = null, $ConnectionGeoPoliticalAreaType = null, $ConnectionGeoPoliticalAreaCode = null, $ContractCode = null, $CorporateID = null, $PseudoCityCode = null, $TravelStartDate = null, $TravelEndDate = null, $CabinTypeMiscTravel = null, $CabinTypeRefCategory = null, $SeatTypeMiscTravel = null, $SeatTypeMiscRefCategory = null)
    {
      parent::__construct($Key, $TagRef, $BookingStartDate, $BookingEndDate, $Currency, $DepartureGeoPoliticalAreaType, $DepartureGeoPoliticalAreaCode, $Emphasis, $GeneralPreference, $Inclusive, $LoyaltyProgramEnrollmentRef, $OtherLoyaltyProgramNumber, $PaymentDetailsRef, $PreferencePaymentMethod, $Purpose, $PriorityOrder, $Supplier, $TripApproval);
      $this->AirFareType = $AirFareType;
      $this->StartingFlightNumber = $StartingFlightNumber;
      $this->EndingFlightNumber = $EndingFlightNumber;
      $this->Interline = $Interline;
      $this->MaxFareAmount = $MaxFareAmount;
      $this->MaxConnectionMinutes = $MaxConnectionMinutes;
      $this->MaxEmployeesPerFlight = $MaxEmployeesPerFlight;
      $this->MaxDomesticTripHours = $MaxDomesticTripHours;
      $this->MaxInternationalTripHours = $MaxInternationalTripHours;
      $this->SeatNumber = $SeatNumber;
      $this->CRSCode = $CRSCode;
      $this->SSRCode = $SSRCode;
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setAirFareType($AirFareType)
    {
      $this->AirFareType = $AirFareType;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getStartingFlightNumber()
    {
      return $this->StartingFlightNumber;
    }

    /**
     * @param typeFlightNumber $StartingFlightNumber
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setStartingFlightNumber($StartingFlightNumber)
    {
      $this->StartingFlightNumber = $StartingFlightNumber;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getEndingFlightNumber()
    {
      return $this->EndingFlightNumber;
    }

    /**
     * @param typeFlightNumber $EndingFlightNumber
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setEndingFlightNumber($EndingFlightNumber)
    {
      $this->EndingFlightNumber = $EndingFlightNumber;
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setMaxConnectionMinutes($MaxConnectionMinutes)
    {
      $this->MaxConnectionMinutes = $MaxConnectionMinutes;
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setMaxEmployeesPerFlight($MaxEmployeesPerFlight)
    {
      $this->MaxEmployeesPerFlight = $MaxEmployeesPerFlight;
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setMaxDomesticTripHours($MaxDomesticTripHours)
    {
      $this->MaxDomesticTripHours = $MaxDomesticTripHours;
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setMaxInternationalTripHours($MaxInternationalTripHours)
    {
      $this->MaxInternationalTripHours = $MaxInternationalTripHours;
      return $this;
    }

    /**
     * @return anonymous658
     */
    public function getSeatNumber()
    {
      return $this->SeatNumber;
    }

    /**
     * @param anonymous658 $SeatNumber
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setSeatNumber($SeatNumber)
    {
      $this->SeatNumber = $SeatNumber;
      return $this;
    }

    /**
     * @return anonymous659
     */
    public function getCRSCode()
    {
      return $this->CRSCode;
    }

    /**
     * @param anonymous659 $CRSCode
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setCRSCode($CRSCode)
    {
      $this->CRSCode = $CRSCode;
      return $this;
    }

    /**
     * @return typeSSRCode
     */
    public function getSSRCode()
    {
      return $this->SSRCode;
    }

    /**
     * @param typeSSRCode $SSRCode
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setSSRCode($SSRCode)
    {
      $this->SSRCode = $SSRCode;
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
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
     * @return \FilippoToso\Travelport\UProfile\AirPreference
     */
    public function setSeatTypeMiscRefCategory($SeatTypeMiscRefCategory)
    {
      $this->SeatTypeMiscRefCategory = $SeatTypeMiscRefCategory;
      return $this;
    }

}
