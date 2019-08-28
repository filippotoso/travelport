<?php

namespace FilippoToso\Travelport\GDSQueue;

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
    public function __construct($Name = null, $LoyaltyCard = null, $DiscountCard = null, $PersonalGeography = null, $Code = null, $Age = null, $DOB = null, $Gender = null, $PricePTCOnly = null, $BookingTravelerRef = null, $AccompaniedPassenger = null, $ResidencyType = null, $FareGuaranteeInfo = null)
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
     * @return \FilippoToso\Travelport\GDSQueue\PassengerType
     */
    public function setFareGuaranteeInfo($FareGuaranteeInfo)
    {
      $this->FareGuaranteeInfo = $FareGuaranteeInfo;
      return $this;
    }

}
