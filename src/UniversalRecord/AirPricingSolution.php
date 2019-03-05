<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirPricingSolution
{

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var Journey $Journey
     */
    protected $Journey = null;

    /**
     * @var LegRef $LegRef
     */
    protected $LegRef = null;

    /**
     * @var AirPricingInfo $AirPricingInfo
     */
    protected $AirPricingInfo = null;

    /**
     * @var FareNote $FareNote
     */
    protected $FareNote = null;

    /**
     * @var FareNoteRef $FareNoteRef
     */
    protected $FareNoteRef = null;

    /**
     * @var Connection $Connection
     */
    protected $Connection = null;

    /**
     * @var MetaData $MetaData
     */
    protected $MetaData = null;

    /**
     * @var typeResultMessage[] $AirPricingResultMessage
     */
    protected $AirPricingResultMessage = null;

    /**
     * @var typeFeeInfo $FeeInfo
     */
    protected $FeeInfo = null;

    /**
     * @var typeTaxInfo $TaxInfo
     */
    protected $TaxInfo = null;

    /**
     * @var AirItinerarySolutionRef $AirItinerarySolutionRef
     */
    protected $AirItinerarySolutionRef = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var OptionalServices $OptionalServices
     */
    protected $OptionalServices = null;

    /**
     * @var AvailableSSR $AvailableSSR
     */
    protected $AvailableSSR = null;

    /**
     * @var PricingDetails $PricingDetails
     */
    protected $PricingDetails = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var boolean $CompleteItinerary
     */
    protected $CompleteItinerary = null;

    /**
     * @var date $QuoteDate
     */
    protected $QuoteDate = null;

    /**
     * @var anonymous635 $Itinerary
     */
    protected $Itinerary = null;

    /**
     * @var typeMoney $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var typeMoney $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var typeMoney $ApproximateTotalPrice
     */
    protected $ApproximateTotalPrice = null;

    /**
     * @var typeMoney $ApproximateBasePrice
     */
    protected $ApproximateBasePrice = null;

    /**
     * @var typeMoney $EquivalentBasePrice
     */
    protected $EquivalentBasePrice = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var typeMoney $Fees
     */
    protected $Fees = null;

    /**
     * @var typeMoney $Services
     */
    protected $Services = null;

    /**
     * @var typeMoney $ApproximateTaxes
     */
    protected $ApproximateTaxes = null;

    /**
     * @var typeMoney $ApproximateFees
     */
    protected $ApproximateFees = null;

    /**
     * @param typeBaseAirSegment $AirSegment
     * @param AirSegmentRef $AirSegmentRef
     * @param Journey $Journey
     * @param LegRef $LegRef
     * @param AirPricingInfo $AirPricingInfo
     * @param FareNote $FareNote
     * @param FareNoteRef $FareNoteRef
     * @param Connection $Connection
     * @param MetaData $MetaData
     * @param typeFeeInfo $FeeInfo
     * @param typeTaxInfo $TaxInfo
     * @param AirItinerarySolutionRef $AirItinerarySolutionRef
     * @param HostToken $HostToken
     * @param OptionalServices $OptionalServices
     * @param AvailableSSR $AvailableSSR
     * @param PricingDetails $PricingDetails
     * @param typeRef $Key
     * @param boolean $CompleteItinerary
     * @param date $QuoteDate
     * @param anonymous635 $Itinerary
     * @param typeMoney $TotalPrice
     * @param typeMoney $BasePrice
     * @param typeMoney $ApproximateTotalPrice
     * @param typeMoney $ApproximateBasePrice
     * @param typeMoney $EquivalentBasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $Fees
     * @param typeMoney $Services
     * @param typeMoney $ApproximateTaxes
     * @param typeMoney $ApproximateFees
     */
    public function __construct($AirSegment = null, $AirSegmentRef = null, $Journey = null, $LegRef = null, $AirPricingInfo = null, $FareNote = null, $FareNoteRef = null, $Connection = null, $MetaData = null, $FeeInfo = null, $TaxInfo = null, $AirItinerarySolutionRef = null, $HostToken = null, $OptionalServices = null, $AvailableSSR = null, $PricingDetails = null, $Key = null, $CompleteItinerary = null, $QuoteDate = null, $Itinerary = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null)
    {
      $this->AirSegment = $AirSegment;
      $this->AirSegmentRef = $AirSegmentRef;
      $this->Journey = $Journey;
      $this->LegRef = $LegRef;
      $this->AirPricingInfo = $AirPricingInfo;
      $this->FareNote = $FareNote;
      $this->FareNoteRef = $FareNoteRef;
      $this->Connection = $Connection;
      $this->MetaData = $MetaData;
      $this->FeeInfo = $FeeInfo;
      $this->TaxInfo = $TaxInfo;
      $this->AirItinerarySolutionRef = $AirItinerarySolutionRef;
      $this->HostToken = $HostToken;
      $this->OptionalServices = $OptionalServices;
      $this->AvailableSSR = $AvailableSSR;
      $this->PricingDetails = $PricingDetails;
      $this->Key = $Key;
      $this->CompleteItinerary = $CompleteItinerary;
      $this->QuoteDate = $QuoteDate;
      $this->Itinerary = $Itinerary;
      $this->TotalPrice = $TotalPrice;
      $this->BasePrice = $BasePrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      $this->EquivalentBasePrice = $EquivalentBasePrice;
      $this->Taxes = $Taxes;
      $this->Fees = $Fees;
      $this->Services = $Services;
      $this->ApproximateTaxes = $ApproximateTaxes;
      $this->ApproximateFees = $ApproximateFees;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return AirSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return Journey
     */
    public function getJourney()
    {
      return $this->Journey;
    }

    /**
     * @param Journey $Journey
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setJourney($Journey)
    {
      $this->Journey = $Journey;
      return $this;
    }

    /**
     * @return LegRef
     */
    public function getLegRef()
    {
      return $this->LegRef;
    }

    /**
     * @param LegRef $LegRef
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setLegRef($LegRef)
    {
      $this->LegRef = $LegRef;
      return $this;
    }

    /**
     * @return AirPricingInfo
     */
    public function getAirPricingInfo()
    {
      return $this->AirPricingInfo;
    }

    /**
     * @param AirPricingInfo $AirPricingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setAirPricingInfo($AirPricingInfo)
    {
      $this->AirPricingInfo = $AirPricingInfo;
      return $this;
    }

    /**
     * @return FareNote
     */
    public function getFareNote()
    {
      return $this->FareNote;
    }

    /**
     * @param FareNote $FareNote
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setFareNote($FareNote)
    {
      $this->FareNote = $FareNote;
      return $this;
    }

    /**
     * @return FareNoteRef
     */
    public function getFareNoteRef()
    {
      return $this->FareNoteRef;
    }

    /**
     * @param FareNoteRef $FareNoteRef
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setFareNoteRef($FareNoteRef)
    {
      $this->FareNoteRef = $FareNoteRef;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
      return $this->Connection;
    }

    /**
     * @param Connection $Connection
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
      return $this;
    }

    /**
     * @return MetaData
     */
    public function getMetaData()
    {
      return $this->MetaData;
    }

    /**
     * @param MetaData $MetaData
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setMetaData($MetaData)
    {
      $this->MetaData = $MetaData;
      return $this;
    }

    /**
     * @return typeResultMessage[]
     */
    public function getAirPricingResultMessage()
    {
      return $this->AirPricingResultMessage;
    }

    /**
     * @param typeResultMessage[] $AirPricingResultMessage
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setAirPricingResultMessage(array $AirPricingResultMessage = null)
    {
      $this->AirPricingResultMessage = $AirPricingResultMessage;
      return $this;
    }

    /**
     * @return typeFeeInfo
     */
    public function getFeeInfo()
    {
      return $this->FeeInfo;
    }

    /**
     * @param typeFeeInfo $FeeInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setFeeInfo($FeeInfo)
    {
      $this->FeeInfo = $FeeInfo;
      return $this;
    }

    /**
     * @return typeTaxInfo
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo $TaxInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return AirItinerarySolutionRef
     */
    public function getAirItinerarySolutionRef()
    {
      return $this->AirItinerarySolutionRef;
    }

    /**
     * @param AirItinerarySolutionRef $AirItinerarySolutionRef
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setAirItinerarySolutionRef($AirItinerarySolutionRef)
    {
      $this->AirItinerarySolutionRef = $AirItinerarySolutionRef;
      return $this;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return OptionalServices
     */
    public function getOptionalServices()
    {
      return $this->OptionalServices;
    }

    /**
     * @param OptionalServices $OptionalServices
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
      return $this;
    }

    /**
     * @return AvailableSSR
     */
    public function getAvailableSSR()
    {
      return $this->AvailableSSR;
    }

    /**
     * @param AvailableSSR $AvailableSSR
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setAvailableSSR($AvailableSSR)
    {
      $this->AvailableSSR = $AvailableSSR;
      return $this;
    }

    /**
     * @return PricingDetails
     */
    public function getPricingDetails()
    {
      return $this->PricingDetails;
    }

    /**
     * @param PricingDetails $PricingDetails
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setPricingDetails($PricingDetails)
    {
      $this->PricingDetails = $PricingDetails;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCompleteItinerary()
    {
      return $this->CompleteItinerary;
    }

    /**
     * @param boolean $CompleteItinerary
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setCompleteItinerary($CompleteItinerary)
    {
      $this->CompleteItinerary = $CompleteItinerary;
      return $this;
    }

    /**
     * @return date
     */
    public function getQuoteDate()
    {
      return $this->QuoteDate;
    }

    /**
     * @param date $QuoteDate
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setQuoteDate($QuoteDate)
    {
      $this->QuoteDate = $QuoteDate;
      return $this;
    }

    /**
     * @return anonymous635
     */
    public function getItinerary()
    {
      return $this->Itinerary;
    }

    /**
     * @param anonymous635 $Itinerary
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setItinerary($Itinerary)
    {
      $this->Itinerary = $Itinerary;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param typeMoney $BasePrice
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotalPrice()
    {
      return $this->ApproximateTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateTotalPrice
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateBasePrice()
    {
      return $this->ApproximateBasePrice;
    }

    /**
     * @param typeMoney $ApproximateBasePrice
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setApproximateBasePrice($ApproximateBasePrice)
    {
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEquivalentBasePrice()
    {
      return $this->EquivalentBasePrice;
    }

    /**
     * @param typeMoney $EquivalentBasePrice
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setEquivalentBasePrice($EquivalentBasePrice)
    {
      $this->EquivalentBasePrice = $EquivalentBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param typeMoney $Taxes
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param typeMoney $Fees
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param typeMoney $Services
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTaxes()
    {
      return $this->ApproximateTaxes;
    }

    /**
     * @param typeMoney $ApproximateTaxes
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setApproximateTaxes($ApproximateTaxes)
    {
      $this->ApproximateTaxes = $ApproximateTaxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateFees()
    {
      return $this->ApproximateFees;
    }

    /**
     * @param typeMoney $ApproximateFees
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingSolution
     */
    public function setApproximateFees($ApproximateFees)
    {
      $this->ApproximateFees = $ApproximateFees;
      return $this;
    }

}
