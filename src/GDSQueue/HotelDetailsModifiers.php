<?php

namespace FilippoToso\Travelport\GDSQueue;

class HotelDetailsModifiers
{

    /**
     * @var PermittedProviders $PermittedProviders
     */
    protected $PermittedProviders = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    protected $CorporateDiscountID = null;

    /**
     * @var HotelStay $HotelStay
     */
    protected $HotelStay = null;

    /**
     * @var NumberOfChildren $NumberOfChildren
     */
    protected $NumberOfChildren = null;

    /**
     * @var HotelBedding $HotelBedding
     */
    protected $HotelBedding = null;

    /**
     * @var typeOTACode[] $RateCategory
     */
    protected $RateCategory = null;

    /**
     * @var PermittedAggregators $PermittedAggregators
     */
    protected $PermittedAggregators = null;

    /**
     * @var BookingGuestInformation $BookingGuestInformation
     */
    protected $BookingGuestInformation = null;

    /**
     * @var int $NumberOfAdults
     */
    protected $NumberOfAdults = null;

    /**
     * @var typeRateRuleDetail $RateRuleDetail
     */
    protected $RateRuleDetail = null;

    /**
     * @var int $NumberOfRooms
     */
    protected $NumberOfRooms = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeCurrency $PreferredCurrency
     */
    protected $PreferredCurrency = null;

    /**
     * @var int $TotalOccupants
     */
    protected $TotalOccupants = null;

    /**
     * @var boolean $ProcessAllNegoRatesInd
     */
    protected $ProcessAllNegoRatesInd = null;

    /**
     * @var int $MaxWait
     */
    protected $MaxWait = null;

    /**
     * @param PermittedProviders $PermittedProviders
     * @param LoyaltyCard $LoyaltyCard
     * @param CorporateDiscountID $CorporateDiscountID
     * @param HotelStay $HotelStay
     * @param NumberOfChildren $NumberOfChildren
     * @param HotelBedding $HotelBedding
     * @param PermittedAggregators $PermittedAggregators
     * @param BookingGuestInformation $BookingGuestInformation
     * @param int $NumberOfAdults
     * @param typeRateRuleDetail $RateRuleDetail
     * @param int $NumberOfRooms
     * @param typeRef $Key
     * @param typeCurrency $PreferredCurrency
     * @param int $TotalOccupants
     * @param boolean $ProcessAllNegoRatesInd
     * @param int $MaxWait
     */
    public function __construct($PermittedProviders = null, $LoyaltyCard = null, $CorporateDiscountID = null, $HotelStay = null, $NumberOfChildren = null, $HotelBedding = null, $PermittedAggregators = null, $BookingGuestInformation = null, $NumberOfAdults = null, $RateRuleDetail = null, $NumberOfRooms = null, $Key = null, $PreferredCurrency = null, $TotalOccupants = null, $ProcessAllNegoRatesInd = null, $MaxWait = null)
    {
      $this->PermittedProviders = $PermittedProviders;
      $this->LoyaltyCard = $LoyaltyCard;
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->HotelStay = $HotelStay;
      $this->NumberOfChildren = $NumberOfChildren;
      $this->HotelBedding = $HotelBedding;
      $this->PermittedAggregators = $PermittedAggregators;
      $this->BookingGuestInformation = $BookingGuestInformation;
      $this->NumberOfAdults = $NumberOfAdults;
      $this->RateRuleDetail = $RateRuleDetail;
      $this->NumberOfRooms = $NumberOfRooms;
      $this->Key = $Key;
      $this->PreferredCurrency = $PreferredCurrency;
      $this->TotalOccupants = $TotalOccupants;
      $this->ProcessAllNegoRatesInd = $ProcessAllNegoRatesInd;
      $this->MaxWait = $MaxWait;
    }

    /**
     * @return PermittedProviders
     */
    public function getPermittedProviders()
    {
      return $this->PermittedProviders;
    }

    /**
     * @param PermittedProviders $PermittedProviders
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setPermittedProviders($PermittedProviders)
    {
      $this->PermittedProviders = $PermittedProviders;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

    /**
     * @return CorporateDiscountID
     */
    public function getCorporateDiscountID()
    {
      return $this->CorporateDiscountID;
    }

    /**
     * @param CorporateDiscountID $CorporateDiscountID
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      return $this;
    }

    /**
     * @return HotelStay
     */
    public function getHotelStay()
    {
      return $this->HotelStay;
    }

    /**
     * @param HotelStay $HotelStay
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setHotelStay($HotelStay)
    {
      $this->HotelStay = $HotelStay;
      return $this;
    }

    /**
     * @return NumberOfChildren
     */
    public function getNumberOfChildren()
    {
      return $this->NumberOfChildren;
    }

    /**
     * @param NumberOfChildren $NumberOfChildren
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setNumberOfChildren($NumberOfChildren)
    {
      $this->NumberOfChildren = $NumberOfChildren;
      return $this;
    }

    /**
     * @return HotelBedding
     */
    public function getHotelBedding()
    {
      return $this->HotelBedding;
    }

    /**
     * @param HotelBedding $HotelBedding
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setHotelBedding($HotelBedding)
    {
      $this->HotelBedding = $HotelBedding;
      return $this;
    }

    /**
     * @return typeOTACode[]
     */
    public function getRateCategory()
    {
      return $this->RateCategory;
    }

    /**
     * @param typeOTACode[] $RateCategory
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setRateCategory(array $RateCategory = null)
    {
      $this->RateCategory = $RateCategory;
      return $this;
    }

    /**
     * @return PermittedAggregators
     */
    public function getPermittedAggregators()
    {
      return $this->PermittedAggregators;
    }

    /**
     * @param PermittedAggregators $PermittedAggregators
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setPermittedAggregators($PermittedAggregators)
    {
      $this->PermittedAggregators = $PermittedAggregators;
      return $this;
    }

    /**
     * @return BookingGuestInformation
     */
    public function getBookingGuestInformation()
    {
      return $this->BookingGuestInformation;
    }

    /**
     * @param BookingGuestInformation $BookingGuestInformation
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setBookingGuestInformation($BookingGuestInformation)
    {
      $this->BookingGuestInformation = $BookingGuestInformation;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfAdults()
    {
      return $this->NumberOfAdults;
    }

    /**
     * @param int $NumberOfAdults
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setNumberOfAdults($NumberOfAdults)
    {
      $this->NumberOfAdults = $NumberOfAdults;
      return $this;
    }

    /**
     * @return typeRateRuleDetail
     */
    public function getRateRuleDetail()
    {
      return $this->RateRuleDetail;
    }

    /**
     * @param typeRateRuleDetail $RateRuleDetail
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setRateRuleDetail($RateRuleDetail)
    {
      $this->RateRuleDetail = $RateRuleDetail;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRooms()
    {
      return $this->NumberOfRooms;
    }

    /**
     * @param int $NumberOfRooms
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setNumberOfRooms($NumberOfRooms)
    {
      $this->NumberOfRooms = $NumberOfRooms;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getPreferredCurrency()
    {
      return $this->PreferredCurrency;
    }

    /**
     * @param typeCurrency $PreferredCurrency
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setPreferredCurrency($PreferredCurrency)
    {
      $this->PreferredCurrency = $PreferredCurrency;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalOccupants()
    {
      return $this->TotalOccupants;
    }

    /**
     * @param int $TotalOccupants
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setTotalOccupants($TotalOccupants)
    {
      $this->TotalOccupants = $TotalOccupants;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProcessAllNegoRatesInd()
    {
      return $this->ProcessAllNegoRatesInd;
    }

    /**
     * @param boolean $ProcessAllNegoRatesInd
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setProcessAllNegoRatesInd($ProcessAllNegoRatesInd)
    {
      $this->ProcessAllNegoRatesInd = $ProcessAllNegoRatesInd;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxWait()
    {
      return $this->MaxWait;
    }

    /**
     * @param int $MaxWait
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailsModifiers
     */
    public function setMaxWait($MaxWait)
    {
      $this->MaxWait = $MaxWait;
      return $this;
    }

}
