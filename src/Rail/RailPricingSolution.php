<?php

namespace FilippoToso\Travelport\Rail;

class RailPricingSolution extends typeRailPricingSolution
{

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
      parent::__construct($RailJourney, $RailJourneyRef, $RailPricingInfo, $Key, $OfferId, $ProviderCode, $SupplierCode, $HostTokenRef, $Reference, $TotalPrice, $BasePrice, $ApproximateTotalPrice, $ApproximateBasePrice, $EquivalentBasePrice, $Taxes, $Fees, $Services, $ApproximateTaxes, $ApproximateFees);
    }

}
