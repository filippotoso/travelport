<?php

namespace FilippoToso\Travelport\GDSQueue;

class BookingTraveler
{

    /**
     * @var BookingTravelerName $BookingTravelerName
     */
    protected $BookingTravelerName = null;

    /**
     * @var DeliveryInfo $DeliveryInfo
     */
    protected $DeliveryInfo = null;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var Email $Email
     */
    protected $Email = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var DiscountCard $DiscountCard
     */
    protected $DiscountCard = null;

    /**
     * @var SSR $SSR
     */
    protected $SSR = null;

    /**
     * @var NameRemark $NameRemark
     */
    protected $NameRemark = null;

    /**
     * @var AirSeatAssignment $AirSeatAssignment
     */
    protected $AirSeatAssignment = null;

    /**
     * @var RailSeatAssignment $RailSeatAssignment
     */
    protected $RailSeatAssignment = null;

    /**
     * @var string $EmergencyInfo
     */
    protected $EmergencyInfo = null;

    /**
     * @var typeStructuredAddress $Address
     */
    protected $Address = null;

    /**
     * @var DriversLicense $DriversLicense
     */
    protected $DriversLicense = null;

    /**
     * @var AppliedProfile $AppliedProfile
     */
    protected $AppliedProfile = null;

    /**
     * @var CustomizedNameData $CustomizedNameData
     */
    protected $CustomizedNameData = null;

    /**
     * @var TravelComplianceData $TravelComplianceData
     */
    protected $TravelComplianceData = null;

    /**
     * @var TravelInfo $TravelInfo
     */
    protected $TravelInfo = null;

    /**
     * @var string $NameNumber
     */
    protected $NameNumber = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typePTC $TravelerType
     */
    protected $TravelerType = null;

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @var boolean $VIP
     */
    protected $VIP = null;

    /**
     * @var date $DOB
     */
    protected $DOB = null;

    /**
     * @var typeGender $Gender
     */
    protected $Gender = null;

    /**
     * @var typeCountry $Nationality
     */
    protected $Nationality = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param BookingTravelerName $BookingTravelerName
     * @param DeliveryInfo $DeliveryInfo
     * @param PhoneNumber $PhoneNumber
     * @param Email $Email
     * @param LoyaltyCard $LoyaltyCard
     * @param DiscountCard $DiscountCard
     * @param SSR $SSR
     * @param NameRemark $NameRemark
     * @param AirSeatAssignment $AirSeatAssignment
     * @param RailSeatAssignment $RailSeatAssignment
     * @param string $EmergencyInfo
     * @param typeStructuredAddress $Address
     * @param DriversLicense $DriversLicense
     * @param AppliedProfile $AppliedProfile
     * @param CustomizedNameData $CustomizedNameData
     * @param TravelComplianceData $TravelComplianceData
     * @param TravelInfo $TravelInfo
     * @param string $NameNumber
     * @param typeRef $Key
     * @param typePTC $TravelerType
     * @param int $Age
     * @param boolean $VIP
     * @param date $DOB
     * @param typeGender $Gender
     * @param typeCountry $Nationality
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($BookingTravelerName = null, $DeliveryInfo = null, $PhoneNumber = null, $Email = null, $LoyaltyCard = null, $DiscountCard = null, $SSR = null, $NameRemark = null, $AirSeatAssignment = null, $RailSeatAssignment = null, $EmergencyInfo = null, $Address = null, $DriversLicense = null, $AppliedProfile = null, $CustomizedNameData = null, $TravelComplianceData = null, $TravelInfo = null, $NameNumber = null, $Key = null, $TravelerType = null, $Age = null, $VIP = null, $DOB = null, $Gender = null, $Nationality = null, $ElStat = null, $KeyOverride = null)
    {
      $this->BookingTravelerName = $BookingTravelerName;
      $this->DeliveryInfo = $DeliveryInfo;
      $this->PhoneNumber = $PhoneNumber;
      $this->Email = $Email;
      $this->LoyaltyCard = $LoyaltyCard;
      $this->DiscountCard = $DiscountCard;
      $this->SSR = $SSR;
      $this->NameRemark = $NameRemark;
      $this->AirSeatAssignment = $AirSeatAssignment;
      $this->RailSeatAssignment = $RailSeatAssignment;
      $this->EmergencyInfo = $EmergencyInfo;
      $this->Address = $Address;
      $this->DriversLicense = $DriversLicense;
      $this->AppliedProfile = $AppliedProfile;
      $this->CustomizedNameData = $CustomizedNameData;
      $this->TravelComplianceData = $TravelComplianceData;
      $this->TravelInfo = $TravelInfo;
      $this->NameNumber = $NameNumber;
      $this->Key = $Key;
      $this->TravelerType = $TravelerType;
      $this->Age = $Age;
      $this->VIP = $VIP;
      $this->DOB = $DOB;
      $this->Gender = $Gender;
      $this->Nationality = $Nationality;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return BookingTravelerName
     */
    public function getBookingTravelerName()
    {
      return $this->BookingTravelerName;
    }

    /**
     * @param BookingTravelerName $BookingTravelerName
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setBookingTravelerName($BookingTravelerName)
    {
      $this->BookingTravelerName = $BookingTravelerName;
      return $this;
    }

    /**
     * @return DeliveryInfo
     */
    public function getDeliveryInfo()
    {
      return $this->DeliveryInfo;
    }

    /**
     * @param DeliveryInfo $DeliveryInfo
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setDeliveryInfo($DeliveryInfo)
    {
      $this->DeliveryInfo = $DeliveryInfo;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param Email $Email
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return LoyaltyCard
     */
    public function getLoyaltyCard()
    {
      return $this->LoyaltyCard;
    }

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

    /**
     * @return DiscountCard
     */
    public function getDiscountCard()
    {
      return $this->DiscountCard;
    }

    /**
     * @param DiscountCard $DiscountCard
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setDiscountCard($DiscountCard)
    {
      $this->DiscountCard = $DiscountCard;
      return $this;
    }

    /**
     * @return SSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param SSR $SSR
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return NameRemark
     */
    public function getNameRemark()
    {
      return $this->NameRemark;
    }

    /**
     * @param NameRemark $NameRemark
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setNameRemark($NameRemark)
    {
      $this->NameRemark = $NameRemark;
      return $this;
    }

    /**
     * @return AirSeatAssignment
     */
    public function getAirSeatAssignment()
    {
      return $this->AirSeatAssignment;
    }

    /**
     * @param AirSeatAssignment $AirSeatAssignment
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setAirSeatAssignment($AirSeatAssignment)
    {
      $this->AirSeatAssignment = $AirSeatAssignment;
      return $this;
    }

    /**
     * @return RailSeatAssignment
     */
    public function getRailSeatAssignment()
    {
      return $this->RailSeatAssignment;
    }

    /**
     * @param RailSeatAssignment $RailSeatAssignment
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setRailSeatAssignment($RailSeatAssignment)
    {
      $this->RailSeatAssignment = $RailSeatAssignment;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmergencyInfo()
    {
      return $this->EmergencyInfo;
    }

    /**
     * @param string $EmergencyInfo
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setEmergencyInfo($EmergencyInfo)
    {
      $this->EmergencyInfo = $EmergencyInfo;
      return $this;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeStructuredAddress $Address
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return DriversLicense
     */
    public function getDriversLicense()
    {
      return $this->DriversLicense;
    }

    /**
     * @param DriversLicense $DriversLicense
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setDriversLicense($DriversLicense)
    {
      $this->DriversLicense = $DriversLicense;
      return $this;
    }

    /**
     * @return AppliedProfile
     */
    public function getAppliedProfile()
    {
      return $this->AppliedProfile;
    }

    /**
     * @param AppliedProfile $AppliedProfile
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setAppliedProfile($AppliedProfile)
    {
      $this->AppliedProfile = $AppliedProfile;
      return $this;
    }

    /**
     * @return CustomizedNameData
     */
    public function getCustomizedNameData()
    {
      return $this->CustomizedNameData;
    }

    /**
     * @param CustomizedNameData $CustomizedNameData
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setCustomizedNameData($CustomizedNameData)
    {
      $this->CustomizedNameData = $CustomizedNameData;
      return $this;
    }

    /**
     * @return TravelComplianceData
     */
    public function getTravelComplianceData()
    {
      return $this->TravelComplianceData;
    }

    /**
     * @param TravelComplianceData $TravelComplianceData
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setTravelComplianceData($TravelComplianceData)
    {
      $this->TravelComplianceData = $TravelComplianceData;
      return $this;
    }

    /**
     * @return TravelInfo
     */
    public function getTravelInfo()
    {
      return $this->TravelInfo;
    }

    /**
     * @param TravelInfo $TravelInfo
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setTravelInfo($TravelInfo)
    {
      $this->TravelInfo = $TravelInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameNumber()
    {
      return $this->NameNumber;
    }

    /**
     * @param string $NameNumber
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setNameNumber($NameNumber)
    {
      $this->NameNumber = $NameNumber;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getTravelerType()
    {
      return $this->TravelerType;
    }

    /**
     * @param typePTC $TravelerType
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setTravelerType($TravelerType)
    {
      $this->TravelerType = $TravelerType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVIP()
    {
      return $this->VIP;
    }

    /**
     * @param boolean $VIP
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setVIP($VIP)
    {
      $this->VIP = $VIP;
      return $this;
    }

    /**
     * @return date
     */
    public function getDOB()
    {
      return $this->DOB;
    }

    /**
     * @param date $DOB
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setDOB($DOB)
    {
      $this->DOB = $DOB;
      return $this;
    }

    /**
     * @return typeGender
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param typeGender $Gender
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getNationality()
    {
      return $this->Nationality;
    }

    /**
     * @param typeCountry $Nationality
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setNationality($Nationality)
    {
      $this->Nationality = $Nationality;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\GDSQueue\BookingTraveler
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
