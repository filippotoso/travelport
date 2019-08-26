<?php

namespace FilippoToso\Travelport\Hotel;

class HotelSearchAvailabilityReq extends BaseHotelSearchReq
{

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param NextResultReference $NextResultReference
     * @param HotelSearchLocation $HotelSearchLocation
     * @param HotelSearchModifiers $HotelSearchModifiers
     * @param HotelStay $HotelStay
     * @param PointOfSale $PointOfSale
     * @param typePolicyReference $PolicyReference
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference, $HotelSearchLocation, $HotelSearchModifiers, $HotelStay, $PointOfSale, $PolicyReference)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference, $HotelSearchLocation, $HotelSearchModifiers, $HotelStay, $PointOfSale, $PolicyReference);
    }

}
