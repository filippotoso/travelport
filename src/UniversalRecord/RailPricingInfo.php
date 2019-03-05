<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailPricingInfo
{

    /**
     * @var RailFare $RailFare
     */
    protected $RailFare = null;

    /**
     * @var RailFareRef $RailFareRef
     */
    protected $RailFareRef = null;

    /**
     * @var RailBookingInfo $RailBookingInfo
     */
    protected $RailBookingInfo = null;

    /**
     * @var typePassengerType[] $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeMoney $ExchangeAmount
     */
    protected $ExchangeAmount = null;

    /**
     * @var typeMoney $ApproximateExchangeAmount
     */
    protected $ApproximateExchangeAmount = null;

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
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param RailFare $RailFare
     * @param RailFareRef $RailFareRef
     * @param RailBookingInfo $RailBookingInfo
     * @param BookingTravelerRef $BookingTravelerRef
     * @param typeRef $Key
     * @param typeMoney $ExchangeAmount
     * @param typeMoney $ApproximateExchangeAmount
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
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($RailFare = null, $RailFareRef = null, $RailBookingInfo = null, $BookingTravelerRef = null, $Key = null, $ExchangeAmount = null, $ApproximateExchangeAmount = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null, $ElStat = null, $KeyOverride = null)
    {
      $this->RailFare = $RailFare;
      $this->RailFareRef = $RailFareRef;
      $this->RailBookingInfo = $RailBookingInfo;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->Key = $Key;
      $this->ExchangeAmount = $ExchangeAmount;
      $this->ApproximateExchangeAmount = $ApproximateExchangeAmount;
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
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return RailFare
     */
    public function getRailFare()
    {
      return $this->RailFare;
    }

    /**
     * @param RailFare $RailFare
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setRailFare($RailFare)
    {
      $this->RailFare = $RailFare;
      return $this;
    }

    /**
     * @return RailFareRef
     */
    public function getRailFareRef()
    {
      return $this->RailFareRef;
    }

    /**
     * @param RailFareRef $RailFareRef
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setRailFareRef($RailFareRef)
    {
      $this->RailFareRef = $RailFareRef;
      return $this;
    }

    /**
     * @return RailBookingInfo
     */
    public function getRailBookingInfo()
    {
      return $this->RailBookingInfo;
    }

    /**
     * @param RailBookingInfo $RailBookingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setRailBookingInfo($RailBookingInfo)
    {
      $this->RailBookingInfo = $RailBookingInfo;
      return $this;
    }

    /**
     * @return typePassengerType[]
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param typePassengerType[] $PassengerType
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setPassengerType(array $PassengerType = null)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return BookingTravelerRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getExchangeAmount()
    {
      return $this->ExchangeAmount;
    }

    /**
     * @param typeMoney $ExchangeAmount
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setExchangeAmount($ExchangeAmount)
    {
      $this->ExchangeAmount = $ExchangeAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateExchangeAmount()
    {
      return $this->ApproximateExchangeAmount;
    }

    /**
     * @param typeMoney $ApproximateExchangeAmount
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setApproximateExchangeAmount($ApproximateExchangeAmount)
    {
      $this->ApproximateExchangeAmount = $ApproximateExchangeAmount;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setApproximateFees($ApproximateFees)
    {
      $this->ApproximateFees = $ApproximateFees;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
