<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirFareDisplayModifiers
{

    /**
     * @var typeFareTripType[] $TripType
     */
    protected $TripType = null;

    /**
     * @var CabinClass $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var PenaltyFareInformation $PenaltyFareInformation
     */
    protected $PenaltyFareInformation = null;

    /**
     * @var int $MaxResponses
     */
    protected $MaxResponses = null;

    /**
     * @var date $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var date $TicketingDate
     */
    protected $TicketingDate = null;

    /**
     * @var date $ReturnDate
     */
    protected $ReturnDate = null;

    /**
     * @var boolean $BaseFareOnly
     */
    protected $BaseFareOnly = null;

    /**
     * @var boolean $UnrestrictedFaresOnly
     */
    protected $UnrestrictedFaresOnly = null;

    /**
     * @var typeFaresIndicator $FaresIndicator
     */
    protected $FaresIndicator = null;

    /**
     * @var typeCurrency $CurrencyType
     */
    protected $CurrencyType = null;

    /**
     * @var boolean $IncludeTaxes
     */
    protected $IncludeTaxes = null;

    /**
     * @var boolean $IncludeEstimatedTaxes
     */
    protected $IncludeEstimatedTaxes = null;

    /**
     * @var boolean $IncludeSurcharges
     */
    protected $IncludeSurcharges = null;

    /**
     * @var typeATPCOGlobalIndicator $GlobalIndicator
     */
    protected $GlobalIndicator = null;

    /**
     * @var boolean $ProhibitMinStayFares
     */
    protected $ProhibitMinStayFares = null;

    /**
     * @var boolean $ProhibitMaxStayFares
     */
    protected $ProhibitMaxStayFares = null;

    /**
     * @var boolean $ProhibitAdvancePurchaseFares
     */
    protected $ProhibitAdvancePurchaseFares = null;

    /**
     * @var boolean $ProhibitNonRefundableFares
     */
    protected $ProhibitNonRefundableFares = null;

    /**
     * @var boolean $ValidatedFaresOnly
     */
    protected $ValidatedFaresOnly = null;

    /**
     * @var boolean $ProhibitTravelRestrictedFares
     */
    protected $ProhibitTravelRestrictedFares = null;

    /**
     * @var typeCurrency $FiledCurrency
     */
    protected $FiledCurrency = null;

    /**
     * @param CabinClass $CabinClass
     * @param PenaltyFareInformation $PenaltyFareInformation
     * @param int $MaxResponses
     * @param date $DepartureDate
     * @param date $TicketingDate
     * @param date $ReturnDate
     * @param boolean $BaseFareOnly
     * @param boolean $UnrestrictedFaresOnly
     * @param typeFaresIndicator $FaresIndicator
     * @param typeCurrency $CurrencyType
     * @param boolean $IncludeTaxes
     * @param boolean $IncludeEstimatedTaxes
     * @param boolean $IncludeSurcharges
     * @param typeATPCOGlobalIndicator $GlobalIndicator
     * @param boolean $ProhibitMinStayFares
     * @param boolean $ProhibitMaxStayFares
     * @param boolean $ProhibitAdvancePurchaseFares
     * @param boolean $ProhibitNonRefundableFares
     * @param boolean $ValidatedFaresOnly
     * @param boolean $ProhibitTravelRestrictedFares
     * @param typeCurrency $FiledCurrency
     */
    public function __construct($CabinClass = null, $PenaltyFareInformation = null, $MaxResponses = null, $DepartureDate = null, $TicketingDate = null, $ReturnDate = null, $BaseFareOnly = null, $UnrestrictedFaresOnly = null, $FaresIndicator = null, $CurrencyType = null, $IncludeTaxes = null, $IncludeEstimatedTaxes = null, $IncludeSurcharges = null, $GlobalIndicator = null, $ProhibitMinStayFares = null, $ProhibitMaxStayFares = null, $ProhibitAdvancePurchaseFares = null, $ProhibitNonRefundableFares = null, $ValidatedFaresOnly = null, $ProhibitTravelRestrictedFares = null, $FiledCurrency = null)
    {
      $this->CabinClass = $CabinClass;
      $this->PenaltyFareInformation = $PenaltyFareInformation;
      $this->MaxResponses = $MaxResponses;
      $this->DepartureDate = $DepartureDate;
      $this->TicketingDate = $TicketingDate;
      $this->ReturnDate = $ReturnDate;
      $this->BaseFareOnly = $BaseFareOnly;
      $this->UnrestrictedFaresOnly = $UnrestrictedFaresOnly;
      $this->FaresIndicator = $FaresIndicator;
      $this->CurrencyType = $CurrencyType;
      $this->IncludeTaxes = $IncludeTaxes;
      $this->IncludeEstimatedTaxes = $IncludeEstimatedTaxes;
      $this->IncludeSurcharges = $IncludeSurcharges;
      $this->GlobalIndicator = $GlobalIndicator;
      $this->ProhibitMinStayFares = $ProhibitMinStayFares;
      $this->ProhibitMaxStayFares = $ProhibitMaxStayFares;
      $this->ProhibitAdvancePurchaseFares = $ProhibitAdvancePurchaseFares;
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      $this->ValidatedFaresOnly = $ValidatedFaresOnly;
      $this->ProhibitTravelRestrictedFares = $ProhibitTravelRestrictedFares;
      $this->FiledCurrency = $FiledCurrency;
    }

    /**
     * @return typeFareTripType[]
     */
    public function getTripType()
    {
      return $this->TripType;
    }

    /**
     * @param typeFareTripType[] $TripType
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setTripType(array $TripType = null)
    {
      $this->TripType = $TripType;
      return $this;
    }

    /**
     * @return CabinClass
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param CabinClass $CabinClass
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return PenaltyFareInformation
     */
    public function getPenaltyFareInformation()
    {
      return $this->PenaltyFareInformation;
    }

    /**
     * @param PenaltyFareInformation $PenaltyFareInformation
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setPenaltyFareInformation($PenaltyFareInformation)
    {
      $this->PenaltyFareInformation = $PenaltyFareInformation;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxResponses()
    {
      return $this->MaxResponses;
    }

    /**
     * @param int $MaxResponses
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setMaxResponses($MaxResponses)
    {
      $this->MaxResponses = $MaxResponses;
      return $this;
    }

    /**
     * @return date
     */
    public function getDepartureDate()
    {
      return $this->DepartureDate;
    }

    /**
     * @param date $DepartureDate
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getTicketingDate()
    {
      return $this->TicketingDate;
    }

    /**
     * @param date $TicketingDate
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setTicketingDate($TicketingDate)
    {
      $this->TicketingDate = $TicketingDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getReturnDate()
    {
      return $this->ReturnDate;
    }

    /**
     * @param date $ReturnDate
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setReturnDate($ReturnDate)
    {
      $this->ReturnDate = $ReturnDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBaseFareOnly()
    {
      return $this->BaseFareOnly;
    }

    /**
     * @param boolean $BaseFareOnly
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setBaseFareOnly($BaseFareOnly)
    {
      $this->BaseFareOnly = $BaseFareOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnrestrictedFaresOnly()
    {
      return $this->UnrestrictedFaresOnly;
    }

    /**
     * @param boolean $UnrestrictedFaresOnly
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setUnrestrictedFaresOnly($UnrestrictedFaresOnly)
    {
      $this->UnrestrictedFaresOnly = $UnrestrictedFaresOnly;
      return $this;
    }

    /**
     * @return typeFaresIndicator
     */
    public function getFaresIndicator()
    {
      return $this->FaresIndicator;
    }

    /**
     * @param typeFaresIndicator $FaresIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setFaresIndicator($FaresIndicator)
    {
      $this->FaresIndicator = $FaresIndicator;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrencyType()
    {
      return $this->CurrencyType;
    }

    /**
     * @param typeCurrency $CurrencyType
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setCurrencyType($CurrencyType)
    {
      $this->CurrencyType = $CurrencyType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeTaxes()
    {
      return $this->IncludeTaxes;
    }

    /**
     * @param boolean $IncludeTaxes
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setIncludeTaxes($IncludeTaxes)
    {
      $this->IncludeTaxes = $IncludeTaxes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeEstimatedTaxes()
    {
      return $this->IncludeEstimatedTaxes;
    }

    /**
     * @param boolean $IncludeEstimatedTaxes
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setIncludeEstimatedTaxes($IncludeEstimatedTaxes)
    {
      $this->IncludeEstimatedTaxes = $IncludeEstimatedTaxes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeSurcharges()
    {
      return $this->IncludeSurcharges;
    }

    /**
     * @param boolean $IncludeSurcharges
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setIncludeSurcharges($IncludeSurcharges)
    {
      $this->IncludeSurcharges = $IncludeSurcharges;
      return $this;
    }

    /**
     * @return typeATPCOGlobalIndicator
     */
    public function getGlobalIndicator()
    {
      return $this->GlobalIndicator;
    }

    /**
     * @param typeATPCOGlobalIndicator $GlobalIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setGlobalIndicator($GlobalIndicator)
    {
      $this->GlobalIndicator = $GlobalIndicator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitMinStayFares()
    {
      return $this->ProhibitMinStayFares;
    }

    /**
     * @param boolean $ProhibitMinStayFares
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setProhibitMinStayFares($ProhibitMinStayFares)
    {
      $this->ProhibitMinStayFares = $ProhibitMinStayFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitMaxStayFares()
    {
      return $this->ProhibitMaxStayFares;
    }

    /**
     * @param boolean $ProhibitMaxStayFares
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setProhibitMaxStayFares($ProhibitMaxStayFares)
    {
      $this->ProhibitMaxStayFares = $ProhibitMaxStayFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitAdvancePurchaseFares()
    {
      return $this->ProhibitAdvancePurchaseFares;
    }

    /**
     * @param boolean $ProhibitAdvancePurchaseFares
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setProhibitAdvancePurchaseFares($ProhibitAdvancePurchaseFares)
    {
      $this->ProhibitAdvancePurchaseFares = $ProhibitAdvancePurchaseFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitNonRefundableFares()
    {
      return $this->ProhibitNonRefundableFares;
    }

    /**
     * @param boolean $ProhibitNonRefundableFares
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setProhibitNonRefundableFares($ProhibitNonRefundableFares)
    {
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValidatedFaresOnly()
    {
      return $this->ValidatedFaresOnly;
    }

    /**
     * @param boolean $ValidatedFaresOnly
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setValidatedFaresOnly($ValidatedFaresOnly)
    {
      $this->ValidatedFaresOnly = $ValidatedFaresOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitTravelRestrictedFares()
    {
      return $this->ProhibitTravelRestrictedFares;
    }

    /**
     * @param boolean $ProhibitTravelRestrictedFares
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setProhibitTravelRestrictedFares($ProhibitTravelRestrictedFares)
    {
      $this->ProhibitTravelRestrictedFares = $ProhibitTravelRestrictedFares;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getFiledCurrency()
    {
      return $this->FiledCurrency;
    }

    /**
     * @param typeCurrency $FiledCurrency
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareDisplayModifiers
     */
    public function setFiledCurrency($FiledCurrency)
    {
      $this->FiledCurrency = $FiledCurrency;
      return $this;
    }

}
