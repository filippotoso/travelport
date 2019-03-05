<?php

namespace FilippoToso\Travelport\Vehicle;

class SearchPassenger extends typePassengerType
{

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
     * @param typeRef $Key
     */
    public function __construct($Name = null, $LoyaltyCard = null, $DiscountCard = null, $PersonalGeography = null, $Code = null, $Age = null, $DOB = null, $Gender = null, $PricePTCOnly = null, $BookingTravelerRef = null, $AccompaniedPassenger = null, $ResidencyType = null, $Key = null)
    {
      parent::__construct($Name, $LoyaltyCard, $DiscountCard, $PersonalGeography, $Code, $Age, $DOB, $Gender, $PricePTCOnly, $BookingTravelerRef, $AccompaniedPassenger, $ResidencyType);
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Vehicle\SearchPassenger
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
