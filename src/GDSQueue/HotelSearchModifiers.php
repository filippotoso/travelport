<?php

namespace FilippoToso\Travelport\GDSQueue;

class HotelSearchModifiers
{

    /**
     * @var PermittedChains $PermittedChains
     */
    protected $PermittedChains = null;

    /**
     * @var ProhibitedChains $ProhibitedChains
     */
    protected $ProhibitedChains = null;

    /**
     * @var PermittedProviders $PermittedProviders
     */
    protected $PermittedProviders = null;

    /**
     * @var PermittedAggregators $PermittedAggregators
     */
    protected $PermittedAggregators = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    protected $CorporateDiscountID = null;

    /**
     * @var typeOTACode[] $RateCategory
     */
    protected $RateCategory = null;

    /**
     * @var HotelRating $HotelRating
     */
    protected $HotelRating = null;

    /**
     * @var SearchPriority $SearchPriority
     */
    protected $SearchPriority = null;

    /**
     * @var HotelBedding $HotelBedding
     */
    protected $HotelBedding = null;

    /**
     * @var Amenities $Amenities
     */
    protected $Amenities = null;

    /**
     * @var typeHotelPaymentType $HotelPaymentType
     */
    protected $HotelPaymentType = null;

    /**
     * @var NumberOfChildren $NumberOfChildren
     */
    protected $NumberOfChildren = null;

    /**
     * @var HotelTransportation $HotelTransportation
     */
    protected $HotelTransportation = null;

    /**
     * @var BookingGuestInformation $BookingGuestInformation
     */
    protected $BookingGuestInformation = null;

    /**
     * @var int $NumberOfAdults
     */
    protected $NumberOfAdults = null;

    /**
     * @var int $NumberOfRooms
     */
    protected $NumberOfRooms = null;

    /**
     * @var int $MaxProperties
     */
    protected $MaxProperties = null;

    /**
     * @var boolean $IsRelaxed
     */
    protected $IsRelaxed = null;

    /**
     * @var typeCurrency $PreferredCurrency
     */
    protected $PreferredCurrency = null;

    /**
     * @var boolean $AvailableHotelsOnly
     */
    protected $AvailableHotelsOnly = null;

    /**
     * @var int $MaxWait
     */
    protected $MaxWait = null;

    /**
     * @var boolean $AggregateResults
     */
    protected $AggregateResults = null;

    /**
     * @var boolean $ReturnPropertyDescription
     */
    protected $ReturnPropertyDescription = null;

    /**
     * @var int $NumOfRatePlans
     */
    protected $NumOfRatePlans = null;

    /**
     * @var boolean $ReturnAmenities
     */
    protected $ReturnAmenities = null;

    /**
     * @param PermittedProviders $PermittedProviders
     * @param PermittedAggregators $PermittedAggregators
     * @param LoyaltyCard $LoyaltyCard
     * @param CorporateDiscountID $CorporateDiscountID
     * @param HotelRating $HotelRating
     * @param SearchPriority $SearchPriority
     * @param HotelBedding $HotelBedding
     * @param NumberOfChildren $NumberOfChildren
     * @param BookingGuestInformation $BookingGuestInformation
     * @param int $NumberOfAdults
     * @param int $NumberOfRooms
     * @param int $MaxProperties
     * @param boolean $IsRelaxed
     * @param typeCurrency $PreferredCurrency
     * @param boolean $AvailableHotelsOnly
     * @param int $MaxWait
     * @param boolean $AggregateResults
     * @param boolean $ReturnPropertyDescription
     * @param int $NumOfRatePlans
     * @param boolean $ReturnAmenities
     */
    public function __construct($PermittedProviders = null, $PermittedAggregators = null, $LoyaltyCard = null, $CorporateDiscountID = null, $HotelRating = null, $SearchPriority = null, $HotelBedding = null, $NumberOfChildren = null, $BookingGuestInformation = null, $NumberOfAdults = null, $NumberOfRooms = null, $MaxProperties = null, $IsRelaxed = null, $PreferredCurrency = null, $AvailableHotelsOnly = null, $MaxWait = null, $AggregateResults = null, $ReturnPropertyDescription = null, $NumOfRatePlans = null, $ReturnAmenities = null)
    {
      $this->PermittedProviders = $PermittedProviders;
      $this->PermittedAggregators = $PermittedAggregators;
      $this->LoyaltyCard = $LoyaltyCard;
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->HotelRating = $HotelRating;
      $this->SearchPriority = $SearchPriority;
      $this->HotelBedding = $HotelBedding;
      $this->NumberOfChildren = $NumberOfChildren;
      $this->BookingGuestInformation = $BookingGuestInformation;
      $this->NumberOfAdults = $NumberOfAdults;
      $this->NumberOfRooms = $NumberOfRooms;
      $this->MaxProperties = $MaxProperties;
      $this->IsRelaxed = $IsRelaxed;
      $this->PreferredCurrency = $PreferredCurrency;
      $this->AvailableHotelsOnly = $AvailableHotelsOnly;
      $this->MaxWait = $MaxWait;
      $this->AggregateResults = $AggregateResults;
      $this->ReturnPropertyDescription = $ReturnPropertyDescription;
      $this->NumOfRatePlans = $NumOfRatePlans;
      $this->ReturnAmenities = $ReturnAmenities;
    }

    /**
     * @return PermittedChains
     */
    public function getPermittedChains()
    {
      return $this->PermittedChains;
    }

    /**
     * @param PermittedChains $PermittedChains
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setPermittedChains($PermittedChains)
    {
      $this->PermittedChains = $PermittedChains;
      return $this;
    }

    /**
     * @return ProhibitedChains
     */
    public function getProhibitedChains()
    {
      return $this->ProhibitedChains;
    }

    /**
     * @param ProhibitedChains $ProhibitedChains
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setProhibitedChains($ProhibitedChains)
    {
      $this->ProhibitedChains = $ProhibitedChains;
      return $this;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setPermittedProviders($PermittedProviders)
    {
      $this->PermittedProviders = $PermittedProviders;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setPermittedAggregators($PermittedAggregators)
    {
      $this->PermittedAggregators = $PermittedAggregators;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setRateCategory(array $RateCategory = null)
    {
      $this->RateCategory = $RateCategory;
      return $this;
    }

    /**
     * @return HotelRating
     */
    public function getHotelRating()
    {
      return $this->HotelRating;
    }

    /**
     * @param HotelRating $HotelRating
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setHotelRating($HotelRating)
    {
      $this->HotelRating = $HotelRating;
      return $this;
    }

    /**
     * @return SearchPriority
     */
    public function getSearchPriority()
    {
      return $this->SearchPriority;
    }

    /**
     * @param SearchPriority $SearchPriority
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setSearchPriority($SearchPriority)
    {
      $this->SearchPriority = $SearchPriority;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setHotelBedding($HotelBedding)
    {
      $this->HotelBedding = $HotelBedding;
      return $this;
    }

    /**
     * @return Amenities
     */
    public function getAmenities()
    {
      return $this->Amenities;
    }

    /**
     * @param Amenities $Amenities
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setAmenities($Amenities)
    {
      $this->Amenities = $Amenities;
      return $this;
    }

    /**
     * @return typeHotelPaymentType
     */
    public function getHotelPaymentType()
    {
      return $this->HotelPaymentType;
    }

    /**
     * @param typeHotelPaymentType $HotelPaymentType
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setHotelPaymentType($HotelPaymentType)
    {
      $this->HotelPaymentType = $HotelPaymentType;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setNumberOfChildren($NumberOfChildren)
    {
      $this->NumberOfChildren = $NumberOfChildren;
      return $this;
    }

    /**
     * @return HotelTransportation
     */
    public function getHotelTransportation()
    {
      return $this->HotelTransportation;
    }

    /**
     * @param HotelTransportation $HotelTransportation
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setHotelTransportation($HotelTransportation)
    {
      $this->HotelTransportation = $HotelTransportation;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setNumberOfAdults($NumberOfAdults)
    {
      $this->NumberOfAdults = $NumberOfAdults;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setNumberOfRooms($NumberOfRooms)
    {
      $this->NumberOfRooms = $NumberOfRooms;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxProperties()
    {
      return $this->MaxProperties;
    }

    /**
     * @param int $MaxProperties
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setMaxProperties($MaxProperties)
    {
      $this->MaxProperties = $MaxProperties;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRelaxed()
    {
      return $this->IsRelaxed;
    }

    /**
     * @param boolean $IsRelaxed
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setIsRelaxed($IsRelaxed)
    {
      $this->IsRelaxed = $IsRelaxed;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setPreferredCurrency($PreferredCurrency)
    {
      $this->PreferredCurrency = $PreferredCurrency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableHotelsOnly()
    {
      return $this->AvailableHotelsOnly;
    }

    /**
     * @param boolean $AvailableHotelsOnly
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setAvailableHotelsOnly($AvailableHotelsOnly)
    {
      $this->AvailableHotelsOnly = $AvailableHotelsOnly;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setMaxWait($MaxWait)
    {
      $this->MaxWait = $MaxWait;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAggregateResults()
    {
      return $this->AggregateResults;
    }

    /**
     * @param boolean $AggregateResults
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setAggregateResults($AggregateResults)
    {
      $this->AggregateResults = $AggregateResults;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnPropertyDescription()
    {
      return $this->ReturnPropertyDescription;
    }

    /**
     * @param boolean $ReturnPropertyDescription
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setReturnPropertyDescription($ReturnPropertyDescription)
    {
      $this->ReturnPropertyDescription = $ReturnPropertyDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOfRatePlans()
    {
      return $this->NumOfRatePlans;
    }

    /**
     * @param int $NumOfRatePlans
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setNumOfRatePlans($NumOfRatePlans)
    {
      $this->NumOfRatePlans = $NumOfRatePlans;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnAmenities()
    {
      return $this->ReturnAmenities;
    }

    /**
     * @param boolean $ReturnAmenities
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchModifiers
     */
    public function setReturnAmenities($ReturnAmenities)
    {
      $this->ReturnAmenities = $ReturnAmenities;
      return $this;
    }

}
