<?php

namespace FilippoToso\Travelport\Rail;

class PassengerType extends typePassengerType
{

    /**
     * @var FareGuaranteeInfo $FareGuaranteeInfo
     */
    protected $FareGuaranteeInfo = null;

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
     * @param FareGuaranteeInfo $FareGuaranteeInfo
     */
    public function __construct($Name, $LoyaltyCard, $DiscountCard, $PersonalGeography, $Code, $Age, $DOB, $Gender, $PricePTCOnly, $BookingTravelerRef, $AccompaniedPassenger, $ResidencyType, $FareGuaranteeInfo)
    {
      parent::__construct($Name, $LoyaltyCard, $DiscountCard, $PersonalGeography, $Code, $Age, $DOB, $Gender, $PricePTCOnly, $BookingTravelerRef, $AccompaniedPassenger, $ResidencyType);
      $this->FareGuaranteeInfo = $FareGuaranteeInfo;
    }

    /**
     * @return FareGuaranteeInfo
     */
    public function getFareGuaranteeInfo()
    {
      return $this->FareGuaranteeInfo;
    }

    /**
     * @param FareGuaranteeInfo $FareGuaranteeInfo
     * @return \FilippoToso\Travelport\Rail\PassengerType
     */
    public function setFareGuaranteeInfo($FareGuaranteeInfo)
    {
      $this->FareGuaranteeInfo = $FareGuaranteeInfo;
      return $this;
    }

}
