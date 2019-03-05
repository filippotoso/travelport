<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typePassengerType
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var DiscountCard $DiscountCard
     */
    protected $DiscountCard = null;

    /**
     * @var PersonalGeography $PersonalGeography
     */
    protected $PersonalGeography = null;

    /**
     * @var typePTC $Code
     */
    protected $Code = null;

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @var date $DOB
     */
    protected $DOB = null;

    /**
     * @var typeGender $Gender
     */
    protected $Gender = null;

    /**
     * @var boolean $PricePTCOnly
     */
    protected $PricePTCOnly = null;

    /**
     * @var string $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var boolean $AccompaniedPassenger
     */
    protected $AccompaniedPassenger = null;

    /**
     * @var typeResidency $ResidencyType
     */
    protected $ResidencyType = null;

    /**
     * @param Name $Name
     * @param LoyaltyCard $LoyaltyCard
     * @param DiscountCard $DiscountCard
     * @param PersonalGeography $PersonalGeography
     * @param typePTC $Code
     * @param int $Age
     * @param date $DOB
     * @param typeGender $Gender
     * @param boolean $PricePTCOnly
     * @param string $BookingTravelerRef
     * @param boolean $AccompaniedPassenger
     * @param typeResidency $ResidencyType
     */
    public function __construct($Name = null, $LoyaltyCard = null, $DiscountCard = null, $PersonalGeography = null, $Code = null, $Age = null, $DOB = null, $Gender = null, $PricePTCOnly = null, $BookingTravelerRef = null, $AccompaniedPassenger = null, $ResidencyType = null)
    {
      $this->Name = $Name;
      $this->LoyaltyCard = $LoyaltyCard;
      $this->DiscountCard = $DiscountCard;
      $this->PersonalGeography = $PersonalGeography;
      $this->Code = $Code;
      $this->Age = $Age;
      $this->DOB = $DOB;
      $this->Gender = $Gender;
      $this->PricePTCOnly = $PricePTCOnly;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->AccompaniedPassenger = $AccompaniedPassenger;
      $this->ResidencyType = $ResidencyType;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
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
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setDiscountCard($DiscountCard)
    {
      $this->DiscountCard = $DiscountCard;
      return $this;
    }

    /**
     * @return PersonalGeography
     */
    public function getPersonalGeography()
    {
      return $this->PersonalGeography;
    }

    /**
     * @param PersonalGeography $PersonalGeography
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setPersonalGeography($PersonalGeography)
    {
      $this->PersonalGeography = $PersonalGeography;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typePTC $Code
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
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
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPricePTCOnly()
    {
      return $this->PricePTCOnly;
    }

    /**
     * @param boolean $PricePTCOnly
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setPricePTCOnly($PricePTCOnly)
    {
      $this->PricePTCOnly = $PricePTCOnly;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param string $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccompaniedPassenger()
    {
      return $this->AccompaniedPassenger;
    }

    /**
     * @param boolean $AccompaniedPassenger
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setAccompaniedPassenger($AccompaniedPassenger)
    {
      $this->AccompaniedPassenger = $AccompaniedPassenger;
      return $this;
    }

    /**
     * @return typeResidency
     */
    public function getResidencyType()
    {
      return $this->ResidencyType;
    }

    /**
     * @param typeResidency $ResidencyType
     * @return \FilippoToso\Travelport\UniversalRecord\typePassengerType
     */
    public function setResidencyType($ResidencyType)
    {
      $this->ResidencyType = $ResidencyType;
      return $this;
    }

}
