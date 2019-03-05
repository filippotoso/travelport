<?php

namespace FilippoToso\Travelport\Terminal;

class TerminalService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'NextResultReference' => 'FilippoToso\\Travelport\\Terminal\\NextResultReference',
  'Airport' => 'FilippoToso\\Travelport\\Terminal\\Airport',
  'VendorLocation' => 'FilippoToso\\Travelport\\Terminal\\VendorLocation',
  'typeVendorLocation' => 'FilippoToso\\Travelport\\Terminal\\typeVendorLocation',
  'AgencySellInfo' => 'FilippoToso\\Travelport\\Terminal\\AgencySellInfo',
  'AgencyInfo' => 'FilippoToso\\Travelport\\Terminal\\AgencyInfo',
  'AgentAction' => 'FilippoToso\\Travelport\\Terminal\\AgentAction',
  'AirExchangeInfo' => 'FilippoToso\\Travelport\\Terminal\\AirExchangeInfo',
  'TotalPenaltyTaxInfo' => 'FilippoToso\\Travelport\\Terminal\\TotalPenaltyTaxInfo',
  'TicketFeeInfo' => 'FilippoToso\\Travelport\\Terminal\\TicketFeeInfo',
  'Auxdata' => 'FilippoToso\\Travelport\\Terminal\\Auxdata',
  'Entry' => 'FilippoToso\\Travelport\\Terminal\\Entry',
  'Carrier' => 'FilippoToso\\Travelport\\Terminal\\Carrier',
  'Provider' => 'FilippoToso\\Travelport\\Terminal\\Provider',
  'Certificate' => 'FilippoToso\\Travelport\\Terminal\\Certificate',
  'Check' => 'FilippoToso\\Travelport\\Terminal\\Check',
  'City' => 'FilippoToso\\Travelport\\Terminal\\City',
  'CityOrAirport' => 'FilippoToso\\Travelport\\Terminal\\CityOrAirport',
  'CoordinateLocation' => 'FilippoToso\\Travelport\\Terminal\\CoordinateLocation',
  'RailLocation' => 'FilippoToso\\Travelport\\Terminal\\RailLocation',
  'Credentials' => 'FilippoToso\\Travelport\\Terminal\\Credentials',
  'CreditCard' => 'FilippoToso\\Travelport\\Terminal\\CreditCard',
  'CustomizedNameData' => 'FilippoToso\\Travelport\\Terminal\\CustomizedNameData',
  'DebitCard' => 'FilippoToso\\Travelport\\Terminal\\DebitCard',
  'Requisition' => 'FilippoToso\\Travelport\\Terminal\\Requisition',
  'MiscFormOfPayment' => 'FilippoToso\\Travelport\\Terminal\\MiscFormOfPayment',
  'SupplierLocator' => 'FilippoToso\\Travelport\\Terminal\\SupplierLocator',
  'typePaymentCard' => 'FilippoToso\\Travelport\\Terminal\\typePaymentCard',
  'CreditCardAuth' => 'FilippoToso\\Travelport\\Terminal\\CreditCardAuth',
  'typeGeneralReference' => 'FilippoToso\\Travelport\\Terminal\\typeGeneralReference',
  'typeFormOfPaymentPNRReference' => 'FilippoToso\\Travelport\\Terminal\\typeFormOfPaymentPNRReference',
  'FormOfPayment' => 'FilippoToso\\Travelport\\Terminal\\FormOfPayment',
  'EnettVan' => 'FilippoToso\\Travelport\\Terminal\\EnettVan',
  'typeVoucherInformation' => 'FilippoToso\\Travelport\\Terminal\\typeVoucherInformation',
  'UnitedNations' => 'FilippoToso\\Travelport\\Terminal\\UnitedNations',
  'DirectPayment' => 'FilippoToso\\Travelport\\Terminal\\DirectPayment',
  'AgentVoucher' => 'FilippoToso\\Travelport\\Terminal\\AgentVoucher',
  'typeAgencyPayment' => 'FilippoToso\\Travelport\\Terminal\\typeAgencyPayment',
  'FormOfPaymentRef' => 'FilippoToso\\Travelport\\Terminal\\FormOfPaymentRef',
  'Distance' => 'FilippoToso\\Travelport\\Terminal\\Distance',
  'Email' => 'FilippoToso\\Travelport\\Terminal\\Email',
  'MealRequest' => 'FilippoToso\\Travelport\\Terminal\\MealRequest',
  'Name' => 'FilippoToso\\Travelport\\Terminal\\Name',
  'ProviderARNKSegment' => 'FilippoToso\\Travelport\\Terminal\\ProviderARNKSegment',
  'PreviousSegment' => 'FilippoToso\\Travelport\\Terminal\\PreviousSegment',
  'NextSegment' => 'FilippoToso\\Travelport\\Terminal\\NextSegment',
  'PassiveInfo' => 'FilippoToso\\Travelport\\Terminal\\PassiveInfo',
  'BookingTraveler' => 'FilippoToso\\Travelport\\Terminal\\BookingTraveler',
  'BookingTravelerName' => 'FilippoToso\\Travelport\\Terminal\\BookingTravelerName',
  'NameRemark' => 'FilippoToso\\Travelport\\Terminal\\NameRemark',
  'PhoneNumber' => 'FilippoToso\\Travelport\\Terminal\\PhoneNumber',
  'ProviderReservationInfoRef' => 'FilippoToso\\Travelport\\Terminal\\ProviderReservationInfoRef',
  'ResponseMessage' => 'FilippoToso\\Travelport\\Terminal\\ResponseMessage',
  'State' => 'FilippoToso\\Travelport\\Terminal\\State',
  'Remark' => 'FilippoToso\\Travelport\\Terminal\\Remark',
  'SegmentRemark' => 'FilippoToso\\Travelport\\Terminal\\SegmentRemark',
  'RefundRemark' => 'FilippoToso\\Travelport\\Terminal\\RefundRemark',
  'GeneralRemark' => 'FilippoToso\\Travelport\\Terminal\\GeneralRemark',
  'CommissionRemark' => 'FilippoToso\\Travelport\\Terminal\\CommissionRemark',
  'ProviderReservationLevel' => 'FilippoToso\\Travelport\\Terminal\\ProviderReservationLevel',
  'PassengerTypeLevel' => 'FilippoToso\\Travelport\\Terminal\\PassengerTypeLevel',
  'AccountingRemark' => 'FilippoToso\\Travelport\\Terminal\\AccountingRemark',
  'XMLRemark' => 'FilippoToso\\Travelport\\Terminal\\XMLRemark',
  'HostToken' => 'FilippoToso\\Travelport\\Terminal\\HostToken',
  'HostTokenList' => 'FilippoToso\\Travelport\\Terminal\\HostTokenList',
  'AppliedProfile' => 'FilippoToso\\Travelport\\Terminal\\AppliedProfile',
  'typeGuaranteeInformation' => 'FilippoToso\\Travelport\\Terminal\\typeGuaranteeInformation',
  'AccountCode' => 'FilippoToso\\Travelport\\Terminal\\AccountCode',
  'AirSearchParameters' => 'FilippoToso\\Travelport\\Terminal\\AirSearchParameters',
  'Commission' => 'FilippoToso\\Travelport\\Terminal\\Commission',
  'DeliveryInfo' => 'FilippoToso\\Travelport\\Terminal\\DeliveryInfo',
  'ShippingAddress' => 'FilippoToso\\Travelport\\Terminal\\ShippingAddress',
  'ActionStatus' => 'FilippoToso\\Travelport\\Terminal\\ActionStatus',
  'Endorsement' => 'FilippoToso\\Travelport\\Terminal\\Endorsement',
  'typeProviderReservationSpecificInfo' => 'FilippoToso\\Travelport\\Terminal\\typeProviderReservationSpecificInfo',
  'LoyaltyCard' => 'FilippoToso\\Travelport\\Terminal\\LoyaltyCard',
  'DiscountCard' => 'FilippoToso\\Travelport\\Terminal\\DiscountCard',
  'OperatedBy' => 'FilippoToso\\Travelport\\Terminal\\OperatedBy',
  'Penalty' => 'FilippoToso\\Travelport\\Terminal\\Penalty',
  'Restriction' => 'FilippoToso\\Travelport\\Terminal\\Restriction',
  'SeatAssignment' => 'FilippoToso\\Travelport\\Terminal\\SeatAssignment',
  'AirSeatAssignment' => 'FilippoToso\\Travelport\\Terminal\\AirSeatAssignment',
  'RailSeatAssignment' => 'FilippoToso\\Travelport\\Terminal\\RailSeatAssignment',
  'Characteristic' => 'FilippoToso\\Travelport\\Terminal\\Characteristic',
  'ServiceData' => 'FilippoToso\\Travelport\\Terminal\\ServiceData',
  'ServiceInfo' => 'FilippoToso\\Travelport\\Terminal\\ServiceInfo',
  'SSR' => 'FilippoToso\\Travelport\\Terminal\\SSR',
  'TravelerType' => 'FilippoToso\\Travelport\\Terminal\\TravelerType',
  'PaymentRef' => 'FilippoToso\\Travelport\\Terminal\\PaymentRef',
  'BookingTravelerRef' => 'FilippoToso\\Travelport\\Terminal\\BookingTravelerRef',
  'DiscountCardRef' => 'FilippoToso\\Travelport\\Terminal\\DiscountCardRef',
  'DriversLicenseRef' => 'FilippoToso\\Travelport\\Terminal\\DriversLicenseRef',
  'LoyaltyCardRef' => 'FilippoToso\\Travelport\\Terminal\\LoyaltyCardRef',
  'typeRemark' => 'FilippoToso\\Travelport\\Terminal\\typeRemark',
  'UnassociatedRemark' => 'FilippoToso\\Travelport\\Terminal\\UnassociatedRemark',
  'typeRemarkWithTravelerRef' => 'FilippoToso\\Travelport\\Terminal\\typeRemarkWithTravelerRef',
  'CustomerID' => 'FilippoToso\\Travelport\\Terminal\\CustomerID',
  'BaseReservation' => 'FilippoToso\\Travelport\\Terminal\\BaseReservation',
  'MCO' => 'FilippoToso\\Travelport\\Terminal\\MCO',
  'MCOText' => 'FilippoToso\\Travelport\\Terminal\\MCOText',
  'typeFreeFormText' => 'FilippoToso\\Travelport\\Terminal\\typeFreeFormText',
  'MCOPriceData' => 'FilippoToso\\Travelport\\Terminal\\MCOPriceData',
  'PassengerInfo' => 'FilippoToso\\Travelport\\Terminal\\PassengerInfo',
  'MCOInformation' => 'FilippoToso\\Travelport\\Terminal\\MCOInformation',
  'MCOExchangeInfo' => 'FilippoToso\\Travelport\\Terminal\\MCOExchangeInfo',
  'MCOFeeInfo' => 'FilippoToso\\Travelport\\Terminal\\MCOFeeInfo',
  'MCORemark' => 'FilippoToso\\Travelport\\Terminal\\MCORemark',
  'StockControl' => 'FilippoToso\\Travelport\\Terminal\\StockControl',
  'ExchangedCoupon' => 'FilippoToso\\Travelport\\Terminal\\ExchangedCoupon',
  'typeTaxInfo' => 'FilippoToso\\Travelport\\Terminal\\typeTaxInfo',
  'TaxDetail' => 'FilippoToso\\Travelport\\Terminal\\TaxDetail',
  'MetaData' => 'FilippoToso\\Travelport\\Terminal\\MetaData',
  'RoleInfo' => 'FilippoToso\\Travelport\\Terminal\\RoleInfo',
  'OSI' => 'FilippoToso\\Travelport\\Terminal\\OSI',
  'Segment' => 'FilippoToso\\Travelport\\Terminal\\Segment',
  'TravelSegment' => 'FilippoToso\\Travelport\\Terminal\\TravelSegment',
  'SearchEvent' => 'FilippoToso\\Travelport\\Terminal\\SearchEvent',
  'SearchTicketing' => 'FilippoToso\\Travelport\\Terminal\\SearchTicketing',
  'SearchPassenger' => 'FilippoToso\\Travelport\\Terminal\\SearchPassenger',
  'SpecialEquipment' => 'FilippoToso\\Travelport\\Terminal\\SpecialEquipment',
  'ContinuityCheckOverride' => 'FilippoToso\\Travelport\\Terminal\\ContinuityCheckOverride',
  'typeAgentInfo' => 'FilippoToso\\Travelport\\Terminal\\typeAgentInfo',
  'typeResultMessage' => 'FilippoToso\\Travelport\\Terminal\\typeResultMessage',
  'Location' => 'FilippoToso\\Travelport\\Terminal\\Location',
  'typeSearchTimeSpec' => 'FilippoToso\\Travelport\\Terminal\\typeSearchTimeSpec',
  'typeStructuredAddress' => 'FilippoToso\\Travelport\\Terminal\\typeStructuredAddress',
  'typeTimeRange' => 'FilippoToso\\Travelport\\Terminal\\typeTimeRange',
  'typeRateDescription' => 'FilippoToso\\Travelport\\Terminal\\typeRateDescription',
  'MediaItem' => 'FilippoToso\\Travelport\\Terminal\\MediaItem',
  'PointOfSale' => 'FilippoToso\\Travelport\\Terminal\\PointOfSale',
  'BookingTravelerInfo' => 'FilippoToso\\Travelport\\Terminal\\BookingTravelerInfo',
  'TravelInfo' => 'FilippoToso\\Travelport\\Terminal\\TravelInfo',
  'BookingSource' => 'FilippoToso\\Travelport\\Terminal\\BookingSource',
  'typeSearchLocation' => 'FilippoToso\\Travelport\\Terminal\\typeSearchLocation',
  'typeTimeSpec' => 'FilippoToso\\Travelport\\Terminal\\typeTimeSpec',
  'typeSpecificTime' => 'FilippoToso\\Travelport\\Terminal\\typeSpecificTime',
  'typeFlexibleTimeSpec' => 'FilippoToso\\Travelport\\Terminal\\typeFlexibleTimeSpec',
  'SearchExtraDays' => 'FilippoToso\\Travelport\\Terminal\\SearchExtraDays',
  'typePassengerType' => 'FilippoToso\\Travelport\\Terminal\\typePassengerType',
  'Guarantee' => 'FilippoToso\\Travelport\\Terminal\\Guarantee',
  'OtherGuaranteeInfo' => 'FilippoToso\\Travelport\\Terminal\\OtherGuaranteeInfo',
  'Payment' => 'FilippoToso\\Travelport\\Terminal\\Payment',
  'ServiceRuleType' => 'FilippoToso\\Travelport\\Terminal\\ServiceRuleType',
  'ApplicationRules' => 'FilippoToso\\Travelport\\Terminal\\ApplicationRules',
  'ApplicationLevel' => 'FilippoToso\\Travelport\\Terminal\\ApplicationLevel',
  'ApplicationLimits' => 'FilippoToso\\Travelport\\Terminal\\ApplicationLimits',
  'ModifyRules' => 'FilippoToso\\Travelport\\Terminal\\ModifyRules',
  'ModifyRule' => 'FilippoToso\\Travelport\\Terminal\\ModifyRule',
  'SecondaryTypeRules' => 'FilippoToso\\Travelport\\Terminal\\SecondaryTypeRules',
  'SecondaryTypeRule' => 'FilippoToso\\Travelport\\Terminal\\SecondaryTypeRule',
  'OptionalServiceApplicationLimitType' => 'FilippoToso\\Travelport\\Terminal\\OptionalServiceApplicationLimitType',
  'FormattedTextTextType' => 'FilippoToso\\Travelport\\Terminal\\FormattedTextTextType',
  'CorporateDiscountID' => 'FilippoToso\\Travelport\\Terminal\\CorporateDiscountID',
  'AgencyContactInfo' => 'FilippoToso\\Travelport\\Terminal\\AgencyContactInfo',
  'typeLocation' => 'FilippoToso\\Travelport\\Terminal\\typeLocation',
  'typeProfileRef' => 'FilippoToso\\Travelport\\Terminal\\typeProfileRef',
  'ServiceFeeTaxInfo' => 'FilippoToso\\Travelport\\Terminal\\ServiceFeeTaxInfo',
  'ServiceFeeInfo' => 'FilippoToso\\Travelport\\Terminal\\ServiceFeeInfo',
  'LinkedUniversalRecord' => 'FilippoToso\\Travelport\\Terminal\\LinkedUniversalRecord',
  'typeDateRange' => 'FilippoToso\\Travelport\\Terminal\\typeDateRange',
  'MarketingInformation' => 'FilippoToso\\Travelport\\Terminal\\MarketingInformation',
  'Postscript' => 'FilippoToso\\Travelport\\Terminal\\Postscript',
  'typeAgencyHierarchyReference' => 'FilippoToso\\Travelport\\Terminal\\typeAgencyHierarchyReference',
  'typeAgencyHierarchyLongReference' => 'FilippoToso\\Travelport\\Terminal\\typeAgencyHierarchyLongReference',
  'DriversLicense' => 'FilippoToso\\Travelport\\Terminal\\DriversLicense',
  'typeAssociatedRemarkWithSegmentRef' => 'FilippoToso\\Travelport\\Terminal\\typeAssociatedRemarkWithSegmentRef',
  'typeAssociatedRemark' => 'FilippoToso\\Travelport\\Terminal\\typeAssociatedRemark',
  'ShopInformation' => 'FilippoToso\\Travelport\\Terminal\\ShopInformation',
  'SearchRequest' => 'FilippoToso\\Travelport\\Terminal\\SearchRequest',
  'FlightsOffered' => 'FilippoToso\\Travelport\\Terminal\\FlightsOffered',
  'PolicyInformation' => 'FilippoToso\\Travelport\\Terminal\\PolicyInformation',
  'ReasonCode' => 'FilippoToso\\Travelport\\Terminal\\ReasonCode',
  'AgencyInformation' => 'FilippoToso\\Travelport\\Terminal\\AgencyInformation',
  'AccountInformation' => 'FilippoToso\\Travelport\\Terminal\\AccountInformation',
  'TravelerInformation' => 'FilippoToso\\Travelport\\Terminal\\TravelerInformation',
  'EmergencyContact' => 'FilippoToso\\Travelport\\Terminal\\EmergencyContact',
  'CustomProfileInformation' => 'FilippoToso\\Travelport\\Terminal\\CustomProfileInformation',
  'FileFinishingInfo' => 'FilippoToso\\Travelport\\Terminal\\FileFinishingInfo',
  'BillingPointOfSaleInfo' => 'FilippoToso\\Travelport\\Terminal\\BillingPointOfSaleInfo',
  'AgentIDOverride' => 'FilippoToso\\Travelport\\Terminal\\AgentIDOverride',
  'OverridePCC' => 'FilippoToso\\Travelport\\Terminal\\OverridePCC',
  'typeKeyword' => 'FilippoToso\\Travelport\\Terminal\\typeKeyword',
  'typeSubKey' => 'FilippoToso\\Travelport\\Terminal\\typeSubKey',
  'Keyword' => 'FilippoToso\\Travelport\\Terminal\\Keyword',
  'BookingDates' => 'FilippoToso\\Travelport\\Terminal\\BookingDates',
  'PaymentRestriction' => 'FilippoToso\\Travelport\\Terminal\\PaymentRestriction',
  'RequiredField' => 'FilippoToso\\Travelport\\Terminal\\RequiredField',
  'CardRestriction' => 'FilippoToso\\Travelport\\Terminal\\CardRestriction',
  'AddressRestriction' => 'FilippoToso\\Travelport\\Terminal\\AddressRestriction',
  'SSRInfo' => 'FilippoToso\\Travelport\\Terminal\\SSRInfo',
  'typeNonAirReservationRef' => 'FilippoToso\\Travelport\\Terminal\\typeNonAirReservationRef',
  'typeSegmentRef' => 'FilippoToso\\Travelport\\Terminal\\typeSegmentRef',
  'InvoiceRemark' => 'FilippoToso\\Travelport\\Terminal\\InvoiceRemark',
  'RequestKeyMappings' => 'FilippoToso\\Travelport\\Terminal\\RequestKeyMappings',
  'KeyMapping' => 'FilippoToso\\Travelport\\Terminal\\KeyMapping',
  'ReservationName' => 'FilippoToso\\Travelport\\Terminal\\ReservationName',
  'NameOverride' => 'FilippoToso\\Travelport\\Terminal\\NameOverride',
  'APIProvider' => 'FilippoToso\\Travelport\\Terminal\\APIProvider',
  'AvailablePseudoCityCode' => 'FilippoToso\\Travelport\\Terminal\\AvailablePseudoCityCode',
  'TransactionType' => 'FilippoToso\\Travelport\\Terminal\\TransactionType',
  'Air' => 'FilippoToso\\Travelport\\Terminal\\Air',
  'typeTransactionsAllowed' => 'FilippoToso\\Travelport\\Terminal\\typeTransactionsAllowed',
  'typeBookingTransactionsAllowed' => 'FilippoToso\\Travelport\\Terminal\\typeBookingTransactionsAllowed',
  'ThirdPartyInformation' => 'FilippoToso\\Travelport\\Terminal\\ThirdPartyInformation',
  'TravelComplianceData' => 'FilippoToso\\Travelport\\Terminal\\TravelComplianceData',
  'PolicyCompliance' => 'FilippoToso\\Travelport\\Terminal\\PolicyCompliance',
  'ContractCompliance' => 'FilippoToso\\Travelport\\Terminal\\ContractCompliance',
  'PreferredSupplier' => 'FilippoToso\\Travelport\\Terminal\\PreferredSupplier',
  'LoyaltyProgram' => 'FilippoToso\\Travelport\\Terminal\\LoyaltyProgram',
  'typeErrorInfo' => 'FilippoToso\\Travelport\\Terminal\\typeErrorInfo',
  'PermittedProviders' => 'FilippoToso\\Travelport\\Terminal\\PermittedProviders',
  'ReviewBooking' => 'FilippoToso\\Travelport\\Terminal\\ReviewBooking',
  'typeCreditCardType' => 'FilippoToso\\Travelport\\Terminal\\typeCreditCardType',
  'PersonalGeography' => 'FilippoToso\\Travelport\\Terminal\\PersonalGeography',
  'Group' => 'FilippoToso\\Travelport\\Terminal\\Group',
  'SSRRef' => 'FilippoToso\\Travelport\\Terminal\\SSRRef',
  'ConsolidatorRemark' => 'FilippoToso\\Travelport\\Terminal\\ConsolidatorRemark',
  'PseudoCityCode' => 'FilippoToso\\Travelport\\Terminal\\PseudoCityCode',
  'BaseAsyncProviderSpecificResponse' => 'FilippoToso\\Travelport\\Terminal\\BaseAsyncProviderSpecificResponse',
  'typeProviderReservationDetail' => 'FilippoToso\\Travelport\\Terminal\\typeProviderReservationDetail',
  'CabinClass' => 'FilippoToso\\Travelport\\Terminal\\CabinClass',
  'SeatAttributes' => 'FilippoToso\\Travelport\\Terminal\\SeatAttributes',
  'SeatAttribute' => 'FilippoToso\\Travelport\\Terminal\\SeatAttribute',
  'typeKeyBasedReference' => 'FilippoToso\\Travelport\\Terminal\\typeKeyBasedReference',
  'InvoiceData' => 'FilippoToso\\Travelport\\Terminal\\InvoiceData',
  'BookingTravelerInformation' => 'FilippoToso\\Travelport\\Terminal\\BookingTravelerInformation',
  'OwnershipChange' => 'FilippoToso\\Travelport\\Terminal\\OwnershipChange',
  'IndustryStandardSSR' => 'FilippoToso\\Travelport\\Terminal\\IndustryStandardSSR',
  'PaymentAdvice' => 'FilippoToso\\Travelport\\Terminal\\PaymentAdvice',
  'EmailNotification' => 'FilippoToso\\Travelport\\Terminal\\EmailNotification',
  'typeTax' => 'FilippoToso\\Travelport\\Terminal\\typeTax',
  'typeFeeInfo' => 'FilippoToso\\Travelport\\Terminal\\typeFeeInfo',
  'TaxInfoRef' => 'FilippoToso\\Travelport\\Terminal\\TaxInfoRef',
  'QueuePlace' => 'FilippoToso\\Travelport\\Terminal\\QueuePlace',
  'QueueSelector' => 'FilippoToso\\Travelport\\Terminal\\QueueSelector',
  'BaseReq' => 'FilippoToso\\Travelport\\Terminal\\BaseReq',
  'BaseCoreReq' => 'FilippoToso\\Travelport\\Terminal\\BaseCoreReq',
  'BaseSearchReq' => 'FilippoToso\\Travelport\\Terminal\\BaseSearchReq',
  'BaseCoreSearchReq' => 'FilippoToso\\Travelport\\Terminal\\BaseCoreSearchReq',
  'BaseSearchRsp' => 'FilippoToso\\Travelport\\Terminal\\BaseSearchRsp',
  'BaseRsp' => 'FilippoToso\\Travelport\\Terminal\\BaseRsp',
  'BaseCreateReservationReq' => 'FilippoToso\\Travelport\\Terminal\\BaseCreateReservationReq',
  'ErrorInfo' => 'FilippoToso\\Travelport\\Terminal\\ErrorInfo',
  'BaseCreateWithFormOfPaymentReq' => 'FilippoToso\\Travelport\\Terminal\\BaseCreateWithFormOfPaymentReq',
  'CreateTerminalSessionReq' => 'FilippoToso\\Travelport\\Terminal\\CreateTerminalSessionReq',
  'CreateTerminalSessionRsp' => 'FilippoToso\\Travelport\\Terminal\\CreateTerminalSessionRsp',
  'EndTerminalSessionReq' => 'FilippoToso\\Travelport\\Terminal\\EndTerminalSessionReq',
  'EndTerminalSessionRsp' => 'FilippoToso\\Travelport\\Terminal\\EndTerminalSessionRsp',
  'TerminalReq' => 'FilippoToso\\Travelport\\Terminal\\TerminalReq',
  'TerminalRsp' => 'FilippoToso\\Travelport\\Terminal\\TerminalRsp',
  'typeTextBlock' => 'FilippoToso\\Travelport\\Terminal\\typeTextBlock',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'D:\efes.to\components\filippo-toso\travelport\builder/../src/Wsdls/terminal_v33_0/Terminal.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param EndTerminalSessionReq $parameters
     * @return EndTerminalSessionRsp
     */
    public function service(EndTerminalSessionReq $parameters)
    {
      return $this->__soapCall('service', array($parameters));
    }

}
