<?php

namespace FilippoToso\Travelport\Util;

class SearchTraveler extends typePassengerType
{

    /**
     * @var AirSeatAssignment $AirSeatAssignment
     */
    protected $AirSeatAssignment = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

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
     * @param AirSeatAssignment $AirSeatAssignment
     * @param typeRef $Key
     */
    public function __construct($Name, $LoyaltyCard, $DiscountCard, $PersonalGeography, $Code, $Age, $DOB, $Gender, $PricePTCOnly, $BookingTravelerRef, $AccompaniedPassenger, $ResidencyType, $AirSeatAssignment, $Key)
    {
      parent::__construct($Name, $LoyaltyCard, $DiscountCard, $PersonalGeography, $Code, $Age, $DOB, $Gender, $PricePTCOnly, $BookingTravelerRef, $AccompaniedPassenger, $ResidencyType);
      $this->AirSeatAssignment = $AirSeatAssignment;
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Util\SearchTraveler
     */
    public function setAirSeatAssignment($AirSeatAssignment)
    {
      $this->AirSeatAssignment = $AirSeatAssignment;
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
     * @return \FilippoToso\Travelport\Util\SearchTraveler
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
