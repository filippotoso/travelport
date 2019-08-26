<?php

namespace FilippoToso\Travelport\UniversalRecord;

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
    public function __construct($RailJourney, $RailJourneyRef, $RailPricingInfo, $Key, $OfferId, $ProviderCode, $SupplierCode, $HostTokenRef, $Reference, $TotalPrice, $BasePrice, $ApproximateTotalPrice, $ApproximateBasePrice, $EquivalentBasePrice, $Taxes, $Fees, $Services, $ApproximateTaxes, $ApproximateFees)
    {
      parent::__construct($RailJourney, $RailJourneyRef, $RailPricingInfo, $Key, $OfferId, $ProviderCode, $SupplierCode, $HostTokenRef, $Reference, $TotalPrice, $BasePrice, $ApproximateTotalPrice, $ApproximateBasePrice, $EquivalentBasePrice, $Taxes, $Fees, $Services, $ApproximateTaxes, $ApproximateFees);
    }

}
