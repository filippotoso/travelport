<?php

namespace FilippoToso\Travelport\UProfile;

class BookingTravelerInfo
{

    /**
     * @var BookingTravelerName $BookingTravelerName
     */
    protected $BookingTravelerName = null;

    /**
     * @var NameRemark $NameRemark
     */
    protected $NameRemark = null;

    /**
     * @var date $DOB
     */
    protected $DOB = null;

    /**
     * @var TravelInfo $TravelInfo
     */
    protected $TravelInfo = null;

    /**
     * @var Email $Email
     */
    protected $Email = null;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var typeStructuredAddress $Address
     */
    protected $Address = null;

    /**
     * @var string $EmergencyInfo
     */
    protected $EmergencyInfo = null;

    /**
     * @var DeliveryInfo $DeliveryInfo
     */
    protected $DeliveryInfo = null;

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @var CustomizedNameData $CustomizedNameData
     */
    protected $CustomizedNameData = null;

    /**
     * @var AppliedProfile $AppliedProfile
     */
    protected $AppliedProfile = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typePTC $TravelerType
     */
    protected $TravelerType = null;

    /**
     * @var typeGender $Gender
     */
    protected $Gender = null;

    /**
     * @param BookingTravelerName $BookingTravelerName
     * @param NameRemark $NameRemark
     * @param TravelInfo $TravelInfo
     * @param Email $Email
     * @param PhoneNumber $PhoneNumber
     * @param DeliveryInfo $DeliveryInfo
     * @param CustomizedNameData $CustomizedNameData
     * @param AppliedProfile $AppliedProfile
     * @param typeRef $Key
     * @param typePTC $TravelerType
     * @param typeGender $Gender
     */
    public function __construct($BookingTravelerName = null, $NameRemark = null, $TravelInfo = null, $Email = null, $PhoneNumber = null, $DeliveryInfo = null, $CustomizedNameData = null, $AppliedProfile = null, $Key = null, $TravelerType = null, $Gender = null)
    {
      $this->BookingTravelerName = $BookingTravelerName;
      $this->NameRemark = $NameRemark;
      $this->TravelInfo = $TravelInfo;
      $this->Email = $Email;
      $this->PhoneNumber = $PhoneNumber;
      $this->DeliveryInfo = $DeliveryInfo;
      $this->CustomizedNameData = $CustomizedNameData;
      $this->AppliedProfile = $AppliedProfile;
      $this->Key = $Key;
      $this->TravelerType = $TravelerType;
      $this->Gender = $Gender;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setBookingTravelerName($BookingTravelerName)
    {
      $this->BookingTravelerName = $BookingTravelerName;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setNameRemark($NameRemark)
    {
      $this->NameRemark = $NameRemark;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setDOB($DOB)
    {
      $this->DOB = $DOB;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setTravelInfo($TravelInfo)
    {
      $this->TravelInfo = $TravelInfo;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setEmergencyInfo($EmergencyInfo)
    {
      $this->EmergencyInfo = $EmergencyInfo;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setDeliveryInfo($DeliveryInfo)
    {
      $this->DeliveryInfo = $DeliveryInfo;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setCustomizedNameData($CustomizedNameData)
    {
      $this->CustomizedNameData = $CustomizedNameData;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setAppliedProfile($AppliedProfile)
    {
      $this->AppliedProfile = $AppliedProfile;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setTravelerType($TravelerType)
    {
      $this->TravelerType = $TravelerType;
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
     * @return \FilippoToso\Travelport\UProfile\BookingTravelerInfo
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

}
