<?php

namespace FilippoToso\Travelport\Rail;

class RailExchangeSolution extends typeRailPricingSolution
{

    /**
     * @var RailExchangeInfo $RailExchangeInfo
     */
    protected $RailExchangeInfo = null;

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
     * @param RailExchangeInfo $RailExchangeInfo
     */
    public function __construct($RailJourney = null, $RailJourneyRef = null, $RailPricingInfo = null, $Key = null, $OfferId = null, $ProviderCode = null, $SupplierCode = null, $HostTokenRef = null, $Reference = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null, $RailExchangeInfo = null)
    {
      parent::__construct($RailJourney, $RailJourneyRef, $RailPricingInfo, $Key, $OfferId, $ProviderCode, $SupplierCode, $HostTokenRef, $Reference, $TotalPrice, $BasePrice, $ApproximateTotalPrice, $ApproximateBasePrice, $EquivalentBasePrice, $Taxes, $Fees, $Services, $ApproximateTaxes, $ApproximateFees);
      $this->RailExchangeInfo = $RailExchangeInfo;
    }

    /**
     * @return RailExchangeInfo
     */
    public function getRailExchangeInfo()
    {
      return $this->RailExchangeInfo;
    }

    /**
     * @param RailExchangeInfo $RailExchangeInfo
     * @return \FilippoToso\Travelport\Rail\RailExchangeSolution
     */
    public function setRailExchangeInfo($RailExchangeInfo)
    {
      $this->RailExchangeInfo = $RailExchangeInfo;
      return $this;
    }

}
