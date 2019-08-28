<?php

namespace FilippoToso\Travelport\Rail;

abstract class typeRailPricingSolution
{

    /**
     * @var RailJourney $RailJourney
     */
    protected $RailJourney = null;

    /**
     * @var RailJourneyRef $RailJourneyRef
     */
    protected $RailJourneyRef = null;

    /**
     * @var RailPricingInfo $RailPricingInfo
     */
    protected $RailPricingInfo = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var int $OfferId
     */
    protected $OfferId = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var typeRef $HostTokenRef
     */
    protected $HostTokenRef = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

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
     * @param RailJourney $RailJourney
     * @param RailJourneyRef $RailJourneyRef
     * @param RailPricingInfo $RailPricingInfo
     * @param typeRef $Key
     * @param int $OfferId
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param typeRef $HostTokenRef
     * @param string $Reference
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
    public function __construct($RailJourney = null, $RailJourneyRef = null, $RailPricingInfo = null, $Key = null, $OfferId = null, $ProviderCode = null, $SupplierCode = null, $HostTokenRef = null, $Reference = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null)
    {
      $this->RailJourney = $RailJourney;
      $this->RailJourneyRef = $RailJourneyRef;
      $this->RailPricingInfo = $RailPricingInfo;
      $this->Key = $Key;
      $this->OfferId = $OfferId;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->HostTokenRef = $HostTokenRef;
      $this->Reference = $Reference;
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
     * @return RailJourney
     */
    public function getRailJourney()
    {
      return $this->RailJourney;
    }

    /**
     * @param RailJourney $RailJourney
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setRailJourney($RailJourney)
    {
      $this->RailJourney = $RailJourney;
      return $this;
    }

    /**
     * @return RailJourneyRef
     */
    public function getRailJourneyRef()
    {
      return $this->RailJourneyRef;
    }

    /**
     * @param RailJourneyRef $RailJourneyRef
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setRailJourneyRef($RailJourneyRef)
    {
      $this->RailJourneyRef = $RailJourneyRef;
      return $this;
    }

    /**
     * @return RailPricingInfo
     */
    public function getRailPricingInfo()
    {
      return $this->RailPricingInfo;
    }

    /**
     * @param RailPricingInfo $RailPricingInfo
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setRailPricingInfo($RailPricingInfo)
    {
      $this->RailPricingInfo = $RailPricingInfo;
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getOfferId()
    {
      return $this->OfferId;
    }

    /**
     * @param int $OfferId
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setOfferId($OfferId)
    {
      $this->OfferId = $OfferId;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getHostTokenRef()
    {
      return $this->HostTokenRef;
    }

    /**
     * @param typeRef $HostTokenRef
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setHostTokenRef($HostTokenRef)
    {
      $this->HostTokenRef = $HostTokenRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
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
     * @return \FilippoToso\Travelport\Rail\typeRailPricingSolution
     */
    public function setApproximateFees($ApproximateFees)
    {
      $this->ApproximateFees = $ApproximateFees;
      return $this;
    }

}
